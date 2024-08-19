<nav class="bg-white dark:bg-gray-900 fixed w-full z-50 sticky top-0 start-0 border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a wire:navigate class="flex-none text-xl font-semibold dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/" aria-label="Brand">The Crabbys</a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a wire:navigate href="/login" class="text-white bg-[#D97707] hover:bg-[#D97707]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:hover:text-[#D97707] md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a wire:navigate href="/" class="block py-2 px-3 {{ request()->is('/')?'text-[#D97707]':' text-gray-500' }} rounded md:hover:text-[#D97707] md:bg-transparent md:p-0 " aria-current="page">Home</a>
        </li>
        <li>
          <a wire:navigate href="/categories" class="block py-2 px-3 {{ request()->is('categories')?'text-[#D97707]':' text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#D97707] md:p-0">Location</a>
        </li>
        <li>
          <a wire:navigate href="/products" class="block py-2 px-3 {{ request()->is('products')?'text-[#D97707]':' text-gray-500' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#D97707] md:p-0">Menus</a>
        </li>
        <li>
          <a wire:navigate href="/cart" class="block py-2 px-3 {{ request()->is('cart')?'text-[#D97707]':' text-gray-500' }} flex rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#D97707] md:p-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
            <span class="mr-1">Cart</span> <span class="py-0.5 px-1.5 rounded-full text-xs font-medium bg-[#D97707]/25 border border-[#D97707]/40 text-[#D97707]">{{ $total_count }}</span>
          </a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  