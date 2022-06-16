<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./header_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <title>Document</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="header__menu--phone">
          <i class="fa-solid fa-bars"></i>
        </div>
        <div class="header__logo">
          <a href="/"><img class="header__logo-img" src="./images/logo-coolmate.png" alt="Logo Coolmate"></a>
        </div>
        <div class="header__menu">
          <ul class="header__menu-list">
            <li class="header__menu-item header__menu-item--focus">
              <a class="header__menu-item-link" href="#">Outlet</a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-item-link" href="#">
              Đồ lót định kỳ</a>
            </li>
            <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
              class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
              <a href="sanpham.php" style="font-weight: bold;">Sản phẩm</a>
              <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Áo
                    Nam</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    style="color: gray">Áo thun</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    style="color: gray">Áo sơ mi</a>
                </li>
              </ul>
              <div class="py-1">
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Quần
                  Nam</a>
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      style="color: gray">Quần short</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      style="color: gray">Quần Jeans</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      style="color: gray">Quần Tây</a>
                  </li>
                </ul>
              </div>

          </li>
            <li class="header__menu-item">
              <a class="header__menu-item-link" href="#">
              In áo công ty</a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-item-link" href="./introduce.html">
              Về Coolmate</a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-item-link" href="#">
              Chọn Size</a>
            </li>
          </ul>
        </div>
        <div class="header__actions">
          <div class="header__actions-item">
            <i class="headers_actions-item-icon fa-solid fa-magnifying-glass"></i>
          </div>
          <div class="header__actions-item">
            <i class="headers_actions-item-icon fa-solid fa-user"></i>
          </div>
          <div class="header__actions-item">
            <i class="headers_actions-item-icon fa-solid fa-bag-shopping"></i>
          </div>
        </div>
      </header>
      <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>