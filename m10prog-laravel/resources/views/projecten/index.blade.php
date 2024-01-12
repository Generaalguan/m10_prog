@extends( 'layouts.master' )
@section('content')
<section class="projecten">
  <h1 class="description_titel">Bijdragen aan een toekomstbestendige stad</h1>
  <div class="projecten_wrapper">


    @foreach($projecten as $project)
    <article class="projecten_project">
      <img src="{{$project->img}}" alt="{{$project->alt}}" class="projecten_img">
      <div class="projecten_text">
        <h4 class="projecten_titel">{{$project->titel}}</h4>
        <h5 class="projecten_description">{{$project->description}}</h5>
      </div>
      <a href="{{route('projecten.show', $project)}}" class="projecten_link">
        <button class="projecten_button">Lees meer <i class="fa-solid fa-arrow-right projecten_icon"></i></button>
      </a>
    </article>
    @endforeach


  </div>
</section>
</div>


@endsection