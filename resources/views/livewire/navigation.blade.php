@php
    $nav_links = [
      [
        'name' => 'Dashboard',
        'route' => route('home'),
        'active' => request()->routeIs('home')
      ],
      [
        'name' => 'Blog',
        'route' =>  route('posts.index'),
        'active' => request()->routeIs('posts.*')
      ],
      [
        'name' => 'Modules',
        'route' =>   route('modules.index'),
        'active' => request()->routeIs('modules.*')
      ],
      [
        'name' => 'About us',
        'route' => route('aboutus'),
        'active' => request()->routeIs('aboutus')
      ],
      [
        'name' => 'contact us',
        'route' => ('#'),
        'active' => false
      ],
    ];
@endphp

<nav class="bg-gray-800 shadow" x-data="{open: false}">
  <div class="container">
    <div class="shadow relative flex items-center justify-between h-16">

      <!-- Mobile menu button-->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
 
        <button x-on:click="open =true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Icon when menu is closed. -->
          <!--
            Heroicon name: menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon when menu is open. -->
          <!--
            Heroicon name: x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        
         <!--Logotipo-->
         {{-- 1 --}}
         {{-- <a href="/" class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
          <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
         </a> --}}
             <!--Logotipo-->
         <div class="flex-shrink-0 flex items-center">
          <a href="{{ route('home') }}">
              <x-jet-application-mark class="block h-9 w-auto" />
          </a>
         </div>




        <!--menu-->
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">

           <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
             
             {{-- @foreach ($nav_links as $nav_link)
                 
            
             <div class="py-6">
             <a href="{{$nav_link['route']}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" :active="$nav_link['active']">
             {{$nav_link['name']}}
             </a>
             </div> 
         

             @endforeach --}}

             @foreach ($nav_links as $nav_link)
                 
            
             
              <x-jet-nav-link href="{{$nav_link['route']}}" class=" text-white px-3 py-2 rounded-md text-sm font-bold" :active="$nav_link['active']">
              {{$nav_link['name']}}
              </x-jet-nav-link>
            
         
            
 
              @endforeach 

            
      
        
 


              {{-- <div class="py-6 relative" x-data="{open:false}">
                
              <a href="{{ route('posts.index') }}"   href="#" class="relative text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                 Blog
              </a>
              <div class="absolute bottom-0 left-5 cursor-pointer " x-on:click="open = true">
                ...
              </div>
              
              
            
             <div class="origin-top-right absolute right-2000 mt-6 w-56 rounded-md shadow-lg bg-white ring-1 ring-blue ring-opacity-5">
                
                <div>
                
                <h1 x-show="open" class=" rounded-md bg-auto bg-gray-300 animate-bounce w-58 h-6 ...">Categories</h1>
            
                </div>
                @foreach ($categories as $category)
                <div>
                <a x-show="open" x-on:click.away="open = false" href="{{route('posts.category',$category)}}" >
                  {{$category->name}}
                </a>
                </div>
              @endforeach
            </div>
            </div>   
            





                  
      
            



             















            <div class="py-6">
             <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              Modules
             </a>
             </div> 
            
             <div class="py-6">
             <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              About us
             </a>
             </div>

             <div class="py-6">
             <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              Contact us
             </a>

             </div> --}}
          </div>
        </div>
      </div>



      @auth
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        
       <!--Boton notificacion-->
      <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
          <span class="sr-only">View notifications</span>
          <!-- Heroicon name: bell -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="ml-3 relative" x-data="{open:false}">
          <div>
            <button x-on:click="open = true" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url}}" alt="">
            </button>
          </div>
          <!--
            Profile dropdown panel, show/hide based on dropdown state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="open" x-on:click.away="open = false"  class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
            <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
              Your Profile
            </a>
    


            <form method="POST" action="{{ route('logout') }}">
              @csrf
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"  onclick="event.preventDefault();
             this.closest('form').submit();">
            Sign out
            </a>
            </form>
          </div>
        </div>
      </div>
          @else
           <div>
           <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
             Login
           </a>

           <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
             Register
           </a>



           </div>


      @endauth


    </div>
  </div>

  

 
<!--menu movil cuando queda peque;o -->
 
  <div class="sm:hidden"  >
    <div class="px-2 pt-2 pb-3 space-y-1" >
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->


      
      {{-- <div class="py-6" x-data="{open:false}">
        <a   x-on:click="open = true"  class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
           Blog
      </a>
       

        
        <div class="origin-top-right absolute right-2000 mt-6 w-56 rounded-md shadow-lg bg-white ring-1 ring-blue ring-opacity-5">
          
          <div>
          
          <h1 x-show="open" class=" rounded-md bg-auto bg-gray-300 animate-bounce w-58 h-6 ...">Categories</h1>
      
          </div>
          @foreach ($categories as $category)
          <div>
          <a href="{{route('posts.category',$category)}}"  x-show="open" x-on:click.away="open = false" >
            {{$category->name}}
          </a>
          </div>
        @endforeach
        </div>
        </div>    --}}
        
       @foreach ($nav_links as $nav_link)
           
      
       <a  href="{{ $nav_link['route'] }}"  class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium" :active="$nav_link['active']">
        {{$nav_link['name']}}
       </a>

       @endforeach
      
      
       {{-- <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

       <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Modules</a>
       <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About us</a>
       <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact us</a> --}}
    </div>
  </div>
</nav>
