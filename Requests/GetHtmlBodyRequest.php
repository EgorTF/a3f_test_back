<?php

namespace Requests;

use Exception;

class GetHtmlBodyRequest
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getHtmlBody(): string
    {
        $ch = curl_init(url: $this->url);
        curl_setopt_array(handle: $ch, options: array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->url,
        ));

        return curl_exec(handle: $ch);
    }
}