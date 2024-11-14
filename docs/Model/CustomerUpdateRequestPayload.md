# # CustomerUpdateRequestPayload


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**em**| [**\OpenAPI\Client\Model\CustomerEMFields**](CustomerEMFields.md) |   | [optional]
**name**| **string** |   | [optional]
**surname**| **string** |   | [optional]
**email**| **string** |   | [optional]
**birthdate**| **\DateTime** |   | [optional]
**gender**| **string** |   | [optional]
**enabled**| **bool** |   | [optional]
**source**| **string** |   | [optional]
**addresses**| [**\OpenAPI\Client\Model\CustomerAddressEntity[]**](CustomerAddressEntity.md) |   | [optional]
**default_billing_address_id**| **string** |   | [optional]
**default_shipping_address_id**| **string** |   | [optional]
**phone_number**| **string** |   | [optional]
**nationality**| **string** |   | [optional]
**groups**| **string[]** |   | [optional]
**deleted**| **bool** |   | [optional]
**newsletters**| [**\OpenAPI\Client\Model\CustomerNewsletterRequest[]**](CustomerNewsletterRequest.md) |   | [optional]
**attributes**| [**array<string,\OpenAPI\Client\Model\ProtobufAny>**](ProtobufAny.md) |   | [optional]
**migrated_password**| [**\OpenAPI\Client\Model\CustomerPassword**](CustomerPassword.md) |   | [optional]
**preferred_locale**| **string** |   | [optional]
**tax_code**| **string** |   | [optional]
**certified_email**| **string** |   | [optional]
**sdi_code**| **string** |   | [optional]
**fiscal_code**| **string** |   | [optional]
**company_name**| **string** |   | [optional]
**additional_info**| **object** |   | [optional]
**market**| **string** |   | [optional]
**external_ids**| **array<string,string>** |   | [optional]
**consent**| [**\OpenAPI\Client\Model\CustomerCreateConsentRequest**](CustomerCreateConsentRequest.md) |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

