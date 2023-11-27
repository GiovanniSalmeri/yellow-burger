Burger 0.8.16
=================
Hamburger menu.

<p align="center"><img src="SCREENSHOT.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-burger/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to show a hambuger menu

The hambuger menu is created by the layout `system/layouts/burger.html`. In order to use it you can do either of the following:

1. Rename it to `system/layouts/navigation.html`
2. In `system/layouts/header.html` change `$this->yellow->layout("navigation")` to `$this->yellow->layout("burger")`

## How to make transit pages

If a page contains subpages (e.g. `/page/subpage1/`, `/page/subpage2/` etc.), it is a good idea not to put any relevant content in it and to make it not selectable in menu, since it is often overlooked by users. To make such a "transit" page, put at its top the `Layout: transit` setting.

## Examples

A header layout that uses a hamburger menu:

```
<!DOCTYPE html>
<html lang="<?php echo $this->yellow->page->getHtml("language") ?>">
<head>
<title><?php echo $this->yellow->page->getHtml("titleHeader") ?></title>
<meta charset="utf-8" />
<meta name="description" content="<?php echo $this->yellow->page->getHtml("description") ?>" />
<meta name="author" content="<?php echo $this->yellow->page->getHtml("author") ?>" />
<meta name="generator" content="Datenstrom Yellow" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php echo $this->yellow->page->getExtraHtml("header") ?>
</head>
<body>
<div class="<?php echo "page layout-".$this->yellow->page->getHtml("layout") ?>">
<div class="header" role="banner">
<div class="sitename">
<h1><a href="<?php echo $this->yellow->page->getBase(true)."/" ?>"><i class="sitename-logo"></i><?php echo $this->yellow->page->getHtml("sitename") ?></a></h1>
<?php echo $this->yellow->page->getPage("header")->getContentHtml() ?>
</div>
<div class="sitename-banner"></div>
<?php $this->yellow->layout("burger") ?>
</div>
```

A transit page with no content:

```
---
Title: Members' pages
Layout: transit
---
```

## Acknowledgements

This extension uses [mmenu-light](https://github.com/FrDH/mmenu-light) by Fred Heusschen, licensed under the [CC-BY-4.0](http://creativecommons.org/licenses/by/4.0/) license. Thank you for the good work.

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
