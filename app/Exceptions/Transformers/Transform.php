<?php

namespace App\Exceptions\Transformers;

use Throwable;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Transform
 * @package App\Exceptions\Transformers
 */
abstract class Transform
{
    /**
     * @param Throwable $exception
     * @return mixed
     */
    abstract static public function transfer(Throwable $exception): Response;
}
