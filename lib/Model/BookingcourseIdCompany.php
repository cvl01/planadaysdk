<?php
/**
 * BookingcourseIdCompany
 *
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

namespace YellowWave\Model;

use \ArrayAccess;
use \YellowWave\ObjectSerializer;

/**
 * BookingcourseIdCompany Class Doc Comment
 *
 * @category Class
 * @package  YellowWave
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingcourseIdCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bookingcourse_id_company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'email' => 'string',
        'address' => 'string',
        'house_number' => 'string',
        'house_number_extension' => '',
        'postal_code' => 'string',
        'city' => 'string',
        'phonenumber' => '',
        'invoice_email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'email' => null,
        'address' => null,
        'house_number' => null,
        'house_number_extension' => null,
        'postal_code' => null,
        'city' => null,
        'phonenumber' => null,
        'invoice_email' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'email' => 'email',
        'address' => 'address',
        'house_number' => 'house_number',
        'house_number_extension' => 'house_number_extension',
        'postal_code' => 'postal_code',
        'city' => 'city',
        'phonenumber' => 'phonenumber',
        'invoice_email' => 'invoice_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'email' => 'setEmail',
        'address' => 'setAddress',
        'house_number' => 'setHouseNumber',
        'house_number_extension' => 'setHouseNumberExtension',
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'phonenumber' => 'setPhonenumber',
        'invoice_email' => 'setInvoiceEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'email' => 'getEmail',
        'address' => 'getAddress',
        'house_number' => 'getHouseNumber',
        'house_number_extension' => 'getHouseNumberExtension',
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'phonenumber' => 'getPhonenumber',
        'invoice_email' => 'getInvoiceEmail'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['house_number_extension'] = isset($data['house_number_extension']) ? $data['house_number_extension'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['phonenumber'] = isset($data['phonenumber']) ? $data['phonenumber'] : null;
        $this->container['invoice_email'] = isset($data['invoice_email']) ? $data['invoice_email'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string $house_number house_number
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_extension
     *
     * @return 
     */
    public function getHouseNumberExtension()
    {
        return $this->container['house_number_extension'];
    }

    /**
     * Sets house_number_extension
     *
     * @param  $house_number_extension house_number_extension
     *
     * @return $this
     */
    public function setHouseNumberExtension($house_number_extension)
    {
        $this->container['house_number_extension'] = $house_number_extension;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets phonenumber
     *
     * @return 
     */
    public function getPhonenumber()
    {
        return $this->container['phonenumber'];
    }

    /**
     * Sets phonenumber
     *
     * @param  $phonenumber phonenumber
     *
     * @return $this
     */
    public function setPhonenumber($phonenumber)
    {
        $this->container['phonenumber'] = $phonenumber;

        return $this;
    }

    /**
     * Gets invoice_email
     *
     * @return string
     */
    public function getInvoiceEmail()
    {
        return $this->container['invoice_email'];
    }

    /**
     * Sets invoice_email
     *
     * @param string $invoice_email invoice_email
     *
     * @return $this
     */
    public function setInvoiceEmail($invoice_email)
    {
        $this->container['invoice_email'] = $invoice_email;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
