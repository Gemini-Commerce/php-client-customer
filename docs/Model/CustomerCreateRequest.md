# # CustomerCreateRequest


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   | [optional]
**em**| [**\GeminiCommerce\Customer\Model\CustomerEMFields**](CustomerEMFields.md) |   | [optional]
**name**| **string** |   | [optional]
**surname**| **string** |   | [optional]
**email**| **string** |   | [optional]
**birthdate**| **\DateTime** |   | [optional]
**gender**| **string** |   | [optional]
**enabled**| **bool** |   | [optional]
**source**| **string** |   | [optional]
**addresses**| [**\GeminiCommerce\Customer\Model\CustomerAddressEntity[]**](CustomerAddressEntity.md) |   | [optional]
**phone_number**| **string** |   | [optional]
**nationality**| **string** |   | [optional]
**groups**| **string[]** |   | [optional]
**deleted**| **bool** |   | [optional]
**newsletters**| [**\GeminiCommerce\Customer\Model\CustomerNewsletterRequest[]**](CustomerNewsletterRequest.md) |   | [optional]
**do_not_notify**| **bool** |   | [optional]
**attributes**| [**array<string,\GeminiCommerce\Customer\Model\ProtobufAny>**](ProtobufAny.md) |   | [optional]
**migrated_password**| [**\GeminiCommerce\Customer\Model\CustomerPassword**](CustomerPassword.md) |   | [optional]
**market**| **string** |   | [optional]
**preferred_locale**| **string** |   | [optional]
**tax_code**| **string** |   | [optional]
**certified_email**| **string** |   | [optional]
**sdi_code**| **string** |   | [optional]
**fiscal_code**| **string** |   | [optional]
**company_name**| **string** |   | [optional]
**additional_info**| **object** |   | [optional]
**external_ids**| **array<string,string>** |   | [optional]
**consent**| [**\GeminiCommerce\Customer\Model\CustomerCreateConsentRequest**](CustomerCreateConsentRequest.md) |   | [optional]
**aggregation_id**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)