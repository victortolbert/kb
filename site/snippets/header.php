<header 
  id="header" 
  class="py-2 px-16 flex justify-between bg-gray-900 text-white items-center <?= r(@$background, ' background:' . @$background) ?>" 
  role="banner"
  style="background-color: #304051"
>
  <?php snippet('header.branding') ?>
  <?php snippet('menu', ['background' => @$background ]) ?>
  <?php snippet('header.navbar') ?>
</header>

<header class="bg-gray-900 text-white sm:flex sm:justify-between sm:items-center sm:py-3 sm:px-4"
style="background-color: #49ad7c">
    <div class="flex items-center justify-between py-3 px-4 sm:p-0">
      <a href="http://grit.test" class="text-white">
       <!-- $site->title() --> 
       <!-- <img class="h-8" /> -->
      </a>
      <div class="sm:hidden">
        <button @click="isOpen = !isOpen" type="button" class="block text-gray-500 hover:text-white focus:text-white focus:outline-none">
          <menu-icon v-if="!isOpen" />
          <x-icon v-if="isOpen"/>
        </button>
      </div>
    </div>
    <div :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-2 pb-4 sm:flex sm:p-0">
      <!-- <a href="#" 
        class="block py-1 px-2 rounded text-white font-semibold hover:bg-gray-800"
      >Components</a>
      <a href="#" 
        class="block mt-1 sm:mt-0 sm:ml-2 py-1 px-2 rounded text-white font-semibold hover:bg-gray-800"
      >Snippets</a>
      <a href="#" 
        class="block mt-1 sm:mt-0 sm:ml-2 py-1 px-2 rounded text-white font-semibold hover:bg-gray-800"
      >Templates</a> -->
    </div>
  </header>