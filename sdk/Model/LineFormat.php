<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */


namespace Aspose\Slides\Cloud\Sdk\Model;


use \ArrayAccess;
use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * LineFormat Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineFormat implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alignment' => '\Aspose\Slides\Cloud\Sdk\Model\LineAlignment',
        'cap_style' => '\Aspose\Slides\Cloud\Sdk\Model\LineCapStyle',
        'dash_style' => '\Aspose\Slides\Cloud\Sdk\Model\LineDashStyle',
        'join_style' => '\Aspose\Slides\Cloud\Sdk\Model\LineJoinStyle',
        'style' => '\Aspose\Slides\Cloud\Sdk\Model\LineStyle',
        'begin_arrow_head' => '\Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties',
        'end_arrow_head' => '\Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties',
        'custom_dash_pattern' => '\Aspose\Slides\Cloud\Sdk\Model\CustomDashPattern',
        'fill_format' => '\Aspose\Slides\Cloud\Sdk\Model\FillFormat',
        'miter_limit' => 'double',
        'width' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alignment' => null,
        'cap_style' => null,
        'dash_style' => null,
        'join_style' => null,
        'style' => null,
        'begin_arrow_head' => null,
        'end_arrow_head' => null,
        'custom_dash_pattern' => null,
        'fill_format' => null,
        'miter_limit' => 'double',
        'width' => 'double'
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
        'alignment' => 'Alignment',
        'cap_style' => 'CapStyle',
        'dash_style' => 'DashStyle',
        'join_style' => 'JoinStyle',
        'style' => 'Style',
        'begin_arrow_head' => 'BeginArrowHead',
        'end_arrow_head' => 'EndArrowHead',
        'custom_dash_pattern' => 'CustomDashPattern',
        'fill_format' => 'FillFormat',
        'miter_limit' => 'MiterLimit',
        'width' => 'Width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alignment' => 'setAlignment',
        'cap_style' => 'setCapStyle',
        'dash_style' => 'setDashStyle',
        'join_style' => 'setJoinStyle',
        'style' => 'setStyle',
        'begin_arrow_head' => 'setBeginArrowHead',
        'end_arrow_head' => 'setEndArrowHead',
        'custom_dash_pattern' => 'setCustomDashPattern',
        'fill_format' => 'setFillFormat',
        'miter_limit' => 'setMiterLimit',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alignment' => 'getAlignment',
        'cap_style' => 'getCapStyle',
        'dash_style' => 'getDashStyle',
        'join_style' => 'getJoinStyle',
        'style' => 'getStyle',
        'begin_arrow_head' => 'getBeginArrowHead',
        'end_arrow_head' => 'getEndArrowHead',
        'custom_dash_pattern' => 'getCustomDashPattern',
        'fill_format' => 'getFillFormat',
        'miter_limit' => 'getMiterLimit',
        'width' => 'getWidth'
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
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['cap_style'] = isset($data['cap_style']) ? $data['cap_style'] : null;
        $this->container['dash_style'] = isset($data['dash_style']) ? $data['dash_style'] : null;
        $this->container['join_style'] = isset($data['join_style']) ? $data['join_style'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['begin_arrow_head'] = isset($data['begin_arrow_head']) ? $data['begin_arrow_head'] : null;
        $this->container['end_arrow_head'] = isset($data['end_arrow_head']) ? $data['end_arrow_head'] : null;
        $this->container['custom_dash_pattern'] = isset($data['custom_dash_pattern']) ? $data['custom_dash_pattern'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['miter_limit'] = isset($data['miter_limit']) ? $data['miter_limit'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['alignment'] === null) {
            $invalidProperties[] = "'alignment' can't be null";
        }
        if ($this->container['cap_style'] === null) {
            $invalidProperties[] = "'cap_style' can't be null";
        }
        if ($this->container['dash_style'] === null) {
            $invalidProperties[] = "'dash_style' can't be null";
        }
        if ($this->container['join_style'] === null) {
            $invalidProperties[] = "'join_style' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        if ($this->container['miter_limit'] === null) {
            $invalidProperties[] = "'miter_limit' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
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

        if ($this->container['alignment'] === null) {
            return false;
        }
        if ($this->container['cap_style'] === null) {
            return false;
        }
        if ($this->container['dash_style'] === null) {
            return false;
        }
        if ($this->container['join_style'] === null) {
            return false;
        }
        if ($this->container['style'] === null) {
            return false;
        }
        if ($this->container['miter_limit'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets alignment
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineAlignment
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineAlignment $alignment alignment
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets cap_style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineCapStyle
     */
    public function getCapStyle()
    {
        return $this->container['cap_style'];
    }

    /**
     * Sets cap_style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineCapStyle $cap_style cap_style
     *
     * @return $this
     */
    public function setCapStyle($cap_style)
    {
        $this->container['cap_style'] = $cap_style;

        return $this;
    }

    /**
     * Gets dash_style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineDashStyle
     */
    public function getDashStyle()
    {
        return $this->container['dash_style'];
    }

    /**
     * Sets dash_style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineDashStyle $dash_style dash_style
     *
     * @return $this
     */
    public function setDashStyle($dash_style)
    {
        $this->container['dash_style'] = $dash_style;

        return $this;
    }

    /**
     * Gets join_style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineJoinStyle
     */
    public function getJoinStyle()
    {
        return $this->container['join_style'];
    }

    /**
     * Sets join_style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineJoinStyle $join_style join_style
     *
     * @return $this
     */
    public function setJoinStyle($join_style)
    {
        $this->container['join_style'] = $join_style;

        return $this;
    }

    /**
     * Gets style
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\LineStyle
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\LineStyle $style style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets begin_arrow_head
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties
     */
    public function getBeginArrowHead()
    {
        return $this->container['begin_arrow_head'];
    }

    /**
     * Sets begin_arrow_head
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties $begin_arrow_head begin_arrow_head
     *
     * @return $this
     */
    public function setBeginArrowHead($begin_arrow_head)
    {
        $this->container['begin_arrow_head'] = $begin_arrow_head;

        return $this;
    }

    /**
     * Gets end_arrow_head
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties
     */
    public function getEndArrowHead()
    {
        return $this->container['end_arrow_head'];
    }

    /**
     * Sets end_arrow_head
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\ArrowHeadProperties $end_arrow_head end_arrow_head
     *
     * @return $this
     */
    public function setEndArrowHead($end_arrow_head)
    {
        $this->container['end_arrow_head'] = $end_arrow_head;

        return $this;
    }

    /**
     * Gets custom_dash_pattern
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\CustomDashPattern
     */
    public function getCustomDashPattern()
    {
        return $this->container['custom_dash_pattern'];
    }

    /**
     * Sets custom_dash_pattern
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\CustomDashPattern $custom_dash_pattern custom_dash_pattern
     *
     * @return $this
     */
    public function setCustomDashPattern($custom_dash_pattern)
    {
        $this->container['custom_dash_pattern'] = $custom_dash_pattern;

        return $this;
    }

    /**
     * Gets fill_format
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fill_format'];
    }

    /**
     * Sets fill_format
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\FillFormat $fill_format fill_format
     *
     * @return $this
     */
    public function setFillFormat($fill_format)
    {
        $this->container['fill_format'] = $fill_format;

        return $this;
    }

    /**
     * Gets miter_limit
     *
     * @return double
     */
    public function getMiterLimit()
    {
        return $this->container['miter_limit'];
    }

    /**
     * Sets miter_limit
     *
     * @param double $miter_limit miter_limit
     *
     * @return $this
     */
    public function setMiterLimit($miter_limit)
    {
        $this->container['miter_limit'] = $miter_limit;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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
     * @return mixed
     */
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


