# yii2-uuid

Component for generating UUIDs with [ramsey/uuid](https://github.com/ramsey/uuid)


## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

``` php composer.phar require ollieday/yii2-uuid "*" ```

or add

```javascript
"ollieday/yii2-uuid": "*"
```

to the `require` section of your `composer.json` file.


## Configuration

Add the component to your config file:

```php
'components' => [  
	'uuid' => [
		'class' => 'ollieday\uuid\Uuid',
	],
    // ...
]
```


## Usage

```php
// Generate a version 1 (time-based) UUID object
$uuid1 = Yii::$app->uuid->uuid1();
echo $uuid1->toString() . "\n"; // i.e. e4eaaaf2-d142-11e1-b3e4-080027620cdd

// Generate a version 3 (name-based and hashed with MD5) UUID object
$uuid3 = Yii::$app->uuid->uuid3(\Ramsey\Uuid\Uuid::NAMESPACE_DNS, 'php.net');
echo $uuid3->toString() . "\n"; // i.e. 11a38b9a-b3da-360f-9353-a5a725514269

// Generate a version 4 (random) UUID object
$uuid4 = Yii::$app->uuid->uuid4();
echo $uuid4->toString() . "\n"; // i.e. 25769c6c-d34d-4bfe-ba98-e0ee856f3e7a

// Generate a version 5 (name-based and hashed with SHA1) UUID object
$uuid5 = Yii::$app->uuid->uuid5(\Ramsey\Uuid\Uuid::NAMESPACE_DNS, 'php.net');
echo $uuid5->toString() . "\n"; // i.e. c4a760a8-dbcf-5254-a0d9-6a4474bd1b62
```
