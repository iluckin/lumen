<?php

namespace App\Exceptions\Transformers;

use Throwable;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ThrottleExceptionTransformer
 * @package App\Exceptions\Transformers
 */
class ThrottleExceptionTransformer extends Transform
{
    /**
     * @param Throwable $exception
     * @return Response
     */
    public static function transfer(Throwable $exception): Response
    {
        return fail($exception->getMessage(), 4290, null, [], 429);
    }
}
