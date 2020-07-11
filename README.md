This [Yii Framework] extension encapsulates [Material Kit] components
and plugins in terms of Yii widgets, and thus makes using Bootstrap components/plugins
in Yii applications extremely easy.
[Material Kit] is a Free Bootstrap 4 UI Kit with a fresh, new design inspired by Google's material design. 

[Yii Framework]:        http://www.yiiframework.com/
[Material Kit]:  https://github.com/creativetimofficial/material-kit

### Requirements

The minimum requirement by yii2-widget-ag-grid that your Web server supports PHP 7.4.

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Run

```
$ php composer.phar require schmasterz/yii-material-kit "master@dev"
```

### Usage

```php
<?= Schmasterz\Yii\MaterialKit\Progress::widget()->percent('60')->label('test'); ?>
```
You can also use yii-material-kit in the CSS, Javascript layer of your application. 
To achieve this, you need to include agGrid as a dependency of your Asset file
```php
public $depends = [
    'Schmasterz\Yii\MaterialKit\Assets\MaterialAsset'
];
```
or add it to your view file
```php
Schmasterz\Yii\MaterialKit\Assets\MaterialAsset::register($this);
```
