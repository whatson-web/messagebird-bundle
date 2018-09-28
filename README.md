# messagebird-bundle
A symfony integration for the MessageBird PHP SDK

This bundle allow you to manipulate the MessageBird SDK as a Symfony service.

### Installation
To install this bundle, run the command below and you will get the latest version from Packagist.

``` bash
composer require whatson-web/messagebird-bundle
```

Load required bundles in AppKernel.php:

``` php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // [...]
        new WH\Bundle\MessageBirdBundle\WHMessageBirdBundle()
    );
}
```

And set-up the required configuration

``` yaml
# app/config/config.yml
wh_message_bird:
    api_key: "xxxxxxxxxxxxxxxxx" # The MessageBird API key can be added as a symfony parameter
```

### Usage

Then, it is possible to use this service from inside a controller

``` php
$messageBirdClient = $this->get('wh.message_bird.client');
```

The MessageBirdClient php class extends the default MessageBird PHP SDK class, allowing you to do anything that this SDK can do.
Plus, it will automatically be authenticated with your MessageBird API Key, which you do not have to worry about at all.
