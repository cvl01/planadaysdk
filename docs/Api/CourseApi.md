# YellowWave\SwaggerClient\CourseApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAListOfCourses**](CourseApi.md#getalistofcourses) | **GET** /course/list | Get a list of courses
[**viewCourseDetail**](CourseApi.md#viewcoursedetail) | **GET** /course/{course_id} | View Course Detail
[**viewListOfDaypartsOfCourse**](CourseApi.md#viewlistofdaypartsofcourse) | **GET** /course/{course_id}/dayparts&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit} | View list of dayparts of Course
[**viewListOfImagesOfCourse**](CourseApi.md#viewlistofimagesofcourse) | **GET** /course/{course_id}/images&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit} | View list of images of Course
[**viewListOfMaterialsOfCourse**](CourseApi.md#viewlistofmaterialsofcourse) | **GET** /course/{course_id}/materials&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit}&amp;label&#x3D;{label} | View list of materials of Course

# **getAListOfCourses**
> \YellowWave\SwaggerClient\Model\InlineResponse2002 getAListOfCourses($start, $end, $templateid, $offset, $limit, $label)

Get a list of courses

Use this call to get a list of courses. You can use the optional parameter _templateid_ to limit your search to courses belonging to one course. Or add the optional parameter _label_ to filter on labels connected to the course.  **Label**  The label parameter can contain 1 label to select courses that matches 1 label  ``` &label=BHV ```  or a list of labels seperated by , (comma) to select courses that matches **ALL** labels:  ``` &label=BHV,LOGISTIEK ```  **Dayparts**  Please note that the daypart block only contains the first daypart of the course! If you want to get all dayparts of the course, you need to use the [Get a course](#get-a-course) call.  **Error codes**  | Code  | Message          | |-------|------------------| | `400` | Bad Request      | | `401` | No Access Right  | | `404` | Course not found |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = "start_example"; // string | Start date of planned courses to look for (YYYYMMDD)
$end = "end_example"; // string | End date of planned courses to look for (YYYYMMDD)
$templateid = 1.2; // float | ID of the Coursetemplate to find courses for
$offset = 1.2; // float | Start offset of courses to show (i.e. 25)
$limit = 1.2; // float | Amount of courses to show in one response (i.e. 25, limited to 100)
$label = "label_example"; // string | labels which the course MUST have (see also label API calls)

try {
    $result = $apiInstance->getAListOfCourses($start, $end, $templateid, $offset, $limit, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getAListOfCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date of planned courses to look for (YYYYMMDD) |
 **end** | **string**| End date of planned courses to look for (YYYYMMDD) |
 **templateid** | **float**| ID of the Coursetemplate to find courses for | [optional]
 **offset** | **float**| Start offset of courses to show (i.e. 25) | [optional]
 **limit** | **float**| Amount of courses to show in one response (i.e. 25, limited to 100) | [optional]
 **label** | **string**| labels which the course MUST have (see also label API calls) | [optional]

### Return type

[**\YellowWave\SwaggerClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewCourseDetail**
> viewCourseDetail($course_id)

View Course Detail

Use this call to fetch detailed information about one (1) course  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `404` | Course not found                            |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = 1.2; // float | ID of the Course in the form of an integer

try {
    $apiInstance->viewCourseDetail($course_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->viewCourseDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **float**| ID of the Course in the form of an integer |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewListOfDaypartsOfCourse**
> viewListOfDaypartsOfCourse($course_id, $offset, $limit)

View list of dayparts of Course

Use this call to fetch detailed information the dayparts of one (1) course  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `404` | Course not found                            |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = 1.2; // float | ID of the Course in the form of an integer
$offset = 1.2; // float | Start offset of dayparts to show (i.e. 25)
$limit = 1.2; // float | Amount of dayparts to show in one response (i.e. 25, limited to 100)

try {
    $apiInstance->viewListOfDaypartsOfCourse($course_id, $offset, $limit);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->viewListOfDaypartsOfCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **float**| ID of the Course in the form of an integer |
 **offset** | **float**| Start offset of dayparts to show (i.e. 25) |
 **limit** | **float**| Amount of dayparts to show in one response (i.e. 25, limited to 100) |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewListOfImagesOfCourse**
> viewListOfImagesOfCourse($course_id, $offset, $limit)

View list of images of Course

Use this call to fetch the images of one (1) course  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `404` | Course not found                            |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = 1.2; // float | ID of the Course in the form of an integer
$offset = 1.2; // float | Start offset of materials to show (i.e. 25)
$limit = 1.2; // float | Amount of materials to show in one response (i.e. 25, limited to 100)

try {
    $apiInstance->viewListOfImagesOfCourse($course_id, $offset, $limit);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->viewListOfImagesOfCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **float**| ID of the Course in the form of an integer |
 **offset** | **float**| Start offset of materials to show (i.e. 25) |
 **limit** | **float**| Amount of materials to show in one response (i.e. 25, limited to 100) |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewListOfMaterialsOfCourse**
> \YellowWave\SwaggerClient\Model\InlineResponse2003 viewListOfMaterialsOfCourse($course_id, $offset, $limit)

View list of materials of Course

Use this call to fetch the materials of one (1) course  **Error codes**  | Code  | Message                                     | |-------|---------------------------------------------| | `401` | No Access Right                             | | `404` | Course not found                            |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = 1.2; // float | ID of the Course in the form of an integer
$offset = 1.2; // float | Start offset of materials to show (i.e. 25)
$limit = 1.2; // float | Amount of materials to show in one response (i.e. 25, limited to 100)

try {
    $result = $apiInstance->viewListOfMaterialsOfCourse($course_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->viewListOfMaterialsOfCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **float**| ID of the Course in the form of an integer |
 **offset** | **float**| Start offset of materials to show (i.e. 25) |
 **limit** | **float**| Amount of materials to show in one response (i.e. 25, limited to 100) |

### Return type

[**\YellowWave\SwaggerClient\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

