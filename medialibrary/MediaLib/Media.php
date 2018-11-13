<?php

// namespace definition
namespace MediaLib;

class Media
{
    /** @var string $url */
    private $url;

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