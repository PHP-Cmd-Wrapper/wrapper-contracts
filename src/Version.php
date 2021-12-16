<?php

namespace CmdWrapper\Contracts;

/**
 * Interface for software's Version.
 */
interface Version
{
    /**
     * Get major version.
     */
    public function major(): int;

    /**
     * Get minor version.
     */
    public function minor(): int;

    /**
     * Get patch version.
     */
    public function patch(): ?int;
}
