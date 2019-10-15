<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if ($page->isHomePage()): ?>
      <title><?= $site->title() ?></title>
    <?php else: ?>
      <title><?= $site->title() . ' – ' . $page->title() ?></title>
    <?php endif ?>

    <?= css('@auto', ['defer' => true]) ?>
    <?= css($page->files()->filterBy('extension', 'css')->pluck('url')) ?>
    <?= js('@auto', ['defer' => true]) ?>
    <?= js($page->files()->filterBy('extension', 'js')->pluck('url'), ['defer' => true]) ?>
</head>
<body data-template="<?= $page->template() ?>" class="overflow-y-scroll">

<div id="app" class="h-screen flex flex-col">
<?php snippet('header', ['background' => @$background ]) ?>
<main id="maincontent" class="flex-1 py-4 px-16">