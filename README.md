# Instela API PHP SDK

[![Build Status](https://travis-ci.com/thehivecluster/instela-api-client.svg?token=g7m3yvL9xyyUBXqyRzHX)](https://travis-ci.com/thehivecluster/instela-api-client)

Instela API makes accessible almost every method used in [Instela](https://www.instela.com). With PHP SDK, you can easily access to all API functions in PHP.
 
## Getting Started

1. **Minimum requirements** – To run the SDK, your system will need to meet the
   [minimum requirements][docs-requirements], including having **PHP >= 5.5**
   compiled with the cURL extension and cURL 7.16.2+ compiled with a TLS
   backend (e.g., NSS or OpenSSL).
1. **Install the SDK** – Using [Composer] is the recommended way to install the
   AWS SDK for PHP. The SDK is available via [Packagist] under the
   [`instela/instela-php-sdk`][install-packagist] package.
1. **Using the SDK** – Please read this document to learn how to use the API.
  

# Usage

## Available API's

* [MessagesClient](#messagesclient)
    * [getThreadList](#getthreadlist)
    * [getThread](#getthread)
    * [sendMessage](#sendmessage)

## MessagesClient
*\Instela\SDK\Messages\MessagesClient*


This API is used to interact with the Instela Messaging service.

All methods of this API requires a valid OAuth 2.0 access token.

You can create a new instance for this API you can use the default constructor:

```php
use Instela\SDK\Messages;
$client = MessagesClient(array(
 'token' => 'ACCESS_TOKEN'
));
```



### getThreadList

Gets thread list for the authorized user.

```php
MessagesClient::getThreadList( array $args = array() ): \Instela\SDK\Result
```

**Example:**

```php
$thread = $messageClient->getThreadList(array(
    'page' => 1, // Optional, default = 1
    'per_page' => '25' // Optional, default = 1
))->getResult();

```


**Return Value:**

Returns the thread list as an array. See the array content or API documentation for more information.


---

### getThread

Gets the thread for the authorized user.

```php
MessagesClient::getThread( array $args = array() ): \Instela\SDK\Result
```

**Example:**

```php
$thread = $messageClient->getThread(array(
    'u1' => 1,  // User Id of the first participant of the message thread
    'u2' => 50, // User Id of the second participant of the message thread
    'page' => 1, // Optional, default = 1
    'per_page' => '25' // Optional, default = 1
))->getResult();
```


**Return Value:**

Returns the thread as an array. See the array content or API documentation for more information.


---

### sendMessage

Sends message from the account of the authorized user.

```php
MessagesClient::sendMessage( array $args = array() ): \Instela\SDK\Result
```

**Example:**

```php
$thread = $messageClient->sendMessage(array(
    'receiver' => 1,  // User Id of the receiver
    'message' => "test message", // Message body
))->getResult();
```


**Return Value:**

Returns the sent message as an array. See the array content or API documentation for more information.


---
