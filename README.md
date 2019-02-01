# Laravel Encrypt Manager
This component allows you encrypt data before insert in database, and auto decrypt when you get the attribute

## Installation

1.  With Composer : download files
```
composer require jetiradoro/laravel-encrypt-model
```

2. In your model you need use **Encryptable Trait** and define **$encryptable** array with fields which you want encrypt.

* Example
```
class User extends Model
{
    use Encryptable;

    protected $encryptable = [
        'cc',
        'ss',
        'phone',
    ];
}
...
```

> This component has been inspired in https://laracasts.com/discuss/channels/laravel/encrypting-model-data article