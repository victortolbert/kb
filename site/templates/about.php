<?php snippet('html-top') ?>

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>

  <div class="layout">

    <aside>
      <section>
        <h2>Address</h2>
        <div class="text">
          <?= $page->address()->kt() ?>
        </div>
      </section>

      <section>
        <h2>Email</h2>
        <div class="text">
          <?= html::email($page->email()) ?>
        </div>
      </section>

      <section>
        <h2>Phone</h2>
        <div class="text">
          <?= html::tel($page->phone()) ?>
        </div>
      </section>

      <section>
        <h2>On the web</h2>
        <div class="text">
          <ul>
            <?php foreach ($page->social()->toStructure() as $social): ?>
            <li><?= html::a($social->url(), $social->platform()) ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      </section>

    </aside>

    <div class="text">
      <!-- $page->text()->kt() -->
      <!-- $page->text()->kirbytext() -->
      <?= $page->company() ?>
      <h1>Team Members</h1>
      <ul>
        <?php foreach ($page->team()->toStructure() as $member): ?>
        <li>
          <a href="<?= $member->url() ?>">
            <?= $member->name() ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</main>

<?php snippet('html-bottom') ?>
