<?php
/**
 * LocationApi
 * PHP version 5
 *
 * @category Class
 * @package  YellowWave
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

namespace YellowWave\PlanadaySDK;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YellowWave\ApiException;
use YellowWave\Configuration;
use YellowWave\HeaderSelector;
use YellowWave\ObjectSerializer;

/**
 * LocationApi Class Doc Comment
 *
 * @category Class
 * @package  YellowWave
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationApi
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
     * Operation viewLocationDetail
     *
     * View Location Detail
     *
     * @param  float $location_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \YellowWave\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \YellowWave\Model\InlineResponse2006
     */
    public function viewLocationDetail($location_id, $x_api_key)
    {
        list($response) = $this->viewLocationDetailWithHttpInfo($location_id, $x_api_key);
        return $response;
    }

    /**
     * Operation viewLocationDetailWithHttpInfo
     *
     * View Location Detail
     *
     * @param  float $location_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \YellowWave\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \YellowWave\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function viewLocationDetailWithHttpInfo($location_id, $x_api_key)
    {
        $returnType = '\YellowWave\Model\InlineResponse2006';
        $request = $this->viewLocationDetailRequest($location_id, $x_api_key);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YellowWave\Model\InlineResponse2006',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation viewLocationDetailAsync
     *
     * View Location Detail
     *
     * @param  float $location_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function viewLocationDetailAsync($location_id, $x_api_key)
    {
        return $this->viewLocationDetailAsyncWithHttpInfo($location_id, $x_api_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation viewLocationDetailAsyncWithHttpInfo
     *
     * View Location Detail
     *
     * @param  float $location_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function viewLocationDetailAsyncWithHttpInfo($location_id, $x_api_key)
    {
        $returnType = '\YellowWave\Model\InlineResponse2006';
        $request = $this->viewLocationDetailRequest($location_id, $x_api_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'viewLocationDetail'
     *
     * @param  float $location_id ID of the Location in the form of an integer (required)
     * @param  string $x_api_key e.g. &lt;apikey&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function viewLocationDetailRequest($location_id, $x_api_key)
    {
        // verify the required parameter 'location_id' is set
        if ($location_id === null || (is_array($location_id) && count($location_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $location_id when calling viewLocationDetail'
            );
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling viewLocationDetail'
            );
        }

        $resourcePath = '/location/{location_id}';
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
        if ($location_id !== null) {
            $resourcePath = str_replace(
                '{' . 'location_id' . '}',
                ObjectSerializer::toPathValue($location_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
