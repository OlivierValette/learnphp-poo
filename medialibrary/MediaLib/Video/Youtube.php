<?php

namespace MediaLib\Video;


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
        return '<iframe src="'; //. $video_url . '" ' . $html_attibutes . '></iframe>';
    }

}