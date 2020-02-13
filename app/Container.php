<?php

namespace App;

use Laravel\Lumen\Application;

class Container extends Application
{
    public function prepareForConsoleCommand($aliases = true)
    {
        $this->withFacades($aliases);

        $this->make('cache');
    }
}
