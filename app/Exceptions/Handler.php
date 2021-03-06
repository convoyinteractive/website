<?php

namespace App\Exceptions;

use App\Sitemap;
use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Exception\ParseException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        HttpException::class,
        FileNotFoundException::class,
    ];

    public function render($request, Throwable $exception)
    {
        if (in_array(app('env'), ['local', 'dev'])) {
            return parent::render($request, $exception);
        }

        if ($exception instanceof HttpException) {
            $statusCode = $exception->getStatusCode();

            if ($statusCode === 404) {
                return response(view('error', [
                    'suggestion' => $this->similar($request->path()),
                    'message' => Response::$statusTexts[$statusCode],
                ]), $statusCode);
            }

            return response(view('error', [
                'message' => Response::$statusTexts[$statusCode],
            ]), $statusCode);
        }

        if ($exception instanceof FileNotFoundException) {
            return response(view('error', [
                'suggestion' => $this->similar($request->path()),
                'message' => 'Not found',
            ]), 404);
        }

        if ($exception instanceof ParseException) {
            return response(view('error', [
                'message' => 'Could not parse the blueprint',
            ]), 500);
        }

        return response(view('error', [
            'message' => 'Something went wrong',
        ]), 500);
    }

    protected function similar($path)
    {
        return (new Sitemap(
            app('translator')->getLocale()
        ))->similar($path);
    }
}
