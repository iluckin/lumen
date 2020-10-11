<?php

namespace App;

use Laravel\Lumen\Application as Lumen;

/**
 * Class Application
 * @package App
 */
class Application extends Lumen
{
    /**
     * @return array
     */
    public function getVersion()
    {
        return [
            'php_version'   => PHP_VERSION,
            'lumen_version' => $this->version()
        ];
    }
}
