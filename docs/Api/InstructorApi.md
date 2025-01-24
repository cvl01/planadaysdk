# YellowWave\SwaggerClient\InstructorApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addplanAnInstructorToASpecificDaypart**](InstructorApi.md#addplananinstructortoaspecificdaypart) | **POST** /instructor/{instructor_id}/daypart/ | Add/plan an instructor to a specific daypart
[**addplanAnInstructorToAllDaypartsInASpecificCourse**](InstructorApi.md#addplananinstructortoalldaypartsinaspecificcourse) | **POST** /instructor/{instructor_id}/course/ | Add/plan an instructor to all dayparts in a specific course
[**removeunplanAnInstructorFromASpecificDaypart**](InstructorApi.md#removeunplananinstructorfromaspecificdaypart) | **DELETE** /instructor/{instructor_id}/daypart/ | Remove/unplan an instructor from a specific daypart
[**removeunplanAnInstructorFromAllDaypartsInASpecificCourse**](InstructorApi.md#removeunplananinstructorfromalldaypartsinaspecificcourse) | **DELETE** /instructor/{instructor_id}/course/ | Remove/unplan an instructor from all dayparts in a specific course
[**viewListOfInstructors**](InstructorApi.md#viewlistofinstructors) | **GET** /instructor/list/offset&#x3D;{offset}&amp;limit&#x3D;{limit}&amp;label&#x3D;{label} | View list of instructors

# **addplanAnInstructorToASpecificDaypart**
> addplanAnInstructorToASpecificDaypart($instructor_id, $body)

Add/plan an instructor to a specific daypart

Use this call to add/plan an instructor to a specific daypart  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `401` | Parameters missing: id                      | | `401` | Missing or invalid json input               | | `401` | No email address known for this instructor  | | `404` | Instructor not found                        | | `404` | Daypart not found                           | | `409` | Instructor already planned for daypart      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\InstructorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instructor_id = 1.2; // float | ID of the instructor in the form of an integer
$body = new \YellowWave\SwaggerClient\Model\InstructorIdDaypartBody(); // \YellowWave\SwaggerClient\Model\InstructorIdDaypartBody | 

try {
    $apiInstance->addplanAnInstructorToASpecificDaypart($instructor_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InstructorApi->addplanAnInstructorToASpecificDaypart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructor_id** | **float**| ID of the instructor in the form of an integer |
 **body** | [**\YellowWave\SwaggerClient\Model\InstructorIdDaypartBody**](../Model/InstructorIdDaypartBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addplanAnInstructorToAllDaypartsInASpecificCourse**
> addplanAnInstructorToAllDaypartsInASpecificCourse($instructor_id, $body)

Add/plan an instructor to all dayparts in a specific course

Use this call to add/plan an instructor to all dayparts in a specific course  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `401` | Parameters missing: id                      | | `401` | Missing or invalid json input               | | `401` | No email address known for this instructor  | | `404` | Instructor not found                        | | `404` | Course not found                            |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\InstructorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instructor_id = 1.2; // float | ID of the instructor in the form of an integer
$body = new \YellowWave\SwaggerClient\Model\InstructorIdCourseBody(); // \YellowWave\SwaggerClient\Model\InstructorIdCourseBody | 

try {
    $apiInstance->addplanAnInstructorToAllDaypartsInASpecificCourse($instructor_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InstructorApi->addplanAnInstructorToAllDaypartsInASpecificCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructor_id** | **float**| ID of the instructor in the form of an integer |
 **body** | [**\YellowWave\SwaggerClient\Model\InstructorIdCourseBody**](../Model/InstructorIdCourseBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeunplanAnInstructorFromASpecificDaypart**
> removeunplanAnInstructorFromASpecificDaypart($instructor_id, $body)

Remove/unplan an instructor from a specific daypart

Use this call to remove/unplan an instructor from a specific daypart  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `401` | Parameters missing: id                      | | `401` | Missing or invalid json input               | | `401` | No email address known for this instructor  | | `404` | Instructor not found                        | | `404` | Daypart not found                           | | `404` | Instructor not planned for daypart          |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\InstructorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instructor_id = 1.2; // float | ID of the instructor in the form of an integer
$body = new \YellowWave\SwaggerClient\Model\InstructorIdDaypartBody1(); // \YellowWave\SwaggerClient\Model\InstructorIdDaypartBody1 | 

try {
    $apiInstance->removeunplanAnInstructorFromASpecificDaypart($instructor_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InstructorApi->removeunplanAnInstructorFromASpecificDaypart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructor_id** | **float**| ID of the instructor in the form of an integer |
 **body** | [**\YellowWave\SwaggerClient\Model\InstructorIdDaypartBody1**](../Model/InstructorIdDaypartBody1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeunplanAnInstructorFromAllDaypartsInASpecificCourse**
> removeunplanAnInstructorFromAllDaypartsInASpecificCourse($instructor_id, $body)

Remove/unplan an instructor from all dayparts in a specific course

Use this call to remove/unplan an instructor from all dayparts in a specific course  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `401` | Parameters missing: id                      | | `401` | Missing or invalid json input               | | `401` | No email address known for this instructor  | | `404` | Instructor not found                        | | `404` | Course not found                            | | `404` | Instructor not planned for course           |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\InstructorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instructor_id = 1.2; // float | ID of the instructor in the form of an integer
$body = new \YellowWave\SwaggerClient\Model\InstructorIdCourseBody1(); // \YellowWave\SwaggerClient\Model\InstructorIdCourseBody1 | 

try {
    $apiInstance->removeunplanAnInstructorFromAllDaypartsInASpecificCourse($instructor_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InstructorApi->removeunplanAnInstructorFromAllDaypartsInASpecificCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instructor_id** | **float**| ID of the instructor in the form of an integer |
 **body** | [**\YellowWave\SwaggerClient\Model\InstructorIdCourseBody1**](../Model/InstructorIdCourseBody1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewListOfInstructors**
> \YellowWave\SwaggerClient\Model\InlineResponse2006 viewListOfInstructors($offset, $limit)

View list of instructors

Use this call to fetch all active instructors  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\InstructorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 1.2; // float | Start offset of instructors to show (i.e. 25)
$limit = 1.2; // float | Amount of instructors to show in one response (i.e. 25, limited to 100)

try {
    $result = $apiInstance->viewListOfInstructors($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstructorApi->viewListOfInstructors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **float**| Start offset of instructors to show (i.e. 25) |
 **limit** | **float**| Amount of instructors to show in one response (i.e. 25, limited to 100) |

### Return type

[**\YellowWave\SwaggerClient\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

