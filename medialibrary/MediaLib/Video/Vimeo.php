<?php

namespace MediaLib\Video;


class Vimeo extends Video
{
    /** @var string $color */
    private $color;


    function getCode() : string
    {
        return ltrim(parse_url($this->getUrl(), PHP_URL_PATH), '/');
    }

    public function getHtml(): string
    {
        return '<iframe src="';
        //. $video_url . '" ' . $html_attibutes . '></iframe>';
    }


    /** getters and setters */
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Vimeo
     */
    public function setColor(string $color): Vimeo
    {
        $this->color = $color;
        return $this;
    }

}