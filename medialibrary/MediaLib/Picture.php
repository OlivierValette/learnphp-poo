<?php

namespace MediaLib;


class Picture extends Media
{
    /** @var string $alt */
    private $alt;

    /**
     * @return string HTML tag for image
     */
    public function getHtml(): string
    {
        return '<img src="' . $this->getUrl() . '" alt="' . $this->getAlt(). '">';
    }

    /** getters and setters */
    /**
     * @return string
     */
    public function getAlt (): ?string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     * @return Picture
     */
    public function setAlt (string $alt): Picture
    {
        $this->alt = $alt;
        return $this;
    }


}