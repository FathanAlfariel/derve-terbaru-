@extends('layouts.main')
@section('content')
    <div class="mb-5">
        <!-- Foto Restaurant -->
        <div class="h-28 w-full md:h-52">
            <img class="h-full w-full" src="https://flowbite.com/docs/images/examples/image-1@2x.jpg" alt="image description">
        </div>
        <!-- End Foto Restaurant -->

         
        <!-- Menu Tabs Restaurant -->
        <div class="bg-slate-700 mb-4 px-5 border-b border-gray-200 dark:border-gray-700">
            
            <div class="flex justify-between">
                <!-- Profile Restaurant -->
                <div class="profile flex items-center space-x-4 pb-1">
                    <img class="w-11 h-11 md:w-16 md:h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                    <div class="font-medium dark:text-white">
                        <div class="text-white text-base md:text-xl">Jese yjLeos</div>
                        <div class="text-sm md:text-base leading-5 text-gray-500 dark:text-gray-400">Joined in August 2014</div>
                    </div>
                </div>
                <!-- End Profile Restaurant -->

                <!-- Restaurant Follow Us On -->
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-base font-medium text-white sm:text-center dark:text-gray-400 pr-4">Follow us on</span>
                    <div class="flex mt-4 space-x-3 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img class="w-7 h-7" src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img class="w-7 h-7" src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/>
                            <span class="sr-only">Instagram page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img class="w-7 h-7" src="https://img.icons8.com/fluency/48/000000/twitter.png"/>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img class="w-7 h-7" src="https://img.icons8.com/color/48/000000/tiktok--v1.png"/>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img class="w-7 h-7" src="https://img.icons8.com/color/48/000000/youtube-play.png"/>
                            <span class="sr-only">Dribbbel account</span>
                        </a>
                    </div>
                </div>
                <!-- End Restaurant Follow Us On -->
            </div>

            <ul id="tabs" class="inline-flex pt-2 w-full">
                <li style="width: 50%;" class="bg-slate-800 px-4 text-gray-200 hover:text-white font-semibold py-2 rounded-t border-t border-r border-l -mb-px">
                    <a class="flex justify-center" id="default-tab" href="#first">Produk</a>
                </li>
                <li style="width: 50%;" class="px-4 text-gray-200 hover:text-white font-semibold py-2 rounded-t">
                    <a class="flex justify-center" href="#second">Meja</a>
                </li>
            </ul>
        </div>
        <!-- End Menu Tabs Restaurant -->
        
        <!-- Content Menu Tabs Restaurant -->
        <div id="tab-contents">
            <div id="first" class="p-4 text-white">
                @include('homepage.produk')
            </div>
            <div id="second" class="hidden p-4 text-white">
                @include('homepage.meja')
            </div>
        </div>
        <!-- End Content Menu Tabs Restaurant -->

    </div>

<script>
    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

    console.log(tabTogglers);

    tabTogglers.forEach(function(toggler) {
    toggler.addEventListener("click", function(e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contents");

        for (let i = 0; i < tabContents.children.length; i++) {
        
        tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-slate-800");  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
            continue;
        }
        tabContents.children[i].classList.add("hidden");
        
        }
        e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-slate-800");
    });
    });
</script>
@endsection