<nav class="menu<?= r(!empty($background), ' background:' . $background) ?>">

<<?php snippet('navbar-toggle') ?>

<div class="menu-container" id="menu">
  <ul class="menu-items menu-main">
    <?php foreach ($pages->listed() as $item): ?>
    <li class="menu-item<?= r($hasSubmenu = $item->submenu()->isTrue(), ' has-dropdown') ?>">
      <a href="<?= $item->url() ?>"<?= r($item->isOpen(), ' aria-current="' . r($item->isActive(), 'page', 'true') . '"') ?>>
        <?= $item->menuTitle()->or($item->title()) ?>
      </a>

      <?php if ($hasSubmenu): ?>
      <ul class="menu-dropdown">
        <?php foreach ($item->children()->listed() as $subitem): ?>
        <li>
          <a href="<?= $subitem->url() ?>"<?= r($subitem->isActive(), ' aria-current="page"') ?>>
            <?= $subitem->menuTitle()->or($subitem->title()) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
</div>

</nav>
