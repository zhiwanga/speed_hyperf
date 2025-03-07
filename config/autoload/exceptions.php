<?php

declare(strict_types=1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'handler' => [
        'http' => [
            \App\Exception\Handler\ValidationExceptionHandler::class,
            \App\Exception\Handler\SystemExceptionHandler::class,
            \App\Exception\Handler\BaseExceptionHandler::class,

            \App\Exception\Handler\AppExceptionHandler::class,
            \Hyperf\Validation\ValidationExceptionHandler::class,
            \Hyperf\HttpServer\Exception\Handler\HttpExceptionHandler::class,
        ],
    ],
]; 