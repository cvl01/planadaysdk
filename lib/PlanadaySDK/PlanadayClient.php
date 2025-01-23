<?php

namespace YellowWave\PlanadaySDK;

use YellowWave\PlanadaySDK\Configuration;
use YellowWave\PlanadaySDK\Api\BookingApi;
use YellowWave\PlanadaySDK\Api\CourseApi;
use YellowWave\PlanadaySDK\Api\CoursetemplateApi;
use YellowWave\PlanadaySDK\Api\DaypartApi;
use YellowWave\PlanadaySDK\Api\ExtrafieldsApi;
use YellowWave\PlanadaySDK\Api\ImageApi;
use YellowWave\PlanadaySDK\Api\InstructorApi;
use YellowWave\PlanadaySDK\Api\LabelApi;
use YellowWave\PlanadaySDK\Api\LocationApi;
use YellowWave\PlanadaySDK\Api\PingApi;

class PlanadayClient
{
    /**
     * @var Configuration
     */
    private $config;

    /**
     * @var array
     */
    private $apiInstances = [];

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * PlanadayClient constructor.
     * 
     * @param string $apiKey The API key for authentication
     * @param string $baseUrl Optional base URL for the API
     * @param array $additionalConfig Optional additional configuration
     */
    public function __construct(
        string $apiKey,
        string $baseUrl = 'https://apitest.api.planaday.net/v1',
        array $additionalConfig = []
    ) {
        $this->baseUrl = $baseUrl;
        $this->config = Configuration::getDefaultConfiguration()
            ->setApiKey('X-Api-Key', $apiKey)
            ->setHost($baseUrl);

        // Apply any additional configuration
        foreach ($additionalConfig as $key => $value) {
            if (method_exists($this->config, "set{$key}")) {
                $this->config->{"set{$key}"}($value);
            }
        }
    }

    /**
     * Get the current configuration
     * 
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Get the base URL
     * 
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * Get the Booking API instance
     * 
     * @return BookingApi
     */
    public function booking(): BookingApi
    {
        return $this->getApiInstance(BookingApi::class);
    }

    /**
     * Get the Course API instance
     * 
     * @return CourseApi
     */
    public function course(): CourseApi
    {
        return $this->getApiInstance(CourseApi::class);
    }

    /**
     * Get the Coursetemplate API instance
     * 
     * @return CoursetemplateApi
     */
    public function courseTemplate(): CoursetemplateApi
    {
        return $this->getApiInstance(CoursetemplateApi::class);
    }

    /**
     * Get the Daypart API instance
     * 
     * @return DaypartApi
     */
    public function daypart(): DaypartApi
    {
        return $this->getApiInstance(DaypartApi::class);
    }

    /**
     * Get the Extrafields API instance
     * 
     * @return ExtrafieldsApi
     */
    public function extraFields(): ExtrafieldsApi
    {
        return $this->getApiInstance(ExtrafieldsApi::class);
    }

    /**
     * Get the Image API instance
     * 
     * @return ImageApi
     */
    public function image(): ImageApi
    {
        return $this->getApiInstance(ImageApi::class);
    }

    /**
     * Get the Instructor API instance
     * 
     * @return InstructorApi
     */
    public function instructor(): InstructorApi
    {
        return $this->getApiInstance(InstructorApi::class);
    }

    /**
     * Get the Label API instance
     * 
     * @return LabelApi
     */
    public function label(): LabelApi
    {
        return $this->getApiInstance(LabelApi::class);
    }

    /**
     * Get the Location API instance
     * 
     * @return LocationApi
     */
    public function location(): LocationApi
    {
        return $this->getApiInstance(LocationApi::class);
    }

    /**
     * Get the Ping API instance
     * 
     * @return PingApi
     */
    public function ping(): PingApi
    {
        return $this->getApiInstance(PingApi::class);
    }

    /**
     * Get or create an API instance
     * 
     * @param string $className The API class name
     * @return mixed The API instance
     */
    private function getApiInstance(string $className)
    {
        if (!isset($this->apiInstances[$className])) {
            $this->apiInstances[$className] = new $className(null, $this->config);
        }

        return $this->apiInstances[$className];
    }

    /**
     * Update the API key
     * 
     * @param string $apiKey The new API key
     * @return self
     */
    public function setApiKey(string $apiKey): self
    {
        $this->config->setApiKey('X-Api-Key', $apiKey);
        return $this;
    }

    /**
     * Update the base URL
     * 
     * @param string $baseUrl The new base URL
     * @return self
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;
        $this->config->setHost($baseUrl);
        return $this;
    }

    /**
     * Create a new client instance
     * 
     * @param string $apiKey The API key
     * @param string $baseUrl Optional base URL
     * @param array $additionalConfig Optional additional configuration
     * @return self
     */
    public static function create(
        string $apiKey,
        string $baseUrl = 'https://apitest.api.planaday.net/v1',
        array $additionalConfig = []
    ): self {
        return new self($apiKey, $baseUrl, $additionalConfig);
    }
}
