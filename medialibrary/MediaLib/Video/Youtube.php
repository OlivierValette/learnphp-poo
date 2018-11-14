<?php

namespace MediaLib\Video;

use TagGenerator\Tag;


class Youtube extends Video
{
    function getCode() : string
    {
        $query = parse_url($this->getUrl(), PHP_URL_QUERY);     // get the query part of url
        parse_str($query, $params);                                  // get different parameters of the query in array $params
        return $params['v'];                                              // value of parameter v=
    }

    public function getHtml(): string
    {
        $video_url = 'https://www.youtube.com/embed/' . $this->getCode();
        $otag = new Tag("iframe");
        $otag-> addAttribute("src", $video_url);
        =\"' . $video_url . '\" ' . $html_attibutes . '>
        $ctag</iframe>';
        return $tag;
    }

}