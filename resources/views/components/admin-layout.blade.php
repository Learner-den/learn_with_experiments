<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">

    <title>Admin</title>

    @vite('resources/css/app.css')

    @vite('resources/js/app.js')
</head>

<body>
    @if (Session::has('message'))
                                  <!-- Banner code starts here -->
    <!-- Let us define the banner, which will display a message defined in RoleController  -->
    <!-- and PrtmissionController. This message is related to successful, Create, Edit or Delete operations-->
     <!-- This example banner requires Tailwind CSS v2.0+ -->
      

     <div class="bg-green-500" x-data="{ bannerOpen: true }" x-show="bannerOpen">
  <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
    <div class="flex flex-wrap items-center justify-between">
      <div class="flex w-0 flex-1 items-center">
        
        <span class="flex rounded-lg bg-gray-500 p-2">
          <!-- Heroicon name: outline/megaphone (It is the 'Loud Speaker' icon displayed on banner) -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
          </svg>
        </span>

        <p class="ml-3 truncate font-medium text-yellow-300">
          <span class="md:hidden"> {{ Session::get('message') }} </span>
          <span class="hidden md:inline"> {{ Session::get('message') }} </span>
        </p>
      </div>
      <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
            <button type="button" @click="bannerOpen = false" 
                class="-mr-1 flex rounded-md p-2 hover:bg-indigo-500 focus:outline-black focus:ring-3 focus:ring-blue-800 sm:-mr-2">      
                <span class="sr-only">Dismiss</span>

                <!-- Heroicon name: outline/x (It is the icon 'X' displayed on banner) -->
                    <svg class="h-6 w-6 text-yellow-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
            </button>

      </div>
    </div>
  </div>
</div>

<!-- Banner code ends here -->

    @endif
    
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
        @include('layouts.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            @include('layouts.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>



