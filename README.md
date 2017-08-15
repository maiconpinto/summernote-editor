# Summernote Editor plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require maiconpinto/summernote-editor
```

### Enable Plugin

```php
// config/bootstrap.php

Plugin::load('SummernoteEditor', ['routes' => true]);
```

## How to use

```php
// src/Template/Example/add.ctp OR
// src/Template/Example/edit.ctp

    //echo $this->Form->create($example)
    // [...]
    //echo $this->Form->input('description', ['class' => 'summernote']);
    // OR
    //echo $this->Form->control('description', ['class' => 'summernote']);
    // [...]
    //$this->Form->end();

    echo $this->element('SummernoteEditor.summernote-editor');
```

## If you already require jquery and bootstrap

```php
echo $this->element('SummernoteEditor.summernote-editor', ['jquery' => false, 'bootstrap' => false]);
```

## If you want use minimum layout (to test)

```php
echo $this->element('SummernoteEditor.summernote-editor', ['layout' => true]);
```
