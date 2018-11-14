<?php

namespace MediaLib\Video;
use MediaLib\Media;


abstract class Video extends Media
{
    /** @var bool $autoplay */
    private $autoplay;
    /** @var int $frameborder */
    private $frameborder;
    /** @var bool $allowFullScreen */
    private $allowFullScreen;

    public abstract function getCode() : string;

    /** getters and setters */
    /**
     * @return bool
     */
    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }

    /**
     * @param bool $autoplay
     * @return Video
     */
    public function setAutoplay(bool $autoplay): Video
    {
        $this->autoplay = $autoplay;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrameborder(): int
    {
        return $this->frameborder;
    }

    /**
     * @param int $frameborder
     * @return Video
     */
    public function setFrameborder(int $frameborder): Video
    {
        $this->frameborder = $frameborder;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowFullScreen(): bool
    {
        return $this->allowFullScreen;
    }

    /**
     * @param bool $allowFullScreen
     * @return Video
     */
    public function setAllowFullScreen(bool $allowFullScreen): Video
    {
        $this->allowFullScreen = $allowFullScreen;
        return $this;
    }

}