# YellowWave\SwaggerClient\DaypartApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**viewDaypartDetail**](DaypartApi.md#viewdaypartdetail) | **GET** /daypart/{daypart_id} | View Daypart Detail
[**viewListOfMaterialsOfADaypart**](DaypartApi.md#viewlistofmaterialsofadaypart) | **GET** /daypart/{daypart_id}/materials&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit}&amp;label&#x3D;{label} | View list of materials of a Daypart

# **viewDaypartDetail**
> viewDaypartDetail($daypart_id)

View Daypart Detail

Use this call to fetch detailed information about one (1) daypart.  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `400` | Bad Request                                 | | `401` | No Access Right                             | | `404` | Daypart not found                           |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\DaypartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$daypart_id = 1.2; // float | ID of the Daypart in the form of an integer

try {
    $apiInstance->viewDaypartDetail($daypart_id);
} catch (Exception $e) {
    echo 'Exception when calling DaypartApi->viewDaypartDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **daypart_id** | **float**| ID of the Daypart in the form of an integer |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewListOfMaterialsOfADaypart**
> \YellowWave\SwaggerClient\Model\InlineResponse2004 viewListOfMaterialsOfADaypart($daypart_id, $offset, $limit)

View list of materials of a Daypart

Use this call to fetch the materials of one (1) daypart  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `404` | Daypart not found                            |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\DaypartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$daypart_id = 1.2; // float | ID of the Daypart in the form of an integer
$offset = 1.2; // float | Start offset of materials to show (i.e. 25)
$limit = 1.2; // float | Amount of materials to show in one response (i.e. 25, limited to 100)

try {
    $result = $apiInstance->viewListOfMaterialsOfADaypart($daypart_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DaypartApi->viewListOfMaterialsOfADaypart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **daypart_id** | **float**| ID of the Daypart in the form of an integer |
 **offset** | **float**| Start offset of materials to show (i.e. 25) |
 **limit** | **float**| Amount of materials to show in one response (i.e. 25, limited to 100) |

### Return type

[**\YellowWave\SwaggerClient\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

