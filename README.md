# SwaggerClient-php
This documentation describes the calls available in the public API of planaday.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/yellowwave/planaday-php-sdk.git"
    }
  ],
  "require": {
    "yellowwave/planaday-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>
$course_id = 1.2; // float | ID of the Course to create booking for in the form of an integer
$body = new \YellowWave\SwaggerClient\Model\BookingCourseIdBody(); // \YellowWave\SwaggerClient\Model\BookingCourseIdBody | 

try {
    $result = $apiInstance->createBooking($x_api_key, $course_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->createBooking: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>
$booking_id = "booking_id_example"; // string | ID of the booking received in the booking post call (i.e API5ce597c40e0fc6.85265205)
$body = new \YellowWave\SwaggerClient\Model\BookingBookingIdBody(); // \YellowWave\SwaggerClient\Model\BookingBookingIdBody | 

try {
    $result = $apiInstance->deleteMadeBooking($x_api_key, $booking_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->deleteMadeBooking: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKeyAuth
$config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YellowWave\SwaggerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new YellowWave\SwaggerClient\PlanadaySDK\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | e.g. <apikey>
$booking_id = "booking_id_example"; // string | ID of the booking received in the booking post call (i.e API5ce597c40e0fc6.85265205)
$body = new \YellowWave\SwaggerClient\Model\PayedBookingIdBody(); // \YellowWave\SwaggerClient\Model\PayedBookingIdBody | 

try {
    $result = $apiInstance->markBookingAsPayed($x_api_key, $booking_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->markBookingAsPayed: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://apitest.api.planaday.net/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookingApi* | [**createBooking**](docs/Api/BookingApi.md#createbooking) | **POST** /booking/{course_id} | Create booking
*BookingApi* | [**deleteMadeBooking**](docs/Api/BookingApi.md#deletemadebooking) | **DELETE** /booking/{booking_id} | Delete made booking
*BookingApi* | [**markBookingAsPayed**](docs/Api/BookingApi.md#markbookingaspayed) | **POST** /booking/payed/{booking_id} | Mark booking as payed
*CourseApi* | [**getAListOfCourses**](docs/Api/CourseApi.md#getalistofcourses) | **GET** /course/list?start&#x3D;{start}&amp;end&#x3D;{end}&amp;templateid&#x3D;{templateid}&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit}&amp;label&#x3D;{label} | Get a list of courses
*CourseApi* | [**viewCourseDetail**](docs/Api/CourseApi.md#viewcoursedetail) | **GET** /course/{course_id} | View Course Detail
*CourseApi* | [**viewListOfDaypartsOfCourse**](docs/Api/CourseApi.md#viewlistofdaypartsofcourse) | **GET** /course/{course_id}/dayparts&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit} | View list of dayparts of Course
*CourseApi* | [**viewListOfImagesOfCourse**](docs/Api/CourseApi.md#viewlistofimagesofcourse) | **GET** /course/{course_id}/images&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit} | View list of images of Course
*CourseApi* | [**viewListOfMaterialsOfCourse**](docs/Api/CourseApi.md#viewlistofmaterialsofcourse) | **GET** /course/{course_id}/materials&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit}&amp;label&#x3D;{label} | View list of materials of Course
*CoursetemplateApi* | [**getListOfCoursetemplates**](docs/Api/CoursetemplateApi.md#getlistofcoursetemplates) | **GET** /coursetemplate/list | Get list of Coursetemplates
*CoursetemplateApi* | [**viewCoursetemplateDetail**](docs/Api/CoursetemplateApi.md#viewcoursetemplatedetail) | **GET** /coursetemplate/{coursetemplate_id} | View Coursetemplate Detail
*DaypartApi* | [**viewDaypartDetail**](docs/Api/DaypartApi.md#viewdaypartdetail) | **GET** /daypart/{daypart_id} | View Daypart Detail
*DaypartApi* | [**viewListOfMaterialsOfADaypart**](docs/Api/DaypartApi.md#viewlistofmaterialsofadaypart) | **GET** /daypart/{daypart_id}/materials&amp;offset&#x3D;{offset}&amp;limit&#x3D;{limit}&amp;label&#x3D;{label} | View list of materials of a Daypart
*ExtrafieldsApi* | [**getAListOfExtrafields**](docs/Api/ExtrafieldsApi.md#getalistofextrafields) | **GET** /extrafields/list | Get a list of extrafields
*ImageApi* | [**getImageBlob**](docs/Api/ImageApi.md#getimageblob) | **GET** /image/{image_id} | Get image blob
*InstructorApi* | [**addplanAnInstructorToASpecificDaypart**](docs/Api/InstructorApi.md#addplananinstructortoaspecificdaypart) | **POST** /instructor/{instructor_id}/daypart/ | Add/plan an instructor to a specific daypart
*InstructorApi* | [**addplanAnInstructorToAllDaypartsInASpecificCourse**](docs/Api/InstructorApi.md#addplananinstructortoalldaypartsinaspecificcourse) | **POST** /instructor/{instructor_id}/course/ | Add/plan an instructor to all dayparts in a specific course
*InstructorApi* | [**removeunplanAnInstructorFromASpecificDaypart**](docs/Api/InstructorApi.md#removeunplananinstructorfromaspecificdaypart) | **DELETE** /instructor/{instructor_id}/daypart/ | Remove/unplan an instructor from a specific daypart
*InstructorApi* | [**removeunplanAnInstructorFromAllDaypartsInASpecificCourse**](docs/Api/InstructorApi.md#removeunplananinstructorfromalldaypartsinaspecificcourse) | **DELETE** /instructor/{instructor_id}/course/ | Remove/unplan an instructor from all dayparts in a specific course
*InstructorApi* | [**viewListOfInstructors**](docs/Api/InstructorApi.md#viewlistofinstructors) | **GET** /instructor/list/offset&#x3D;{offset}&amp;limit&#x3D;{limit}&amp;label&#x3D;{label} | View list of instructors
*LabelApi* | [**getAListOfLabels**](docs/Api/LabelApi.md#getalistoflabels) | **GET** /label/list | Get a list of labels
*LocationApi* | [**viewLocationDetail**](docs/Api/LocationApi.md#viewlocationdetail) | **GET** /location/{location_id} | View Location Detail
*PingApi* | [**ping**](docs/Api/PingApi.md#ping) | **GET** /ping | Ping

## Documentation For Models

 - [BookingBookingIdBody](docs/Model/BookingBookingIdBody.md)
 - [BookingCourseIdBody](docs/Model/BookingCourseIdBody.md)
 - [BookingcourseIdAttributes](docs/Model/BookingcourseIdAttributes.md)
 - [BookingcourseIdCompany](docs/Model/BookingcourseIdCompany.md)
 - [BookingcourseIdStudents](docs/Model/BookingcourseIdStudents.md)
 - [BookingpayedbookingIdPayment](docs/Model/BookingpayedbookingIdPayment.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2002Costs](docs/Model/InlineResponse2002Costs.md)
 - [InlineResponse2002Coursetemplate](docs/Model/InlineResponse2002Coursetemplate.md)
 - [InlineResponse2002Extrafields](docs/Model/InlineResponse2002Extrafields.md)
 - [InlineResponse2002RepeatingCourses](docs/Model/InlineResponse2002RepeatingCourses.md)
 - [InlineResponse2002Users](docs/Model/InlineResponse2002Users.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2003Data](docs/Model/InlineResponse2003Data.md)
 - [InlineResponse2003Links](docs/Model/InlineResponse2003Links.md)
 - [InlineResponse2003Meta](docs/Model/InlineResponse2003Meta.md)
 - [InlineResponse2003MetaPage](docs/Model/InlineResponse2003MetaPage.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Data](docs/Model/InlineResponse2004Data.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Data](docs/Model/InlineResponse2005Data.md)
 - [InlineResponse2005Links](docs/Model/InlineResponse2005Links.md)
 - [InlineResponse2005Meta](docs/Model/InlineResponse2005Meta.md)
 - [InlineResponse2005MetaPage](docs/Model/InlineResponse2005MetaPage.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2006Address](docs/Model/InlineResponse2006Address.md)
 - [InlineResponse2006ContactInfo](docs/Model/InlineResponse2006ContactInfo.md)
 - [InlineResponse2006Costs](docs/Model/InlineResponse2006Costs.md)
 - [InlineResponse200Details](docs/Model/InlineResponse200Details.md)
 - [InlineResponse200DetailsCompany](docs/Model/InlineResponse200DetailsCompany.md)
 - [InlineResponse200DetailsStudents](docs/Model/InlineResponse200DetailsStudents.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse404](docs/Model/InlineResponse404.md)
 - [InstructorIdCourseBody](docs/Model/InstructorIdCourseBody.md)
 - [InstructorIdCourseBody1](docs/Model/InstructorIdCourseBody1.md)
 - [InstructorIdDaypartBody](docs/Model/InstructorIdDaypartBody.md)
 - [InstructorIdDaypartBody1](docs/Model/InstructorIdDaypartBody1.md)
 - [PayedBookingIdBody](docs/Model/PayedBookingIdBody.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Api-Key
- **Location**: HTTP header


## Author



