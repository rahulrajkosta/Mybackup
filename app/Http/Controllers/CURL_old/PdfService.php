<?php

namespace App\Http\Controllers\CURL;

use Illuminate\Support\Facades\Http;

class PdfService
{
    private $userId;
    private $apiKey;
    private $language;

    public function __construct($userId, $apiKey)
    {
        $this->userId = $userId;
        $this->apiKey = $apiKey;
        // You can set a default language here if needed
        $this->language = 'en';
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    private function packageHoroData($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone)
    {
        return [
            'day' => $date,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'min' => $minute,
            'lat' => $latitude,
            'lon' => $longitude,
            'tzone' => $timezone
        ];
    }

    public function generatePdf($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone)
    {
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
        $response = $this->getCurlResponse($data);
        return $response;
    }

    private function getCurlResponse($data)
    {
        $apiEndpoint = "https://json.astrologyapi.com/v1/";
        // You can use Laravel's HTTP client instead of cURL
        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode($this->userId . ':' . $this->apiKey)
        ])->post($apiEndpoint, $data);

        return $response->json();
    }
}
