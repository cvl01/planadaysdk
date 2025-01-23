# YellowWave\CoursetemplateApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListOfCoursetemplates**](CoursetemplateApi.md#getlistofcoursetemplates) | **GET** /coursetemplate/list | Get list of Coursetemplates
[**viewCoursetemplateDetail**](CoursetemplateApi.md#viewcoursetemplatedetail) | **GET** /coursetemplate/{coursetemplate_id} | View Coursetemplate Detail

# **getListOfCoursetemplates**
> getListOfCoursetemplates($x_api_key)

Get list of Coursetemplates

Use this call to get a list of coursetemplates. Only coursetemplates with 1 or more dayparts are returned.  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `400` | Bad Request                                 | | `401` | No Access Right                             |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\PlanadaySDK\CoursetemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>

try {
    $apiInstance->getListOfCoursetemplates($x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling CoursetemplateApi->getListOfCoursetemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| e.g. &lt;apikey&gt; |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewCoursetemplateDetail**
> viewCoursetemplateDetail($coursetemplate_id, $x_api_key)

View Coursetemplate Detail

Use this call to fetch detailed information about one (1) coursetemplate.  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `400` | Bad Request                                 | | `401` | No Access Right                             | | `404` | Coursetemplate not found                    |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\PlanadaySDK\CoursetemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coursetemplate_id = 1.2; // float | ID of the Location in the form of an integer
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>

try {
    $apiInstance->viewCoursetemplateDetail($coursetemplate_id, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling CoursetemplateApi->viewCoursetemplateDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coursetemplate_id** | **float**| ID of the Location in the form of an integer |
 **x_api_key** | **string**| e.g. &lt;apikey&gt; |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

