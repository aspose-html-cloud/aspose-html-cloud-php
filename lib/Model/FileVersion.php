<?php
/**
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
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
 * php version 7.4
 *
 * @category  Aspose_Html_Cloud_SDK
 * @package   html-sdk-php
 * @author    Alexander Makogon <alexander.makogon@aspose.com>
 * @copyright 2022 Aspose
 * @license   https://opensource.org/licenses/mit-license.php  MIT License
 * @version   GIT: @22.10.2@
 * @link      https://packagist.org/packages/aspose/html-sdk-php
 */

namespace Client\Invoker\Model;

use Client\Invoker\ObjectSerializer;

/**
 * Model for FileVersion response
 *
 * @category Models
 * @package  html-sdk-php
 * @author   Alexander Makogon <alexander.makogon@aspose.com>
 * @license  https://opensource.org/licenses/mit-license.php  MIT License
 * @link     https://packagist.org/packages/aspose/html-sdk-php
 */
class FileVersion extends StorageFile
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $swaggerModelName = 'FileVersion';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerTypes = [
        'version_id' => 'string',
        'is_latest' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static array $swaggerFormats = [
        'version_id' => null,
        'is_latest' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'version_id' => 'versionId',
        'is_latest' => 'isLatest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'version_id' => 'setVersionId',
        'is_latest' => 'setIsLatest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'version_id' => 'getVersionId',
        'is_latest' => 'getIsLatest'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$swaggerModelName;
    }

    /**
     * Constructor
     *
     * @param array | null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['version_id']
            = $data['version_id'] ?? null;
        $this->container['is_latest']
            = $data['is_latest'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['is_latest'] === null) {
            $invalidProperties[] = "'is_latest' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId(): string
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id File Version ID.
     *
     * @return $this
     */
    public function setVersionId(string $version_id): FileVersion
    {
        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets is_latest
     *
     * @return bool
     */
    public function getIsLatest(): bool
    {
        return $this->container['is_latest'];
    }

    /**
     * Sets is_latest
     *
     * @param bool $is_latest Specifies whether the file is (true) or is not
     *                        (false) the latest version of an file.
     *
     * @return $this
     */
    public function setIsLatest(bool $is_latest): FileVersion
    {
        $this->container['is_latest'] = $is_latest;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
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
        return $this->container[$offset] ?? null;
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
