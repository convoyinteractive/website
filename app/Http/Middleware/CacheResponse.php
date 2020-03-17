<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Cache\Factory as Cache;

class CacheResponse
{
    protected $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function handle($request, Closure $next)
    {
        if (in_array(app()->environment(), ['local', 'dev', 'stage'])) {
            return $next($request);
        }

        if ($response = $this->cachedResponse($request)) {
            return $response;
        }

        $response = $next($request);

        if ($this->shouldCache($request, $response)) {
            $this->createCachedResponse($request, $response);
        }

        return $response;
    }

    protected function cachedResponse($request)
    {
        return $this->cache->get($this->cacheKey($request), null);
    }

    protected function createCachedResponse($request, $response)
    {
        $this->cache->forever($this->cacheKey($request), $response->getContent());
    }

    protected function shouldCache($request, $response)
    {
        return $request->isMethod('GET') && $response->getStatusCode() == 200;
    }

    protected function cacheKey($request)
    {
        return str_replace('/', '-', ltrim($request->getPathInfo(), '/'));
    }
}
