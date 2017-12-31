<?php

class Api
{
    //portfolioApi
    static function getCollection($collection)
    {
        $url = 'http://localhost/lazpet/cms/api/collections/get/' . $collection . '?token=3c0832053ddb5a5ab0fb41711c7cd2';
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
        $query = curl_exec($curl_handle);

        $jsonData = $query;
        $data = json_decode($jsonData, true);
        $data = $data['entries'];
       // var_dump($data);
        return $data;
    }
};