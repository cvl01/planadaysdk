# YellowWave\SwaggerClient\LocationApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**viewLocationDetail**](LocationApi.md#viewlocationdetail) | **GET** /location/{location_id} | View Location Detail

# **viewLocationDetail**
> \YellowWave\SwaggerClient\Model\InlineResponse2006 viewLocationDetail($location_id)

View Location Detail

Use this call to fetch detailed information about one (1) location.  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `400` | Bad Request                                 | | `401` | No Access Right                             | | `404` | Location not found                          |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 1.2; // float | ID of the Location in the form of an integer

try {
    $result = $apiInstance->viewLocationDetail($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->viewLocationDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **float**| ID of the Location in the form of an integer |

### Return type

[**\YellowWave\SwaggerClient\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

