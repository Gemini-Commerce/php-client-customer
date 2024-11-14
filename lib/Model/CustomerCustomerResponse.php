<?php
/**
 * CustomerCustomerResponse
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
 * CustomerCustomerResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerCustomerResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customerCustomerResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'em' => '\OpenAPI\Client\Model\CustomerEMFields',
        'grn' => 'string',
        'id' => 'string',
        'name' => 'string',
        'surname' => 'string',
        'email' => 'string',
        'birthdate' => '\DateTime',
        'gender' => 'string',
        'enabled' => 'bool',
        'source' => 'string',
        'addresses' => '\OpenAPI\Client\Model\CustomerAddressCustomerResponse[]',
        'default_billing_address_id' => 'string',
        'default_shipping_address_id' => 'string',
        'phone_number' => 'string',
        'nationality' => 'string',
        'preferred_locale' => 'string',
        'groups' => 'string[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'deleted' => 'bool',
        'deleted_at' => '\DateTime',
        'newsletters' => '\OpenAPI\Client\Model\CustomerNewsletterResponse[]',
        'migrated_password' => '\OpenAPI\Client\Model\CustomerPassword',
        'attributes' => 'array<string,\OpenAPI\Client\Model\ProtobufAny>',
        'tax_code' => 'string',
        'certified_email' => 'string',
        'sdi_code' => 'string',
        'fiscal_code' => 'string',
        'company_name' => 'string',
        'additional_info' => 'object',
        'market' => 'string',
        'permissions' => '\OpenAPI\Client\Model\CustomerPermission[]',
        'external_ids' => 'array<string,string>',
        'agent_grn' => 'string',
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
        'em' => null,
        'grn' => null,
        'id' => null,
        'name' => null,
        'surname' => null,
        'email' => null,
        'birthdate' => 'date-time',
        'gender' => null,
        'enabled' => null,
        'source' => null,
        'addresses' => null,
        'default_billing_address_id' => null,
        'default_shipping_address_id' => null,
        'phone_number' => null,
        'nationality' => null,
        'preferred_locale' => null,
        'groups' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'deleted' => null,
        'deleted_at' => 'date-time',
        'newsletters' => null,
        'migrated_password' => null,
        'attributes' => null,
        'tax_code' => null,
        'certified_email' => null,
        'sdi_code' => null,
        'fiscal_code' => null,
        'company_name' => null,
        'additional_info' => null,
        'market' => null,
        'permissions' => null,
        'external_ids' => null,
        'agent_grn' => null,
        'aggregation_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'em' => false,
        'grn' => false,
        'id' => false,
        'name' => false,
        'surname' => false,
        'email' => false,
        'birthdate' => false,
        'gender' => false,
        'enabled' => false,
        'source' => false,
        'addresses' => false,
        'default_billing_address_id' => false,
        'default_shipping_address_id' => false,
        'phone_number' => false,
        'nationality' => false,
        'preferred_locale' => false,
        'groups' => false,
        'created_at' => false,
        'updated_at' => false,
        'deleted' => false,
        'deleted_at' => false,
        'newsletters' => false,
        'migrated_password' => false,
        'attributes' => false,
        'tax_code' => false,
        'certified_email' => false,
        'sdi_code' => false,
        'fiscal_code' => false,
        'company_name' => false,
        'additional_info' => false,
        'market' => false,
        'permissions' => false,
        'external_ids' => false,
        'agent_grn' => false,
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
        'em' => 'em',
        'grn' => 'grn',
        'id' => 'id',
        'name' => 'name',
        'surname' => 'surname',
        'email' => 'email',
        'birthdate' => 'birthdate',
        'gender' => 'gender',
        'enabled' => 'enabled',
        'source' => 'source',
        'addresses' => 'addresses',
        'default_billing_address_id' => 'defaultBillingAddressId',
        'default_shipping_address_id' => 'defaultShippingAddressId',
        'phone_number' => 'phoneNumber',
        'nationality' => 'nationality',
        'preferred_locale' => 'preferredLocale',
        'groups' => 'groups',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'deleted' => 'deleted',
        'deleted_at' => 'deletedAt',
        'newsletters' => 'newsletters',
        'migrated_password' => 'migratedPassword',
        'attributes' => 'attributes',
        'tax_code' => 'taxCode',
        'certified_email' => 'certifiedEmail',
        'sdi_code' => 'sdiCode',
        'fiscal_code' => 'fiscalCode',
        'company_name' => 'companyName',
        'additional_info' => 'additionalInfo',
        'market' => 'market',
        'permissions' => 'permissions',
        'external_ids' => 'externalIds',
        'agent_grn' => 'agentGrn',
        'aggregation_id' => 'aggregationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'em' => 'setEm',
        'grn' => 'setGrn',
        'id' => 'setId',
        'name' => 'setName',
        'surname' => 'setSurname',
        'email' => 'setEmail',
        'birthdate' => 'setBirthdate',
        'gender' => 'setGender',
        'enabled' => 'setEnabled',
        'source' => 'setSource',
        'addresses' => 'setAddresses',
        'default_billing_address_id' => 'setDefaultBillingAddressId',
        'default_shipping_address_id' => 'setDefaultShippingAddressId',
        'phone_number' => 'setPhoneNumber',
        'nationality' => 'setNationality',
        'preferred_locale' => 'setPreferredLocale',
        'groups' => 'setGroups',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted' => 'setDeleted',
        'deleted_at' => 'setDeletedAt',
        'newsletters' => 'setNewsletters',
        'migrated_password' => 'setMigratedPassword',
        'attributes' => 'setAttributes',
        'tax_code' => 'setTaxCode',
        'certified_email' => 'setCertifiedEmail',
        'sdi_code' => 'setSdiCode',
        'fiscal_code' => 'setFiscalCode',
        'company_name' => 'setCompanyName',
        'additional_info' => 'setAdditionalInfo',
        'market' => 'setMarket',
        'permissions' => 'setPermissions',
        'external_ids' => 'setExternalIds',
        'agent_grn' => 'setAgentGrn',
        'aggregation_id' => 'setAggregationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'em' => 'getEm',
        'grn' => 'getGrn',
        'id' => 'getId',
        'name' => 'getName',
        'surname' => 'getSurname',
        'email' => 'getEmail',
        'birthdate' => 'getBirthdate',
        'gender' => 'getGender',
        'enabled' => 'getEnabled',
        'source' => 'getSource',
        'addresses' => 'getAddresses',
        'default_billing_address_id' => 'getDefaultBillingAddressId',
        'default_shipping_address_id' => 'getDefaultShippingAddressId',
        'phone_number' => 'getPhoneNumber',
        'nationality' => 'getNationality',
        'preferred_locale' => 'getPreferredLocale',
        'groups' => 'getGroups',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted' => 'getDeleted',
        'deleted_at' => 'getDeletedAt',
        'newsletters' => 'getNewsletters',
        'migrated_password' => 'getMigratedPassword',
        'attributes' => 'getAttributes',
        'tax_code' => 'getTaxCode',
        'certified_email' => 'getCertifiedEmail',
        'sdi_code' => 'getSdiCode',
        'fiscal_code' => 'getFiscalCode',
        'company_name' => 'getCompanyName',
        'additional_info' => 'getAdditionalInfo',
        'market' => 'getMarket',
        'permissions' => 'getPermissions',
        'external_ids' => 'getExternalIds',
        'agent_grn' => 'getAgentGrn',
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
        $this->setIfExists('em', $data ?? [], null);
        $this->setIfExists('grn', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('birthdate', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('default_billing_address_id', $data ?? [], null);
        $this->setIfExists('default_shipping_address_id', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('preferred_locale', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('newsletters', $data ?? [], null);
        $this->setIfExists('migrated_password', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('tax_code', $data ?? [], null);
        $this->setIfExists('certified_email', $data ?? [], null);
        $this->setIfExists('sdi_code', $data ?? [], null);
        $this->setIfExists('fiscal_code', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('additional_info', $data ?? [], null);
        $this->setIfExists('market', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
        $this->setIfExists('external_ids', $data ?? [], null);
        $this->setIfExists('agent_grn', $data ?? [], null);
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
     * Gets grn
     *
     * @return string|null
     */
    public function getGrn()
    {
        return $this->container['grn'];
    }

    /**
     * Sets grn
     *
     * @param string|null $grn grn
     *
     * @return self
     */
    public function setGrn($grn)
    {
        if (is_null($grn)) {
            throw new \InvalidArgumentException('non-nullable grn cannot be null');
        }
        $this->container['grn'] = $grn;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * @return \OpenAPI\Client\Model\CustomerAddressCustomerResponse[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\CustomerAddressCustomerResponse[]|null $addresses addresses
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
     * Gets default_billing_address_id
     *
     * @return string|null
     */
    public function getDefaultBillingAddressId()
    {
        return $this->container['default_billing_address_id'];
    }

    /**
     * Sets default_billing_address_id
     *
     * @param string|null $default_billing_address_id default_billing_address_id
     *
     * @return self
     */
    public function setDefaultBillingAddressId($default_billing_address_id)
    {
        if (is_null($default_billing_address_id)) {
            throw new \InvalidArgumentException('non-nullable default_billing_address_id cannot be null');
        }
        $this->container['default_billing_address_id'] = $default_billing_address_id;

        return $this;
    }

    /**
     * Gets default_shipping_address_id
     *
     * @return string|null
     */
    public function getDefaultShippingAddressId()
    {
        return $this->container['default_shipping_address_id'];
    }

    /**
     * Sets default_shipping_address_id
     *
     * @param string|null $default_shipping_address_id default_shipping_address_id
     *
     * @return self
     */
    public function setDefaultShippingAddressId($default_shipping_address_id)
    {
        if (is_null($default_shipping_address_id)) {
            throw new \InvalidArgumentException('non-nullable default_shipping_address_id cannot be null');
        }
        $this->container['default_shipping_address_id'] = $default_shipping_address_id;

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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        if (is_null($deleted_at)) {
            throw new \InvalidArgumentException('non-nullable deleted_at cannot be null');
        }
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets newsletters
     *
     * @return \OpenAPI\Client\Model\CustomerNewsletterResponse[]|null
     */
    public function getNewsletters()
    {
        return $this->container['newsletters'];
    }

    /**
     * Sets newsletters
     *
     * @param \OpenAPI\Client\Model\CustomerNewsletterResponse[]|null $newsletters newsletters
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
     * Gets permissions
     *
     * @return \OpenAPI\Client\Model\CustomerPermission[]|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \OpenAPI\Client\Model\CustomerPermission[]|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $this->container['permissions'] = $permissions;

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
     * Gets agent_grn
     *
     * @return string|null
     */
    public function getAgentGrn()
    {
        return $this->container['agent_grn'];
    }

    /**
     * Sets agent_grn
     *
     * @param string|null $agent_grn agent_grn
     *
     * @return self
     */
    public function setAgentGrn($agent_grn)
    {
        if (is_null($agent_grn)) {
            throw new \InvalidArgumentException('non-nullable agent_grn cannot be null');
        }
        $this->container['agent_grn'] = $agent_grn;

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


