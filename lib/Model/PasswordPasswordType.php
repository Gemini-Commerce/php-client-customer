<?php
/**
 * PasswordPasswordType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Customer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CDP Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Customer\Model;
use \GeminiCommerce\Customer\ObjectSerializer;

/**
 * PasswordPasswordType Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Customer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PasswordPasswordType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'PASSWORD_TYPE_UNKNOWN';

    public const MAGENTO1 = 'PASSWORD_TYPE_MAGENTO1';

    public const SYLIUS = 'PASSWORD_TYPE_SYLIUS';

    public const MAGENTO2 = 'PASSWORD_TYPE_MAGENTO2';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::MAGENTO1,
            self::SYLIUS,
            self::MAGENTO2
        ];
    }
}

