# YellowWave\BookingApi

All URIs are relative to *https://apitest.api.planaday.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBooking**](BookingApi.md#createbooking) | **POST** /booking/{course_id} | Create booking
[**deleteMadeBooking**](BookingApi.md#deletemadebooking) | **DELETE** /booking/{booking_id} | Delete made booking
[**markBookingAsPayed**](BookingApi.md#markbookingaspayed) | **POST** /booking/payed/{booking_id} | Mark booking as payed

# **createBooking**
> \YellowWave\Model\InlineResponse200 createBooking($x_api_key, $course_id, $body)

Create booking

Use this call to create booking for optional company and one (1) or more students. These booking are visible in the application in the section: cursus->openstaande aanvragen (/cursus/aanvragen).  **Student block**  The `students` block is required and can contain one or more student objects.  The complete list of fields for each student object is listed in the request example. The following fields are required:  - `last_name`  - `email` (can be null)  - `phonenumber` (can be null)  Possible `gender` values are:  - 'm' (male)  - 'f' (female)  - 'nvt' (inapplicable) or 'nr' (not relevant)  - 'null' value or 'u' (unkown)  - no gender field = 'u'  The `language` field is optional, but these are the possible language values:  - 'NL' (dutch)  - 'ENG' (english)  - 'FR' (French)  - 'DU' (German)  - 'PL' (Polish)  - No language field = 'NL'  When an `id` is specified we will link the booking to this user known in Planaday. This field is optional.  The optional `costcentercode` field must contain a known code you defined in Planaday (beheer -> kostenplaats).  _The optional `fields` block can contain 'extra/custom' fields as defined in the Planaday application. Please note that these combination are always in the format: \"fieldname\" : \"value\" (including the double quotes) (Deprecated, use extrafields from now, 2023-01-11)_  The optional `extrafields` block can contain 'extra fields' as defined in the Planaday application. Please note that these combination are always in the format: \"fieldid\" : \"value(s)\" (including the double quotes) (Also the the call '/extrafields/get' for a list of available extrafields)  ```json \"extrafields\": { \"50\": \"invoice@example.com\", \"51\": \"Financial person\", \"52\": \"950123\", } ```  When multiple values are possible seperate them with a | (pipe character), like  ```json \"extrafields\": { \"53\": \"bhv|brand|ehbo\" } ```  You can create contacts for a company by using the `is_contact` and `is_student` fields. When you make 'is_contact' _true_ and 'is_student' _false_, only a contact will be added for the company.  You can add an optional internal reference to a student, wich will be copied from the booking to the real student. This field is called `internal_reference`.  **Company block**  The whole `company` block is optional. When it's added the following fields are required:  - name  - address  - house_number  - postal_code  - city  Within the `company` there are 2 other optionals blocks, withing these blocks all fields are optional!  Invoice information block  ```json \"invoice\": {   \"email\": \"invoice@example.com\",   \"addressee\": \"Financial person\",   \"address\": \"Paalbergweg\",   \"house_number\": \"134\",   \"house_number_extension\": null,   \"postal_code\": \"1111AA\",   \"city\": \"Amsterdam\",   \"country\": \"Nederland\", } ```  and mailing address information block  ```json \"mailing\": {   \"address\": \"Paalbergweg\",   \"house_number\": \"134\",   \"house_number_extension\": null,   \"postal_code\": \"1111AA\",   \"city\": \"Amsterdam\",   \"country\": \"Nederland\", } ```  When no `company` block is added, each student will be added as a private (particulier) student.  **Dayparts block**  The `dayparts` block is an optional list of dayparts ids that will be booked for the students. If the 'dayparts' block is an empty list then the students will be booked for all dayparts of the selected course.  **Payment block**  If the `is_payed` field is added and has the _true_ value, the `payment` block is required!  This must contain the following fields  - `party`  - `transaction_id`  **Attributes block**  _Notice: This block can only be used when a Planaday employee gives the rights to use this!_  When dayparts or course has attributes that are required, the `attributes` block in the post is also required! The booking API gives as much information as possible when there are errors in the post.  When there are attributes required in a course/daypart it is **_NOT_** possible to send multiple students in the booking.  Attributes block always contains the following:  ```json \"attributes\": [     {         \"code\": \"{E27A0D46-AAF1-BDB8-A667-D3C0510F0A5EF\",         \"values\": [             \"foo\"         ]     } ] ```  and when multiple items (in this case items with values) are allowed the value can contain:  ```json \"attributes\": [     {         \"code\": \"{E27A0D46-AAF1-BDB8-A667-D3C0510F0A5E}\",         \"values\": [           \"Foo\",           \"Bar\"         ]     } ] ```  **General items**  You can add an additional `creating_source` string which you can use to determine the source of the API request. (i.e. the url of the website which uses the API) This string will be visible in the Planaday application.  It is possible to label a booking with the optional `label` field. This field may contain a-z, A-Z, 0-9 and - (dash). No spaces or other character are allowed  **Error codes**  | Code  | Message                                                                                                     | |-------|-------------------------------------------------------------------------------------------------------------| | `400` | Bad Request, 400: parameters missing: id                                                                    | | `400` | Bad Request, 401: unable to parse posted json                                                               | | `400` | Bad Request, 402: missing students block                                                                    | | `400` | Bad Request, 403: students:gender missing, empty or invalid value (m/f/nvt/u/nr allowed)                    | | `400` | Bad Request, 404: students:first_name missing or empty                                                      | | `400` | Bad Request, 405: students:last_name missing or empty                                                       | | `400` | Bad Request, 406: students:email contains invalid value ()                                                  | | `400` | Bad Request, 407: course_id missing or not the same as url parameter                                        | | `400` | Bad Request, 408: company:name missing or empty                                                             | | `400` | Bad Request, 409: company:address missing or empty                                                          | | `400` | Bad Request, 410: company:house_number missing or empty                                                     | | `400` | Bad Request, 411: company:postal_code missing or empty                                                      | | `400` | Bad Request, 412: company:city missing or empty                                                             | | `400` | Bad Request, 413: course selected without dayparts                                                          | | `400` | Bad Request, 414: unknown course selected                                                                   | | `400` | Bad Request, 415: course selected without dayparts                                                          | | `400` | Bad Request, 416: dayparts includes id not present in given course                                          | | `400` | Bad Request, 417: material includes id not present in given course                                          | | `400` | Bad Request, 418: payment block is missing                                                                  | | `400` | Bad Request, 419: attribute:attributes block is missing                                                     | | `400` | Bad Request, 420: attribute:only 1 student allowed when attributes block is set                             | | `400` | Bad Request, 421: attribute:code is missing                                                                 | | `400` | Bad Request, 422: attribute:value is missing                                                                | | `400` | Bad Request, 423: attribute:unknown attribute code given for this course/daypart: {}. Allowed codes: [list] | | `400` | Bad Request, 424: attribute:not all required attributes are posted. Missing attributes: [list]              | | `400` | Bad Request, 425: attribute:unkown value given for attribute {}: [value], Allowed values: [list]            | | `400` | Bad Request, 426: students:unknown language given (), allowed: [list]                                       | | `400` | Bad Request, 427: attribute:Attributes given, but none required/configured                                  | | `400` | Bad Request, 428: attribute:Multiple item given for attribute {}. Only 1 allowed                            | | `400` | Bad Request, 429: attribute:Value required, but non given                                                   | | `400` | Bad Request, 430: students:Bad date of birth given                                                          | | `400` | Bad Request, 431: students:date of birth is required for STAP courses                                       | | `400` | Bad Request, 432: students:address is required for STAP courses                                             | | `400` | Bad Request, 433: students:house_number is required for STAP courses                                        | | `400` | Bad Request, 434: students:postal_code is required for STAP courses                                         | | `400` | Bad Request, 435: students:city is required for STAP courses                                                | | `400` | Bad Request, 436: Non STAP booking is not allowed on STAP only course                                               | | `401` | No Access Right                                                                                             | | `404` | Course not found                                                                                            |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\PlanadaySDK\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>
$course_id = 1.2; // float | ID of the Course to create booking for in the form of an integer
$body = new \YellowWave\Model\BookingCourseIdBody(); // \YellowWave\Model\BookingCourseIdBody | 

try {
    $result = $apiInstance->createBooking($x_api_key, $course_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->createBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| e.g. &lt;apikey&gt; |
 **course_id** | **float**| ID of the Course to create booking for in the form of an integer |
 **body** | [**\YellowWave\Model\BookingCourseIdBody**](../Model/BookingCourseIdBody.md)|  | [optional]

### Return type

[**\YellowWave\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMadeBooking**
> \YellowWave\Model\InlineResponse2001 deleteMadeBooking($x_api_key, $booking_id, $body)

Delete made booking

Use this call to delete an earlier made booking.  First we try with the {booking_id}. This works when the the booking isn't converted to a planned student yet! When the booking is already converted we will make a cancel request in the backoffice.  When the booking_id isn't found, we do a second attempt using the 3 fields.  When no booking is found at all we throw an error.  When available the 'reason' field will be added in the notes.  **Error codes**  | Code  | Message                                                                                 | |-------|-----------------------------------------------------------------------------------------| | `400` | Bad Request, 400: Parameters missing: bookingid                                         | | `400` | Bad Request, 401: Unkown bookingid and no or invalid cancel information given                                         | | `400` | Bad Request, 402: Missing or empty internal_reference                                         | | `400` | Bad Request, 403: Missing or empty deleting_source                                         | | `400` | Bad Request, 404: Missing or empty reason                                         | | `404` | Booking not found                                           |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\PlanadaySDK\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>
$booking_id = "booking_id_example"; // string | ID of the booking received in the booking post call (i.e API5ce597c40e0fc6.85265205)
$body = new \YellowWave\Model\BookingBookingIdBody(); // \YellowWave\Model\BookingBookingIdBody | 

try {
    $result = $apiInstance->deleteMadeBooking($x_api_key, $booking_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->deleteMadeBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| e.g. &lt;apikey&gt; |
 **booking_id** | **string**| ID of the booking received in the booking post call (i.e API5ce597c40e0fc6.85265205) |
 **body** | [**\YellowWave\Model\BookingBookingIdBody**](../Model/BookingBookingIdBody.md)|  | [optional]

### Return type

[**\YellowWave\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markBookingAsPayed**
> \YellowWave\Model\InlineResponse2001 markBookingAsPayed($x_api_key, $booking_id, $body)

Mark booking as payed

Use this call to mark a booking as payed. This can be handy after handeling a payment callback.  If the 'is_payed' field is 'true', the 'payment' block is required!  **Error codes**  | Code  | Message                                                                                 | |-------|-----------------------------------------------------------------------------------------| | `400` | Bad Request, 400: Parameters missing: booking_id                                                | | `400` | Bad Request, 401: Unable to parse posted json                                                | | `400` | Bad Request, 402: Missing payment block                                                | | `400` | Bad Request, 403: Missing party                                                | | `400` | Bad Request, 404: Missing transaction_id                                                | | `404` | Booking not found                                           |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = YellowWave\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\PlanadaySDK\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>
$booking_id = "booking_id_example"; // string | ID of the booking received in the booking post call (i.e API5ce597c40e0fc6.85265205)
$body = new \YellowWave\Model\PayedBookingIdBody(); // \YellowWave\Model\PayedBookingIdBody | 

try {
    $result = $apiInstance->markBookingAsPayed($x_api_key, $booking_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->markBookingAsPayed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**| e.g. &lt;apikey&gt; |
 **booking_id** | **string**| ID of the booking received in the booking post call (i.e API5ce597c40e0fc6.85265205) |
 **body** | [**\YellowWave\Model\PayedBookingIdBody**](../Model/PayedBookingIdBody.md)|  | [optional]

### Return type

[**\YellowWave\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

