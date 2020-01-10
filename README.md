# worteks/humhub-auth-oidc

This extension adds [OIDC](https://openid.net/specs/openid-connect-core-1_0.html) authentication support for [HumHub](https://github.com/humhub/humhub).

Based on [yii2auth-oidc](http://github.com/Worteks/yii2auth-oidc)

[![Latest Stable Version](https://poser.pugx.org/worteks/humhub-auth-oidc/v/stable)](https://packagist.org/packages/worteks/humhub-auth-oidc)
[![Total Downloads](https://poser.pugx.org/worteks/humhub-auth-oidc/downloads)](https://packagist.org/packages/worteks/humhub-auth-oidc)
[![Monthly Downloads](https://poser.pugx.org/worteks/humhub-auth-oidc/d/monthly)](https://packagist.org/packages/worteks/humhub-auth-oidc)
[![License](https://poser.pugx.org/worteks/humhub-auth-oidc/license)](https://packagist.org/packages/worteks/humhub-auth-oidc)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require worteks/humhub-auth-oidc
```

or add

```json
"worteks/humhub-auth-oidc": "~0.3"
```

to the `require` section of your composer.json.

## Usage

Set up an OpenID Provider (OP) and configure your Yii2 app as a Relying Party (RP) on your Authentication Server.

Example application configuration:

```php
'components' => [
  'authClientCollection' => [
    'clients' => [
      // ...
      'oidc' => [
        'class' => 'worteks\humhub\authclient\OIDC',
        'domain' => 'https://auth.example.com',
        'clientId' => 'myClientId',
        'clientSecret' => 'myClientSecret',
        'defaultTitle' => 'auth.example.com',
        'cssIcon' => 'fa fa-sign-in',
      ],
    ],
    // ...
]
```

Check [yii2auth-oidc](http://github.com/Worteks/yii2auth-oidc) for details on available configuration options.
