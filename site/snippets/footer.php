<footer 
  id="site-footer" 
  class="<?= r(@$background, ' background:' . @$background) ?> p-4 flex justify-between bg-gray-200"
>
  <?= $site->info() ?>
  <?php echo $site->info(); ?>

  <ul>
    <li>Tailwind</li>
    <li>assets: <?= $kirby->url('assets') ?></li>
    <li>version: <?= kirby()->version() ?></li>
    <li>index: <?= $kirby->url('index') ?></li>
    <li>debug: <?= $kirby->option('debug') ?></li>
  </ul>
</footer>
