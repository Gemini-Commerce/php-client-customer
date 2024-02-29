<?php
/**
 * CustomerAddressEntityKind
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
 * CustomerAddressEntityKind Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Customer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerAddressEntityKind
{
    /**
     * Possible values of this enum
     */
    public const SHIPPING = 'SHIPPING';

    public const BILLING = 'BILLING';

    public const BOTH = 'BOTH';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPING,
            self::BILLING,
            self::BOTH
        ];
    }
}


