# YellowWave\SwaggerClient\PingApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ping**](PingApi.md#ping) | **GET** /ping | Ping

# **ping**
> ping()

Ping

Use this call to ping the service.  **Error codes**  | Code  | Message         | |-------|-----------------| | `400` | Bad Request     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ping();
} catch (Exception $e) {
    echo 'Exception when calling PingApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

