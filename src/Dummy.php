<?php

declare(strict_types=1);

namespace SP\ReleaseTest;

class Dummy
{
    public function __construct(
        private readonly string $name,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }
}
