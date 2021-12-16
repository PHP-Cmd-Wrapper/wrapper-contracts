<?php

namespace CmdWrapper\Contracts;

class ComputedVersion implements Version
{
    public function __construct(
        protected int $major,
        protected int $minor,
        protected ?int $patch,
    ) {
        //
    }

    public function major(): int
    {
        return $this->major;
    }

    public function minor(): int
    {
        return $this->minor;
    }

    public function patch(): ?int
    {
        return $this->patch;
    }
}
