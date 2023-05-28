

    //api stuffz

    var SibApiV3Sdk = require('sib-api-v3-sdk');
    var defaultClient = SibApiV3Sdk.ApiClient.instance;
    
    // Configure API key authorization: api-key
    var apiKey = defaultClient.authentications['api-key'];
    apiKey.apiKey = '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';
    
    var apiInstance = new SibApiV3Sdk.ContactsApi();
    
    var createContact = new SibApiV3Sdk.CreateContact(); // CreateContact | Values to create a contact
    createContact = { 'email' : "john@doe.com" };
    
    apiInstance.createContact(createContact).then(function(data) {
      console.log('API called successfully. Returned data: ' + data);
    }, function(error) {
      console.error(error);
    });



