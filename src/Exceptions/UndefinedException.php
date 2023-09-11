<?php

declare(strict_types=1);

namespace Kazemmdev\HttpStatus\Exceptions;

use Error;

final class UndefinedException extends Error
{
    /**
     * @param  class-string  $enum
     * @param  string  $case
     * @return void
     */
    public function __construct(string $enum, string $case)
    {
        parent::__construct(message: "Undefined constant $enum::$case.");
    }
}