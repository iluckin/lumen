<?php

namespace App\Exceptions\Transformers;

use Throwable;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ValidationException
 * @package App\Exceptions\Transformers
 */
class ValidationException extends Transform
{
    /**
     * @param Throwable $exception
     * @return Response
     */
    static public function transfer(Throwable $exception): Response
    {
        return fail(
            current($exception->errors())[0] ?? 'validation error.', 4220
        );
    }
}
