<?php

namespace MediaLib;

trait Autoplay
{
    /** @var bool $autoplay */
    private $autoplay;
    
    /**
     * @return bool
     */
    public function isAutoplay(): bool
    {
        return isset($this->autoplay) ? $this->autoplay : false;
    }
    
    /**
     * @param bool $autoplay
     * @return Autoplay
     */
    public function setAutoplay(bool $autoplay): void
    {
        $this->autoplay = $autoplay;
    }
    
}