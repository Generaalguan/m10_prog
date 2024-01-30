<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-nav-link>
      <x-nav-link :href="route('projecten.index')" :active="request()->routeIs('dashboard')">
        {{ __('Projecten') }}
      </x-nav-link>

    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          {{ __("Projecten") }}
        </div>
      </div>
    </div>
  </div>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

        <button class="p-6  dark:text-gray-100">
          <a href="{{route('projecten.create')}}">Maak nieuwe project aan</a>
        </button>

      </div>
    </div>
  </div>



  <div class="projecten_wrapper dark:bg-gray-800">

    @foreach($projecten as $project)
    <article class="projecten_project">
      <img src="{{$project->img}}" alt="{{$project->alt}}" class="projecten_img">
      <div class="projecten_text">
        <h4 class=" dark:text-gray-100">{{$project->titel}}</h4>
        <h5 class=" dark:text-gray-100">{{$project->description}}</h5>
      </div>
      @guest
      <a href="{{route('projecten.show', $project)}}" class="projecten_link">
        <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
      </a>
      @endguest
      @auth 
        
        <form class="projecten_link" action="{{route('projecten.destroy', ['projecten' => $project])}}" method= "POST">
          @method('DELETE')
          @csrf
          <button class="projecten_button" type="Submit">Verwijder</button>
          <a href="{{route('projecten.edit', ['projecten' => $project])}}" class="projecten_link">edit</a>
        </form>

      </button>


      @endauth
    </article>
    @endforeach
  </div>

</x-app-layout>