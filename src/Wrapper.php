<?php

namespace CmdWrapper\Contracts;

/**
 * Interface for Cmd Wrapper.
 */
interface Wrapper
{
    /**
     * Get version of cmd wrapper.
     */
    public function version(): Version;
}
