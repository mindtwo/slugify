# Slugify – Generate URL Safe Slugs Like WordPress
[![Total Downloads](https://poser.pugx.org/mindtwo/slugify/downloads.svg)](https://packagist.org/packages/mindtwo/slugify)
[![Latest Stable Version](https://poser.pugx.org/mindtwo/slugify/v/stable.svg)](https://packagist.org/packages/mindtwo/slugify)
[![Latest Unstable Version](https://poser.pugx.org/mindtwo/slugify/v/unstable.svg)](https://packagist.org/packages/mindtwo/slugify)
[![License](https://poser.pugx.org/mindtwo/slugify/license.svg)](https://packagist.org/packages/mindtwo/slugify)


Create WordPress like slugs in Laravel or any other php application without wordpress as a dependency.

The code to generate the slug is taken from WordPress 4.9.5 and battle tested on million websites.

## Install

* `composer require mindtwo/slugify`

## How to use with Laravel:
```
<?php 
echo slugify('Hello everyone');
```
or:
```
<?php 
echo app('slugify')->generate('Hello everyone');
```


## How to use without Laravel: 
```
<?php 
require 'vendor/autoload.php';
echo slugify('Hello everyone');
```
or:
```
<?php 
require 'vendor/autoload.php';
$slugger = new \mindtwo\Slugify\WordPressSlugger();
echo $slugger->generate('Hello everyone');
```