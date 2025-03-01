<?php
/**
 * InlineResponse2002Data
 *
 * PHP version 5
 *
 * @category Class
 * @package  YellowWave\SwaggerClient
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

namespace YellowWave\SwaggerClient\Model;

use \ArrayAccess;
use \YellowWave\SwaggerClient\ObjectSerializer;

/**
 * InlineResponse2002Data Class Doc Comment
 *
 * @category Class
 * @package  YellowWave\SwaggerClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'code' => 'string',
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'status' => 'string',
        'daypart_amount' => 'int',
        'dayparts' => '\YellowWave\SwaggerClient\Model\InlineResponse2002Dayparts[]',
        'users' => '\YellowWave\SwaggerClient\Model\InlineResponse2002Users',
        'costs' => '\YellowWave\SwaggerClient\Model\InlineResponse2002Costs',
        'coursetemplate' => '\YellowWave\SwaggerClient\Model\InlineResponse2002Coursetemplate',
        'start_guaranteed' => 'int',
        'moneyback_guaranteed' => 'int',
        'has_elearning' => 'int',
        'has_code95' => 'int',
        'has_soob' => 'int',
        'has_stap' => 'int',
        'stap_only' => 'int',
        'href' => 'string',
        'labels' => 'string[]',
        'attributes' => 'map[string,\YellowWave\SwaggerClient\Model\InlineResponse2002Attributes]',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'code' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'status' => null,
        'daypart_amount' => null,
        'dayparts' => null,
        'users' => null,
        'costs' => null,
        'coursetemplate' => null,
        'start_guaranteed' => null,
        'moneyback_guaranteed' => null,
        'has_elearning' => null,
        'has_code95' => null,
        'has_soob' => null,
        'has_stap' => null,
        'stap_only' => null,
        'href' => 'uri',
        'labels' => null,
        'attributes' => null,
        'language' => null
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
        'id' => 'id',
        'code' => 'code',
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'status' => 'status',
        'daypart_amount' => 'daypart_amount',
        'dayparts' => 'dayparts',
        'users' => 'users',
        'costs' => 'costs',
        'coursetemplate' => 'coursetemplate',
        'start_guaranteed' => 'start_guaranteed',
        'moneyback_guaranteed' => 'moneyback_guaranteed',
        'has_elearning' => 'has_elearning',
        'has_code95' => 'has_code95',
        'has_soob' => 'has_soob',
        'has_stap' => 'has_stap',
        'stap_only' => 'stap_only',
        'href' => 'href',
        'labels' => 'labels',
        'attributes' => 'attributes',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'status' => 'setStatus',
        'daypart_amount' => 'setDaypartAmount',
        'dayparts' => 'setDayparts',
        'users' => 'setUsers',
        'costs' => 'setCosts',
        'coursetemplate' => 'setCoursetemplate',
        'start_guaranteed' => 'setStartGuaranteed',
        'moneyback_guaranteed' => 'setMoneybackGuaranteed',
        'has_elearning' => 'setHasElearning',
        'has_code95' => 'setHasCode95',
        'has_soob' => 'setHasSoob',
        'has_stap' => 'setHasStap',
        'stap_only' => 'setStapOnly',
        'href' => 'setHref',
        'labels' => 'setLabels',
        'attributes' => 'setAttributes',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'status' => 'getStatus',
        'daypart_amount' => 'getDaypartAmount',
        'dayparts' => 'getDayparts',
        'users' => 'getUsers',
        'costs' => 'getCosts',
        'coursetemplate' => 'getCoursetemplate',
        'start_guaranteed' => 'getStartGuaranteed',
        'moneyback_guaranteed' => 'getMoneybackGuaranteed',
        'has_elearning' => 'getHasElearning',
        'has_code95' => 'getHasCode95',
        'has_soob' => 'getHasSoob',
        'has_stap' => 'getHasStap',
        'stap_only' => 'getStapOnly',
        'href' => 'getHref',
        'labels' => 'getLabels',
        'attributes' => 'getAttributes',
        'language' => 'getLanguage'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['daypart_amount'] = isset($data['daypart_amount']) ? $data['daypart_amount'] : null;
        $this->container['dayparts'] = isset($data['dayparts']) ? $data['dayparts'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['costs'] = isset($data['costs']) ? $data['costs'] : null;
        $this->container['coursetemplate'] = isset($data['coursetemplate']) ? $data['coursetemplate'] : null;
        $this->container['start_guaranteed'] = isset($data['start_guaranteed']) ? $data['start_guaranteed'] : null;
        $this->container['moneyback_guaranteed'] = isset($data['moneyback_guaranteed']) ? $data['moneyback_guaranteed'] : null;
        $this->container['has_elearning'] = isset($data['has_elearning']) ? $data['has_elearning'] : null;
        $this->container['has_code95'] = isset($data['has_code95']) ? $data['has_code95'] : null;
        $this->container['has_soob'] = isset($data['has_soob']) ? $data['has_soob'] : null;
        $this->container['has_stap'] = isset($data['has_stap']) ? $data['has_stap'] : null;
        $this->container['stap_only'] = isset($data['stap_only']) ? $data['stap_only'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['daypart_amount'] === null) {
            $invalidProperties[] = "'daypart_amount' can't be null";
        }
        if ($this->container['dayparts'] === null) {
            $invalidProperties[] = "'dayparts' can't be null";
        }
        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if ($this->container['costs'] === null) {
            $invalidProperties[] = "'costs' can't be null";
        }
        if ($this->container['coursetemplate'] === null) {
            $invalidProperties[] = "'coursetemplate' can't be null";
        }
        if ($this->container['start_guaranteed'] === null) {
            $invalidProperties[] = "'start_guaranteed' can't be null";
        }
        if ($this->container['moneyback_guaranteed'] === null) {
            $invalidProperties[] = "'moneyback_guaranteed' can't be null";
        }
        if ($this->container['has_elearning'] === null) {
            $invalidProperties[] = "'has_elearning' can't be null";
        }
        if ($this->container['has_code95'] === null) {
            $invalidProperties[] = "'has_code95' can't be null";
        }
        if ($this->container['has_soob'] === null) {
            $invalidProperties[] = "'has_soob' can't be null";
        }
        if ($this->container['has_stap'] === null) {
            $invalidProperties[] = "'has_stap' can't be null";
        }
        if ($this->container['stap_only'] === null) {
            $invalidProperties[] = "'stap_only' can't be null";
        }
        if ($this->container['href'] === null) {
            $invalidProperties[] = "'href' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets daypart_amount
     *
     * @return int
     */
    public function getDaypartAmount()
    {
        return $this->container['daypart_amount'];
    }

    /**
     * Sets daypart_amount
     *
     * @param int $daypart_amount daypart_amount
     *
     * @return $this
     */
    public function setDaypartAmount($daypart_amount)
    {
        $this->container['daypart_amount'] = $daypart_amount;

        return $this;
    }

    /**
     * Gets dayparts
     *
     * @return \YellowWave\SwaggerClient\Model\InlineResponse2002Dayparts[]
     */
    public function getDayparts()
    {
        return $this->container['dayparts'];
    }

    /**
     * Sets dayparts
     *
     * @param \YellowWave\SwaggerClient\Model\InlineResponse2002Dayparts[] $dayparts dayparts
     *
     * @return $this
     */
    public function setDayparts($dayparts)
    {
        $this->container['dayparts'] = $dayparts;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \YellowWave\SwaggerClient\Model\InlineResponse2002Users
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \YellowWave\SwaggerClient\Model\InlineResponse2002Users $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets costs
     *
     * @return \YellowWave\SwaggerClient\Model\InlineResponse2002Costs
     */
    public function getCosts()
    {
        return $this->container['costs'];
    }

    /**
     * Sets costs
     *
     * @param \YellowWave\SwaggerClient\Model\InlineResponse2002Costs $costs costs
     *
     * @return $this
     */
    public function setCosts($costs)
    {
        $this->container['costs'] = $costs;

        return $this;
    }

    /**
     * Gets coursetemplate
     *
     * @return \YellowWave\SwaggerClient\Model\InlineResponse2002Coursetemplate
     */
    public function getCoursetemplate()
    {
        return $this->container['coursetemplate'];
    }

    /**
     * Sets coursetemplate
     *
     * @param \YellowWave\SwaggerClient\Model\InlineResponse2002Coursetemplate $coursetemplate coursetemplate
     *
     * @return $this
     */
    public function setCoursetemplate($coursetemplate)
    {
        $this->container['coursetemplate'] = $coursetemplate;

        return $this;
    }

    /**
     * Gets start_guaranteed
     *
     * @return int
     */
    public function getStartGuaranteed()
    {
        return $this->container['start_guaranteed'];
    }

    /**
     * Sets start_guaranteed
     *
     * @param int $start_guaranteed start_guaranteed
     *
     * @return $this
     */
    public function setStartGuaranteed($start_guaranteed)
    {
        $this->container['start_guaranteed'] = $start_guaranteed;

        return $this;
    }

    /**
     * Gets moneyback_guaranteed
     *
     * @return int
     */
    public function getMoneybackGuaranteed()
    {
        return $this->container['moneyback_guaranteed'];
    }

    /**
     * Sets moneyback_guaranteed
     *
     * @param int $moneyback_guaranteed moneyback_guaranteed
     *
     * @return $this
     */
    public function setMoneybackGuaranteed($moneyback_guaranteed)
    {
        $this->container['moneyback_guaranteed'] = $moneyback_guaranteed;

        return $this;
    }

    /**
     * Gets has_elearning
     *
     * @return int
     */
    public function getHasElearning()
    {
        return $this->container['has_elearning'];
    }

    /**
     * Sets has_elearning
     *
     * @param int $has_elearning has_elearning
     *
     * @return $this
     */
    public function setHasElearning($has_elearning)
    {
        $this->container['has_elearning'] = $has_elearning;

        return $this;
    }

    /**
     * Gets has_code95
     *
     * @return int
     */
    public function getHasCode95()
    {
        return $this->container['has_code95'];
    }

    /**
     * Sets has_code95
     *
     * @param int $has_code95 has_code95
     *
     * @return $this
     */
    public function setHasCode95($has_code95)
    {
        $this->container['has_code95'] = $has_code95;

        return $this;
    }

    /**
     * Gets has_soob
     *
     * @return int
     */
    public function getHasSoob()
    {
        return $this->container['has_soob'];
    }

    /**
     * Sets has_soob
     *
     * @param int $has_soob has_soob
     *
     * @return $this
     */
    public function setHasSoob($has_soob)
    {
        $this->container['has_soob'] = $has_soob;

        return $this;
    }

    /**
     * Gets has_stap
     *
     * @return int
     */
    public function getHasStap()
    {
        return $this->container['has_stap'];
    }

    /**
     * Sets has_stap
     *
     * @param int $has_stap has_stap
     *
     * @return $this
     */
    public function setHasStap($has_stap)
    {
        $this->container['has_stap'] = $has_stap;

        return $this;
    }

    /**
     * Gets stap_only
     *
     * @return int
     */
    public function getStapOnly()
    {
        return $this->container['stap_only'];
    }

    /**
     * Sets stap_only
     *
     * @param int $stap_only stap_only
     *
     * @return $this
     */
    public function setStapOnly($stap_only)
    {
        $this->container['stap_only'] = $stap_only;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return map[string,\YellowWave\SwaggerClient\Model\InlineResponse2002Attributes]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param map[string,\YellowWave\SwaggerClient\Model\InlineResponse2002Attributes] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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
