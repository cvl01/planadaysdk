# YellowWave\SwaggerClient\ImageApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImageBlob**](ImageApi.md#getimageblob) | **GET** /image/{image_id} | Get image blob

# **getImageBlob**
> getImageBlob($image_id, $x_api_key)

Get image blob

Use this call to fetch the image blob.  **Error codes**  | Code  | Message         | |-------|-----------------| | `400` | Bad Request     | | `401` | No Access Right | | `404` | Image not found     |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = "image_id_example"; // string | ID of the Iamge in the form of an string
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>

try {
    $apiInstance->getImageBlob($image_id, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getImageBlob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_id** | **string**| ID of the Iamge in the form of an string |
 **x_api_key** | **string**| e.g. &lt;apikey&gt; |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/[imagetype]

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

