# # CustomerCustomerResponse


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**em**| [**\GeminiCommerce\Customer\Model\CustomerEMFields**](CustomerEMFields.md) |   | [optional]
**grn**| **string** |   | [optional]
**id**| **string** |   | [optional]
**name**| **string** |   | [optional]
**surname**| **string** |   | [optional]
**email**| **string** |   | [optional]
**birthdate**| **\DateTime** |   | [optional]
**gender**| **string** |   | [optional]
**enabled**| **bool** |   | [optional]
**source**| **string** |   | [optional]
**addresses**| [**\GeminiCommerce\Customer\Model\CustomerAddressCustomerResponse[]**](CustomerAddressCustomerResponse.md) |   | [optional]
**default_billing_address_id**| **string** |   | [optional]
**default_shipping_address_id**| **string** |   | [optional]
**phone_number**| **string** |   | [optional]
**nationality**| **string** |   | [optional]
**preferred_locale**| **string** |   | [optional]
**groups**| **string[]** |   | [optional]
**created_at**| **\DateTime** |   | [optional]
**updated_at**| **\DateTime** |   | [optional]
**deleted**| **bool** |   | [optional]
**deleted_at**| **\DateTime** |   | [optional]
**newsletters**| [**\GeminiCommerce\Customer\Model\CustomerNewsletterResponse[]**](CustomerNewsletterResponse.md) |   | [optional]
**migrated_password**| [**\GeminiCommerce\Customer\Model\CustomerPassword**](CustomerPassword.md) |   | [optional]
**attributes**| [**array<string,\GeminiCommerce\Customer\Model\ProtobufAny>**](ProtobufAny.md) |   | [optional]
**tax_code**| **string** |   | [optional]
**certified_email**| **string** |   | [optional]
**sdi_code**| **string** |   | [optional]
**fiscal_code**| **string** |   | [optional]
**company_name**| **string** |   | [optional]
**additional_info**| **object** |   | [optional]
**market**| **string** |   | [optional]
**permissions**| [**\GeminiCommerce\Customer\Model\CustomerPermission[]**](CustomerPermission.md) |   | [optional]
**external_ids**| **array<string,string>** |   | [optional]
**agent_grn**| **string** |   | [optional]
**aggregation_id**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)