# Instela API SDK Documentation

## Table of Contents

* [MessagesClient](#messagesclient)
    * [getThreadList](#getthreadlist)
    * [getThread](#getthread)
    * [sendMessage](#sendmessage)

## MessagesClient

This client is used to interact with the Instela Messaging service.



* Full name: \Instela\SDK\Messages\MessagesClient
* Parent class: 



### getThreadList

Gets thread list for the authorized user.

```php
MessagesClient::getThreadList( array $args = array() ): \Instela\SDK\Result
```

**Example:**

```php
$thread = $messageClient->getThread(array(
    'page' => 1, // Optional, default = 1
    'per_page' => '25' // Optional, default = 1
));
```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | Arguments |




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
));


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | Arguments |




---


### sendMessage

Sends message from the account of the authorized user.

```php
MessagesClient::sendMessage( array $args = array() ): \Instela\SDK\Result
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | Arguments |




---



--------
> This document was automatically generated from source code comments on 2016-01-04 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
