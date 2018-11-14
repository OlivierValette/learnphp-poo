<?php

namespace MediaLib;


class Audio extends Media
{
    /** @var bool $controls */
    private $controls;

    public function getHtml(): string
    {
        return "Audio HTML";
    }

    /** getters and setters */
    /**
     * @return bool
     */
    public function isControls(): bool
    {
        return $this->controls;
    }

    /**
     * @param bool $controls
     */
    public function setControls(bool $controls): void
    {
        $this->controls = $controls;
    }

}