<?php
/**
 * CoursetemplateApi
 * PHP version 5
 *
 * @category Class
 * @package  YellowWave\SwaggerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Planaday Public API URL
 *
 * This documentation describes the calls available in the public API of planaday.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.66
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YellowWave\SwaggerClient\PlanadaySDK;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YellowWave\SwaggerClient\ApiException;
use YellowWave\SwaggerClient\Configuration;
use YellowWave\SwaggerClient\HeaderSelector;
use YellowWave\SwaggerClient\ObjectSerializer;

/**
 * CoursetemplateApi Class Doc Comment
 *
 * @category Class
 * @package  YellowWave\SwaggerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CoursetemplateApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getListOfCoursetemplates
     *
     * Get list of Coursetemplates
     *
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \YellowWave\SwaggerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getListOfCoursetemplates($x_api_key)
    {
        $this->getListOfCoursetemplatesWithHttpInfo($x_api_key);
    }

    /**
     * Operation getListOfCoursetemplatesWithHttpInfo
     *
     * Get list of Coursetemplates
     *
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \YellowWave\SwaggerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListOfCoursetemplatesWithHttpInfo($x_api_key)
    {
        $returnType = '';
        $request = $this->getListOfCoursetemplatesRequest($x_api_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation getListOfCoursetemplatesAsync
     *
     * Get list of Coursetemplates
     *
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListOfCoursetemplatesAsync($x_api_key)
    {
        return $this->getListOfCoursetemplatesAsyncWithHttpInfo($x_api_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListOfCoursetemplatesAsyncWithHttpInfo
     *
     * Get list of Coursetemplates
     *
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListOfCoursetemplatesAsyncWithHttpInfo($x_api_key)
    {
        $returnType = '';
        $request = $this->getListOfCoursetemplatesRequest($x_api_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getListOfCoursetemplates'
     *
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getListOfCoursetemplatesRequest($x_api_key)
    {
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling getListOfCoursetemplates'
            );
        }

        $resourcePath = '/coursetemplate/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_api_key !== null) {
            $headerParams['X-Api-Key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Api-Key');
        if ($apiKey !== null) {
            $headers['X-Api-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation viewCoursetemplateDetail
     *
     * View Coursetemplate Detail
     *
     * @param  float $coursetemplate_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \YellowWave\SwaggerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function viewCoursetemplateDetail($coursetemplate_id, $x_api_key)
    {
        $this->viewCoursetemplateDetailWithHttpInfo($coursetemplate_id, $x_api_key);
    }

    /**
     * Operation viewCoursetemplateDetailWithHttpInfo
     *
     * View Coursetemplate Detail
     *
     * @param  float $coursetemplate_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \YellowWave\SwaggerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function viewCoursetemplateDetailWithHttpInfo($coursetemplate_id, $x_api_key)
    {
        $returnType = '';
        $request = $this->viewCoursetemplateDetailRequest($coursetemplate_id, $x_api_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation viewCoursetemplateDetailAsync
     *
     * View Coursetemplate Detail
     *
     * @param  float $coursetemplate_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function viewCoursetemplateDetailAsync($coursetemplate_id, $x_api_key)
    {
        return $this->viewCoursetemplateDetailAsyncWithHttpInfo($coursetemplate_id, $x_api_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation viewCoursetemplateDetailAsyncWithHttpInfo
     *
     * View Coursetemplate Detail
     *
     * @param  float $coursetemplate_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function viewCoursetemplateDetailAsyncWithHttpInfo($coursetemplate_id, $x_api_key)
    {
        $returnType = '';
        $request = $this->viewCoursetemplateDetailRequest($coursetemplate_id, $x_api_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'viewCoursetemplateDetail'
     *
     * @param  float $coursetemplate_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function viewCoursetemplateDetailRequest($coursetemplate_id, $x_api_key)
    {
        // verify the required parameter 'coursetemplate_id' is set
        if ($coursetemplate_id === null || (is_array($coursetemplate_id) && count($coursetemplate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $coursetemplate_id when calling viewCoursetemplateDetail'
            );
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling viewCoursetemplateDetail'
            );
        }

        $resourcePath = '/coursetemplate/{coursetemplate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_api_key !== null) {
            $headerParams['X-Api-Key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }

        // path params
        if ($coursetemplate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'coursetemplate_id' . '}',
                ObjectSerializer::toPathValue($coursetemplate_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Api-Key');
        if ($apiKey !== null) {
            $headers['X-Api-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
