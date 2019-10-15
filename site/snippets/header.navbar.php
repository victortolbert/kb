<nav id="header-navbar" class="menu">
  <?php foreach ($site->children()->listed() as $item): ?>
  <?= $item->title()->link() ?>
  <?php endforeach ?>
</nav>
