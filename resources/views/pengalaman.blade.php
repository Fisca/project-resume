 <!-- Experience-->
 @extends('layouts.layout')
 @section('content')
     
 <section class="resume-section" id="experience">
    <div class="resume-section-content">
        <h2 class="mb-5">Experience</h2>
        @foreach ($laman as $lam)
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">{{$lam->job}}</h3>
                    <div class="subheading mb-3">{{$lam->company}}</div>
                    <p>{{$lam->description}}</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">{{$lam->start}} until {{$lam->end}}</span></div>
            </div>   
    @endforeach
    </div>
</section>
<hr class="m-0"/>
@endsection
