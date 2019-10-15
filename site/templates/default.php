<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Knowledge base</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* apply a natural box layout model to all elements, but allowing components to change */
    html {
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }
    body {
      margin: 0;
      font-family: Helvetica, sans-serif;
      background-color: #f4f4f4;
    }

    a {
      color: #000;
    }

    /* header */

    .header {
      background-color: #fff;
      box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
      position: fixed;
      width: 100%;
      z-index: 3;
    }

    .header ul {
      margin: 0;
      padding: 0;
      list-style: none;
      overflow: hidden;
      background-color: #fff;
    }

    .header li a {
      display: block;
      padding: 20px 20px;
      border-right: 1px solid #f4f4f4;
      text-decoration: none;
    }

    .header li a:hover,
    .header .menu-btn:hover {
      background-color: #f4f4f4;
    }

    .header .logo {
      display: block;
      float: left;
      font-size: 2em;
      padding: 10px 20px;
      text-decoration: none;
    }

    /* menu */

    .header .menu {
      clear: both;
      max-height: 0;
      transition: max-height .2s ease-out;
    }

    /* menu icon */

    .header .menu-icon {
      cursor: pointer;
      display: inline-block;
      float: right;
      padding: 28px 20px;
      position: relative;
      user-select: none;
    }

    .header .menu-icon .navicon {
      background: #333;
      display: block;
      height: 2px;
      position: relative;
      transition: background .2s ease-out;
      width: 18px;
    }

    .header .menu-icon .navicon:before,
    .header .menu-icon .navicon:after {
      background: #333;
      content: '';
      display: block;
      height: 100%;
      position: absolute;
      transition: all .2s ease-out;
      width: 100%;
    }

    .header .menu-icon .navicon:before {
      top: 5px;
    }

    .header .menu-icon .navicon:after {
      top: -5px;
    }

    /* menu btn */

    .header .menu-btn {
      display: none;
    }

    .header .menu-btn:checked ~ .menu {
      max-height: 240px;
    }

    .header .menu-btn:checked ~ .menu-icon .navicon {
      background: transparent;
    }

    .header .menu-btn:checked ~ .menu-icon .navicon:before {
      transform: rotate(-45deg);
    }

    .header .menu-btn:checked ~ .menu-icon .navicon:after {
      transform: rotate(45deg);
    }

    .header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
    .header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
      top: 0;
    }

    /* 48em = 768px */

    @media (min-width: 48em) {
      .header li {
        float: left;
      }
      .header li a {
        padding: 20px 30px;
      }
      .header .menu {
        clear: none;
        float: right;
        max-height: none;
      }
      .header .menu-icon {
        display: none;
      }
    }

    .cms-content {
      margin: 2rem;
    }
    .cms-content h1 {
      font-size: 2rem;
      font-weight: 700;
    }

    .cms-content kbd {
      border: 1px solid #aaa;
      border-radius: 0.2em;
      box-shadow: 0.1em 0.1em 0.2em rgba(0,0,0,0.1);
      background-color: #f9f9f9;
      background-image: linear-gradient(to bottom, #eee, #f9f9f9, #eee);
      color: #000;
      padding: 0.1em 0.3em;
      font-family: inherit;
      font-size: 0.85em;
      white-space: nowrap;
    }
</style>
</head>
<body data-template="<?= $page->template() ?>" >
<!-- <header class="header">
  <a href="" class="logo">Demo</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="#work">Our Work</a></li>
    <li"><a href="#about">About</a></li>
    <li><a href="#careers">Careers</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</header> -->

<div class="cms-content w-full border border-green-500">
  <h1><?= $page->title() ?></h1>

  <?= $page->text()->kirbytext() ?>
  <input
                                        id="goal-amount"
                                        value="0"
                                        step="1"
                                        min="0"
                                        type="number"
                                        class="input font-bold w-16 sm:w-32"
                                    >

  <button aria-label="Close Account Info Modal Box">&times;</button>
  <div class="flex flex-col w-1/4">

  <ul class="flex border-red-500">
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        A 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        2 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        3 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        4 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        5 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        6 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        7 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        8 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        9 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        10
      </span>
       <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        J 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        Q 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        K 
      </span>
      <span class="text-red-800">&diams;</span>
    </li>
  </ul>
</div>
<div class="flex flex-col w-1/4">
  <ul class="flex">
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        A 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        2 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        3 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        4 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        5 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        6 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        7 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        8 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        9 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        10
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        J 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        Q 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        K 
      </span>
      <span class="text-red-800">&hearts;</span>
    </li>
  </ul>
</div>
<div class="flex flex-col w-1/4">
  <ul class="flex">
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        A 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        2 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        3 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        4 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        5 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        6 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        7 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        8 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        9 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        10
      </span>
       <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        J 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        Q 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        K 
      </span>
      <span class="text-gray-800">&clubs;</span>
    </li>
  </ul>
</div>
<div class="flex flex-col w-1/4">
  <ul class="flex">
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        A 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        2 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        3 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li> 
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        4 
      </span>
      <span class="text-gray-800">&spades;</span>
    </li> 
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        5 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li> 
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        6 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        7 
      </span>
      <span class="text-gray-800">&spades;</span>
    </li> 
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        8 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li> 
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        9 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        10
      </span>
       <span class="text-gray-800">&spades;</span> 
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        J 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li>
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        Q
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li> 
    <li class="block w-1/12 mx-4 py-2 px-8 flex items-center justify-center border">
      <span>
        K 
      </span>
      <span class="text-gray-800">&spades;</span> 
    </li>
  </ul>
</div>

</div>

</body>
</html>


