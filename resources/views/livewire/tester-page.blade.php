<div class="w-full h-full">
  <section class="bg-center bg-no-repeat bg-cover h-full bg-gray-700 bg-blend-multiply" style="background-image: url('{{ URL::to('/') }}/images/Carousel1.jpg');">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We invest in the world’s potential</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>  
        </div>
    </div>
  </section>

  
  <!-- Popular Menu -->
  <section class="py-12 ">
    <div class="max-w-xl mx-auto">
      <div class="text-center ">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl dark:text-gray-200 font-extrabold font-customFont"> View Our<span class="text-[#D97707]"> Menu
            </span> </h1>
          <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-[#D97707]/45">
            </div>
            <div class="flex-1 h-2 bg-[#D97707]/75">
            </div>
            <div class="flex-1 h-2 bg-[#D97707]/100">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="justify-center max-w-full px-8 md:px-32 py-4 mx-auto lg:py-0" >
      <div class="md:grid grid-cols-3 gap-4 lg:grid-cols-3 md:grid-cols-2">
        @foreach ($category as $category)
        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3 rounded-lg" wire:key='{{$category->id}}'>
          <div class="border border-gray-300 rounded-lg dark:border-gray-700">
            <div class="relative bg-gray-200 rounded-t-lg ">
              <a href="/products/{{$category->slug}}" class="">
                <img src="{{ url('storage', $category->image[0]) }}" alt="{{$category->name}}" class="object-cover w-full h-56 mx-auto ">
              </a>
            </div>
            <div class="p-3 ">
              <div class="flex items-center justify-between gap-2 mb-2">
                <h3 class="text-xl font-medium dark:text-gray-400">
                  {{$category->name}}
                </h3>
              </div>
            </div>
            <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">
              <a wire:click.prevent='addToCart({{$product->id}})' href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-[#D97707] dark:hover:text-red-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                </svg>
                <span wire:loading.remove wire:target='addToCart({{$product->id}})'>Add to Cart</span>
                <span wire:loading wire:target='addToCart({{$product->id}})'>Adding....</span>
              </a>
            </div>
          </div>
        </div>
        @endforeach 
      </div>
    </div>
  </section>
   <!-- Popular Menu Section End -->

   <!-- Categories Section End -->
   <div class="py-20">
      <div class="max-w-xl mx-auto">
        <div class="text-center ">
          <div class="relative flex flex-col items-center">
            <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-blue-500"> Categories
              </span> </h1>
            <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
              <div class="flex-1 h-2 bg-blue-200">
              </div>
              <div class="flex-1 h-2 bg-blue-400">
              </div>
              <div class="flex-1 h-2 bg-blue-600">
              </div>
            </div>
          </div>
          <p class="mb-12 text-base text-center text-gray-500">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
            Pariatur
            numquam, odio quod nobis ipsum ex cupiditate?
          </p>
        </div>
      </div>

      <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

          <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="https://cdn.bajajelectronics.com/product/b002c02c-c379-49f8-b2a6-bd2e56d0e23a" alt="Image Description">
                  <div class="ms-3">
                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                      Laptops
                    </h3>
                  </div>
                </div>
                <div class="ps-3">
                  <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </div>
              </div>
            </div>
          </a>

          <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="https://static.toiimg.com/thumb/msid-86223197,width-400,resizemode-4/86223197.jpg" alt="Image Description">
                  <div class="ms-3">
                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                      Smartphones
                    </h3>
                  </div>
                </div>
                <div class="ps-3">
                  <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </div>
              </div>
            </div>
          </a>

          <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/watch-card-40-ultra2-202309_GEO_IN_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1693611639854" alt="Image Description">
                  <div class="ms-3">
                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                      Smartwatches
                    </h3>
                  </div>
                </div>
                <div class="ps-3">
                  <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </div>
              </div>
            </div>
          </a>

          <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
            <div class="p-4 md:p-5">
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1632893007.55719480!400x400!85.png" alt="Image Description">
                  <div class="ms-3">
                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                      Television
                    </h3>
                  </div>
                </div>
                <div class="ps-3">
                  <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </div>
              </div>
            </div>
          </a>

        </div>
      </div>

    </div>
   <!-- Categories Section End -->

   <div class="w-full px-9 py-8">
    <div class="rounded-lg border-8 border-[#254752]">
        <div class="md:grid grid-cols-2">
            <div class="flex flex-col items-center justify-center w-full h-full col-span-1 bg-[#CF2b24] py-10 px-4 md:py-0 md:px-0">
                <h1 class="text-white font-bold text-3xl md:text-5xl font-customFont"> Categories </h1>
                <p class="text-[#FEF9F2] pt-8 pb-8 text-md md:text-lg">Make Your Day Better with Real Food Fast!</p>   
                <div class="w-36 border-2 border-[#254752] text-center p-2 rounded-lg text-white">Restaurant</div>             
            </div>
            <div class="col-span-1 max-h-[500px]">
                <img src="{{ URL::to('/') }}/images/Carousel1.jpg" class="h-full w-full">
            </div>
        </div>
    </div>
   </div>
   <div class="w-full px-9 pb-8">
    <div class="rounded-lg border-8 border-[#254752]">
        <div class="md:grid grid-cols-2">
            <div class="col-span-1 max-h-[500px]">
                <img src="{{ URL::to('/') }}/images/Carousel1.jpg" class="h-full w-full">
            </div>
            <div class="flex flex-col items-center justify-center w-full h-full col-span-1 bg-[#82AD86] py-10 px-4 md:py-0 md:px-0">
                <h1 class="text-white font-bold text-3xl md:text-5xl font-customFont"> Products </h1>
                <p class="text-[#FEF9F2] pt-8 pb-8 text-md md:text-lg">Make Your Day Better with Real Food Fast!</p>   
                <div class="w-36 border-2 border-[#254752] text-center p-2 rounded-lg text-white">Restaurant</div>             
            </div>
        </div>
    </div>
   </div>
</div>
