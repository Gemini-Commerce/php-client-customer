<?php
/**
 * CustomerCreateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CustomerCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customerCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tenant_id' => 'string',
        'em' => '\OpenAPI\Client\Model\CustomerEMFields',
        'name' => 'string',
        'surname' => 'string',
        'email' => 'string',
        'birthdate' => '\DateTime',
        'gender' => 'string',
        'enabled' => 'bool',
        'source' => 'string',
        'addresses' => '\OpenAPI\Client\Model\CustomerAddressEntity[]',
        'phone_number' => 'string',
        'nationality' => 'string',
        'groups' => 'string[]',
        'deleted' => 'bool',
        'newsletters' => '\OpenAPI\Client\Model\CustomerNewsletterRequest[]',
        'do_not_notify' => 'bool',
        'attributes' => 'array<string,\OpenAPI\Client\Model\ProtobufAny>',
        'migrated_password' => '\OpenAPI\Client\Model\CustomerPassword',
        'market' => 'string',
        'preferred_locale' => 'string',
        'tax_code' => 'string',
        'certified_email' => 'string',
        'sdi_code' => 'string',
        'fiscal_code' => 'string',
        'company_name' => 'string',
        'additional_info' => 'object',
        'external_ids' => 'array<string,string>',
        'consent' => '\OpenAPI\Client\Model\CustomerCreateConsentRequest',
        'aggregation_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tenant_id' => null,
        'em' => null,
        'name' => null,
        'surname' => null,
        'email' => null,
        'birthdate' => 'date-time',
        'gender' => null,
        'enabled' => null,
        'source' => null,
        'addresses' => null,
        'phone_number' => null,
        'nationality' => null,
        'groups' => null,
        'deleted' => null,
        'newsletters' => null,
        'do_not_notify' => null,
        'attributes' => null,
        'migrated_password' => null,
        'market' => null,
        'preferred_locale' => null,
        'tax_code' => null,
        'certified_email' => null,
        'sdi_code' => null,
        'fiscal_code' => null,
        'company_name' => null,
        'additional_info' => null,
        'external_ids' => null,
        'consent' => null,
        'aggregation_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tenant_id' => false,
        'em' => false,
        'name' => false,
        'surname' => false,
        'email' => false,
        'birthdate' => false,
        'gender' => false,
        'enabled' => false,
        'source' => false,
        'addresses' => false,
        'phone_number' => false,
        'nationality' => false,
        'groups' => false,
        'deleted' => false,
        'newsletters' => false,
        'do_not_notify' => false,
        'attributes' => false,
        'migrated_password' => false,
        'market' => false,
        'preferred_locale' => false,
        'tax_code' => false,
        'certified_email' => false,
        'sdi_code' => false,
        'fiscal_code' => false,
        'company_name' => false,
        'additional_info' => false,
        'external_ids' => false,
        'consent' => false,
        'aggregation_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tenant_id' => 'tenantId',
        'em' => 'em',
        'name' => 'name',
        'surname' => 'surname',
        'email' => 'email',
        'birthdate' => 'birthdate',
        'gender' => 'gender',
        'enabled' => 'enabled',
        'source' => 'source',
        'addresses' => 'addresses',
        'phone_number' => 'phoneNumber',
        'nationality' => 'nationality',
        'groups' => 'groups',
        'deleted' => 'deleted',
        'newsletters' => 'newsletters',
        'do_not_notify' => 'doNotNotify',
        'attributes' => 'attributes',
        'migrated_password' => 'migratedPassword',
        'market' => 'market',
        'preferred_locale' => 'preferredLocale',
        'tax_code' => 'taxCode',
        'certified_email' => 'certifiedEmail',
        'sdi_code' => 'sdiCode',
        'fiscal_code' => 'fiscalCode',
        'company_name' => 'companyName',
        'additional_info' => 'additionalInfo',
        'external_ids' => 'externalIds',
        'consent' => 'consent',
        'aggregation_id' => 'aggregationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tenant_id' => 'setTenantId',
        'em' => 'setEm',
        'name' => 'setName',
        'surname' => 'setSurname',
        'email' => 'setEmail',
        'birthdate' => 'setBirthdate',
        'gender' => 'setGender',
        'enabled' => 'setEnabled',
        'source' => 'setSource',
        'addresses' => 'setAddresses',
        'phone_number' => 'setPhoneNumber',
        'nationality' => 'setNationality',
        'groups' => 'setGroups',
        'deleted' => 'setDeleted',
        'newsletters' => 'setNewsletters',
        'do_not_notify' => 'setDoNotNotify',
        'attributes' => 'setAttributes',
        'migrated_password' => 'setMigratedPassword',
        'market' => 'setMarket',
        'preferred_locale' => 'setPreferredLocale',
        'tax_code' => 'setTaxCode',
        'certified_email' => 'setCertifiedEmail',
        'sdi_code' => 'setSdiCode',
        'fiscal_code' => 'setFiscalCode',
        'company_name' => 'setCompanyName',
        'additional_info' => 'setAdditionalInfo',
        'external_ids' => 'setExternalIds',
        'consent' => 'setConsent',
        'aggregation_id' => 'setAggregationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tenant_id' => 'getTenantId',
        'em' => 'getEm',
        'name' => 'getName',
        'surname' => 'getSurname',
        'email' => 'getEmail',
        'birthdate' => 'getBirthdate',
        'gender' => 'getGender',
        'enabled' => 'getEnabled',
        'source' => 'getSource',
        'addresses' => 'getAddresses',
        'phone_number' => 'getPhoneNumber',
        'nationality' => 'getNationality',
        'groups' => 'getGroups',
        'deleted' => 'getDeleted',
        'newsletters' => 'getNewsletters',
        'do_not_notify' => 'getDoNotNotify',
        'attributes' => 'getAttributes',
        'migrated_password' => 'getMigratedPassword',
        'market' => 'getMarket',
        'preferred_locale' => 'getPreferredLocale',
        'tax_code' => 'getTaxCode',
        'certified_email' => 'getCertifiedEmail',
        'sdi_code' => 'getSdiCode',
        'fiscal_code' => 'getFiscalCode',
        'company_name' => 'getCompanyName',
        'additional_info' => 'getAdditionalInfo',
        'external_ids' => 'getExternalIds',
        'consent' => 'getConsent',
        'aggregation_id' => 'getAggregationId'
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
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('tenant_id', $data ?? [], null);
        $this->setIfExists('em', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('birthdate', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('newsletters', $data ?? [], null);
        $this->setIfExists('do_not_notify', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('migrated_password', $data ?? [], null);
        $this->setIfExists('market', $data ?? [], null);
        $this->setIfExists('preferred_locale', $data ?? [], null);
        $this->setIfExists('tax_code', $data ?? [], null);
        $this->setIfExists('certified_email', $data ?? [], null);
        $this->setIfExists('sdi_code', $data ?? [], null);
        $this->setIfExists('fiscal_code', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('additional_info', $data ?? [], null);
        $this->setIfExists('external_ids', $data ?? [], null);
        $this->setIfExists('consent', $data ?? [], null);
        $this->setIfExists('aggregation_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets tenant_id
     *
     * @return string|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string|null $tenant_id tenant_id
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        if (is_null($tenant_id)) {
            throw new \InvalidArgumentException('non-nullable tenant_id cannot be null');
        }
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets em
     *
     * @return \OpenAPI\Client\Model\CustomerEMFields|null
     */
    public function getEm()
    {
        return $this->container['em'];
    }

    /**
     * Sets em
     *
     * @param \OpenAPI\Client\Model\CustomerEMFields|null $em em
     *
     * @return self
     */
    public function setEm($em)
    {
        if (is_null($em)) {
            throw new \InvalidArgumentException('non-nullable em cannot be null');
        }
        $this->container['em'] = $em;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            throw new \InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return \DateTime|null
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param \DateTime|null $birthdate birthdate
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        if (is_null($birthdate)) {
            throw new \InvalidArgumentException('non-nullable birthdate cannot be null');
        }
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \OpenAPI\Client\Model\CustomerAddressEntity[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\CustomerAddressEntity[]|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            throw new \InvalidArgumentException('non-nullable addresses cannot be null');
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality nationality
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        if (is_null($nationality)) {
            throw new \InvalidArgumentException('non-nullable nationality cannot be null');
        }
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        if (is_null($groups)) {
            throw new \InvalidArgumentException('non-nullable groups cannot be null');
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            throw new \InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets newsletters
     *
     * @return \OpenAPI\Client\Model\CustomerNewsletterRequest[]|null
     */
    public function getNewsletters()
    {
        return $this->container['newsletters'];
    }

    /**
     * Sets newsletters
     *
     * @param \OpenAPI\Client\Model\CustomerNewsletterRequest[]|null $newsletters newsletters
     *
     * @return self
     */
    public function setNewsletters($newsletters)
    {
        if (is_null($newsletters)) {
            throw new \InvalidArgumentException('non-nullable newsletters cannot be null');
        }
        $this->container['newsletters'] = $newsletters;

        return $this;
    }

    /**
     * Gets do_not_notify
     *
     * @return bool|null
     */
    public function getDoNotNotify()
    {
        return $this->container['do_not_notify'];
    }

    /**
     * Sets do_not_notify
     *
     * @param bool|null $do_not_notify do_not_notify
     *
     * @return self
     */
    public function setDoNotNotify($do_not_notify)
    {
        if (is_null($do_not_notify)) {
            throw new \InvalidArgumentException('non-nullable do_not_notify cannot be null');
        }
        $this->container['do_not_notify'] = $do_not_notify;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,\OpenAPI\Client\Model\ProtobufAny>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,\OpenAPI\Client\Model\ProtobufAny>|null $attributes attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets migrated_password
     *
     * @return \OpenAPI\Client\Model\CustomerPassword|null
     */
    public function getMigratedPassword()
    {
        return $this->container['migrated_password'];
    }

    /**
     * Sets migrated_password
     *
     * @param \OpenAPI\Client\Model\CustomerPassword|null $migrated_password migrated_password
     *
     * @return self
     */
    public function setMigratedPassword($migrated_password)
    {
        if (is_null($migrated_password)) {
            throw new \InvalidArgumentException('non-nullable migrated_password cannot be null');
        }
        $this->container['migrated_password'] = $migrated_password;

        return $this;
    }

    /**
     * Gets market
     *
     * @return string|null
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param string|null $market market
     *
     * @return self
     */
    public function setMarket($market)
    {
        if (is_null($market)) {
            throw new \InvalidArgumentException('non-nullable market cannot be null');
        }
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets preferred_locale
     *
     * @return string|null
     */
    public function getPreferredLocale()
    {
        return $this->container['preferred_locale'];
    }

    /**
     * Sets preferred_locale
     *
     * @param string|null $preferred_locale preferred_locale
     *
     * @return self
     */
    public function setPreferredLocale($preferred_locale)
    {
        if (is_null($preferred_locale)) {
            throw new \InvalidArgumentException('non-nullable preferred_locale cannot be null');
        }
        $this->container['preferred_locale'] = $preferred_locale;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string|null $tax_code tax_code
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        if (is_null($tax_code)) {
            throw new \InvalidArgumentException('non-nullable tax_code cannot be null');
        }
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets certified_email
     *
     * @return string|null
     */
    public function getCertifiedEmail()
    {
        return $this->container['certified_email'];
    }

    /**
     * Sets certified_email
     *
     * @param string|null $certified_email certified_email
     *
     * @return self
     */
    public function setCertifiedEmail($certified_email)
    {
        if (is_null($certified_email)) {
            throw new \InvalidArgumentException('non-nullable certified_email cannot be null');
        }
        $this->container['certified_email'] = $certified_email;

        return $this;
    }

    /**
     * Gets sdi_code
     *
     * @return string|null
     */
    public function getSdiCode()
    {
        return $this->container['sdi_code'];
    }

    /**
     * Sets sdi_code
     *
     * @param string|null $sdi_code sdi_code
     *
     * @return self
     */
    public function setSdiCode($sdi_code)
    {
        if (is_null($sdi_code)) {
            throw new \InvalidArgumentException('non-nullable sdi_code cannot be null');
        }
        $this->container['sdi_code'] = $sdi_code;

        return $this;
    }

    /**
     * Gets fiscal_code
     *
     * @return string|null
     */
    public function getFiscalCode()
    {
        return $this->container['fiscal_code'];
    }

    /**
     * Sets fiscal_code
     *
     * @param string|null $fiscal_code fiscal_code
     *
     * @return self
     */
    public function setFiscalCode($fiscal_code)
    {
        if (is_null($fiscal_code)) {
            throw new \InvalidArgumentException('non-nullable fiscal_code cannot be null');
        }
        $this->container['fiscal_code'] = $fiscal_code;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return object|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param object|null $additional_info additional_info
     *
     * @return self
     */
    public function setAdditionalInfo($additional_info)
    {
        if (is_null($additional_info)) {
            throw new \InvalidArgumentException('non-nullable additional_info cannot be null');
        }
        $this->container['additional_info'] = $additional_info;

        return $this;
    }

    /**
     * Gets external_ids
     *
     * @return array<string,string>|null
     */
    public function getExternalIds()
    {
        return $this->container['external_ids'];
    }

    /**
     * Sets external_ids
     *
     * @param array<string,string>|null $external_ids external_ids
     *
     * @return self
     */
    public function setExternalIds($external_ids)
    {
        if (is_null($external_ids)) {
            throw new \InvalidArgumentException('non-nullable external_ids cannot be null');
        }
        $this->container['external_ids'] = $external_ids;

        return $this;
    }

    /**
     * Gets consent
     *
     * @return \OpenAPI\Client\Model\CustomerCreateConsentRequest|null
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param \OpenAPI\Client\Model\CustomerCreateConsentRequest|null $consent consent
     *
     * @return self
     */
    public function setConsent($consent)
    {
        if (is_null($consent)) {
            throw new \InvalidArgumentException('non-nullable consent cannot be null');
        }
        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets aggregation_id
     *
     * @return string|null
     */
    public function getAggregationId()
    {
        return $this->container['aggregation_id'];
    }

    /**
     * Sets aggregation_id
     *
     * @param string|null $aggregation_id aggregation_id
     *
     * @return self
     */
    public function setAggregationId($aggregation_id)
    {
        if (is_null($aggregation_id)) {
            throw new \InvalidArgumentException('non-nullable aggregation_id cannot be null');
        }
        $this->container['aggregation_id'] = $aggregation_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


