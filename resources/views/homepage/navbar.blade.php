<style>
.dropbtn {
  background-color: transparent;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: -17px;
  background-color: #f9f9f9;
  min-width: 230px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: transparent;
}
</style>

<nav class="bg-slate-700 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <div class="flex justify-start">
      <!-- Logo -->
      <a href="#home" class="flex items-center mr-3">
        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Flowbite</span>
      </a>
      <!-- End Logo -->

      @auth
        <!-- Dropdown Toko -->
        <div class="dropdown">
          <button class="dropbtn flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-slate-100 dark:hover:text-blue-500 md:mr-0 focus:ring-2 hover:ring-2 hover:ring-white focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white">
            <span class="sr-only">Open user menu</span>
            <img class="mr-2 w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="user photo">
            Bonnie Green
            <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>

          <div class="dropdown-content">
            <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
              <div class="font-medium ">Pro User</div>
              <div class="truncate">name@flowbite.com</div>
            </div>
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
              </li>
            </ul>
            <div class="py-1">
              <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </div>
          </div>
        </div>
        <!-- End Dropdown Toko -->  
      @endauth
      
    </div>

    <!-- Search -->
    <div class="grow ml-2 md:mx-2 hover:shadow-2xl">
      <form>
        <div class="flex">
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-l-lg rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="" required>
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                  <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
      </form>
    </div>
    <!-- End Search -->

    <div class="flex justify-end grow md:grow-0 justify-between mt-2 md:mt-0">
      @guest
      <div class="self-center mx-0 md:mx-3">
        <a href="{{ route('login') }}" type="button" class="py-2 w-full text-sm font-medium text-center text-white bg-blue-700 rounded hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Login
        </a><br>
        <p class="text-xs text-white leading-normal">New customer? 
          <span>
            <a class="text-cyan-300 hover:underline hover:text-cyan-400" href="{{ route('register') }}">
              Sign up here
            </a>
          </span>
        </p>
      </div>
      @endguest

      @auth
      <!-- Dropdown Profile -->
      <div class="dropdown">
        <button class="dropbtn flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-slate-100 dark:hover:text-blue-500 md:mr-0 focus:ring-2 hover:ring-2 hover:ring-white focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white">
          <span class="sr-only">Open user menu</span>
          <img class="mr-2 w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="user photo">
          Bonnie Green
          <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>

        <div class="dropdown-content">
          <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
            <div class="font-medium ">Pro User</div>
            <div class="truncate">name@flowbite.com</div>
          </div>
          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
              <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
          </ul>
          <div class="py-1">
            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </div>
        </div>
      </div>
      <!-- End Dropdown Profile -->
      @endauth

      <div class="place-self-center ml-4">
        <a href="" type="button" class="text-white text-2xl">
          <i class="fa-solid fa-cart-shopping"></i>
        </a>
      </div>
    </div>
  </div>
</nav>