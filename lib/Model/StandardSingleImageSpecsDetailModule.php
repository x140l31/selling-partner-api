<?php
/**
 * StandardSingleImageSpecsDetailModule
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model;

use \ArrayAccess;
use \Evers\SellingPartnerApi\ObjectSerializer;

/**
 * StandardSingleImageSpecsDetailModule Class Doc Comment
 *
 * @category Class
 * @description A standard image with paragraphs and a bulleted list, and extra space for technical details.
 * @package  Evers\SellingPartnerApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardSingleImageSpecsDetailModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardSingleImageSpecsDetailModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'headline' => '\Evers\SellingPartnerApi\Model\TextComponent',
        'image' => '\Evers\SellingPartnerApi\Model\ImageComponent',
        'description_headline' => '\Evers\SellingPartnerApi\Model\TextComponent',
        'description_block1' => '\Evers\SellingPartnerApi\Model\StandardTextBlock',
        'description_block2' => '\Evers\SellingPartnerApi\Model\StandardTextBlock',
        'specification_headline' => '\Evers\SellingPartnerApi\Model\TextComponent',
        'specification_list_block' => '\Evers\SellingPartnerApi\Model\StandardHeaderTextListBlock',
        'specification_text_block' => '\Evers\SellingPartnerApi\Model\StandardTextBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'headline' => null,
        'image' => null,
        'description_headline' => null,
        'description_block1' => null,
        'description_block2' => null,
        'specification_headline' => null,
        'specification_list_block' => null,
        'specification_text_block' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headline' => 'headline',
        'image' => 'image',
        'description_headline' => 'descriptionHeadline',
        'description_block1' => 'descriptionBlock1',
        'description_block2' => 'descriptionBlock2',
        'specification_headline' => 'specificationHeadline',
        'specification_list_block' => 'specificationListBlock',
        'specification_text_block' => 'specificationTextBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'image' => 'setImage',
        'description_headline' => 'setDescriptionHeadline',
        'description_block1' => 'setDescriptionBlock1',
        'description_block2' => 'setDescriptionBlock2',
        'specification_headline' => 'setSpecificationHeadline',
        'specification_list_block' => 'setSpecificationListBlock',
        'specification_text_block' => 'setSpecificationTextBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'image' => 'getImage',
        'description_headline' => 'getDescriptionHeadline',
        'description_block1' => 'getDescriptionBlock1',
        'description_block2' => 'getDescriptionBlock2',
        'specification_headline' => 'getSpecificationHeadline',
        'specification_list_block' => 'getSpecificationListBlock',
        'specification_text_block' => 'getSpecificationTextBlock'
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
        return self::$openAPIModelName;
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['description_headline'] = $data['description_headline'] ?? null;
        $this->container['description_block1'] = $data['description_block1'] ?? null;
        $this->container['description_block2'] = $data['description_block2'] ?? null;
        $this->container['specification_headline'] = $data['specification_headline'] ?? null;
        $this->container['specification_list_block'] = $data['specification_list_block'] ?? null;
        $this->container['specification_text_block'] = $data['specification_text_block'] ?? null;
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
     * Gets headline
     *
     * @return \Evers\SellingPartnerApi\Model\TextComponent|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \Evers\SellingPartnerApi\Model\TextComponent|null $headline headline
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Evers\SellingPartnerApi\Model\ImageComponent|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Evers\SellingPartnerApi\Model\ImageComponent|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets description_headline
     *
     * @return \Evers\SellingPartnerApi\Model\TextComponent|null
     */
    public function getDescriptionHeadline()
    {
        return $this->container['description_headline'];
    }

    /**
     * Sets description_headline
     *
     * @param \Evers\SellingPartnerApi\Model\TextComponent|null $description_headline description_headline
     *
     * @return self
     */
    public function setDescriptionHeadline($description_headline)
    {
        $this->container['description_headline'] = $description_headline;

        return $this;
    }

    /**
     * Gets description_block1
     *
     * @return \Evers\SellingPartnerApi\Model\StandardTextBlock|null
     */
    public function getDescriptionBlock1()
    {
        return $this->container['description_block1'];
    }

    /**
     * Sets description_block1
     *
     * @param \Evers\SellingPartnerApi\Model\StandardTextBlock|null $description_block1 description_block1
     *
     * @return self
     */
    public function setDescriptionBlock1($description_block1)
    {
        $this->container['description_block1'] = $description_block1;

        return $this;
    }

    /**
     * Gets description_block2
     *
     * @return \Evers\SellingPartnerApi\Model\StandardTextBlock|null
     */
    public function getDescriptionBlock2()
    {
        return $this->container['description_block2'];
    }

    /**
     * Sets description_block2
     *
     * @param \Evers\SellingPartnerApi\Model\StandardTextBlock|null $description_block2 description_block2
     *
     * @return self
     */
    public function setDescriptionBlock2($description_block2)
    {
        $this->container['description_block2'] = $description_block2;

        return $this;
    }

    /**
     * Gets specification_headline
     *
     * @return \Evers\SellingPartnerApi\Model\TextComponent|null
     */
    public function getSpecificationHeadline()
    {
        return $this->container['specification_headline'];
    }

    /**
     * Sets specification_headline
     *
     * @param \Evers\SellingPartnerApi\Model\TextComponent|null $specification_headline specification_headline
     *
     * @return self
     */
    public function setSpecificationHeadline($specification_headline)
    {
        $this->container['specification_headline'] = $specification_headline;

        return $this;
    }

    /**
     * Gets specification_list_block
     *
     * @return \Evers\SellingPartnerApi\Model\StandardHeaderTextListBlock|null
     */
    public function getSpecificationListBlock()
    {
        return $this->container['specification_list_block'];
    }

    /**
     * Sets specification_list_block
     *
     * @param \Evers\SellingPartnerApi\Model\StandardHeaderTextListBlock|null $specification_list_block specification_list_block
     *
     * @return self
     */
    public function setSpecificationListBlock($specification_list_block)
    {
        $this->container['specification_list_block'] = $specification_list_block;

        return $this;
    }

    /**
     * Gets specification_text_block
     *
     * @return \Evers\SellingPartnerApi\Model\StandardTextBlock|null
     */
    public function getSpecificationTextBlock()
    {
        return $this->container['specification_text_block'];
    }

    /**
     * Sets specification_text_block
     *
     * @param \Evers\SellingPartnerApi\Model\StandardTextBlock|null $specification_text_block specification_text_block
     *
     * @return self
     */
    public function setSpecificationTextBlock($specification_text_block)
    {
        $this->container['specification_text_block'] = $specification_text_block;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

