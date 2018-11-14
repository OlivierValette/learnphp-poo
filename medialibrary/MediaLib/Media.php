<?php

// namespace definition
namespace MediaLib;

abstract class Media implements Renderable
{
    /** @var string $url */
    private $url;

    /**
     * Media constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Render
     */
    public function render(): void
    {
        echo $this->getHtml();
    }

    /** getters and setter */
    /**
     * @return mixed
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return Media
     */
    public function setUrl($url): Media
    {
        $this->url = $url;
        return $this;
    }

}