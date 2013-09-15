MmWhoisBundle
=======================

[![Build Status](https://secure.travis-ci.org/maastermedia/MmWhoisBundle.png?branch=master)](http://travis-ci.org/maastermedia/MmWhoisBundle)

Symfony2 whois queries bundle

## Step 1: Installation

Add MmWhoisBundle in your composer.json:

```json
{
    "require": {
        "maastermedia/whois-bundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update maastermedia/whois-bundle
```

or use `require`

```bash
$ php composer.phar require maastermedia/whois-bundle
```

## Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Mm\WhoisBundle\MmWhoisBundle(),
    );
}
```

## Step 3: Configuration

Put following into `app/config/config.yml` to enable default configuration of the bundle:

```yaml
mm_whois: ~
```

