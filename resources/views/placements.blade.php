@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')
@section('content')
<section style="background-color:purple;margin-top:-90px">
    <br>
    <br>
    <br>
    
</section>

<section class="jumbotron">
    <h1 class="text-center">Stuent Placed</h1>
    <p class="text-center h6">list of students successfully placed in Job.</p>
</section>

<section class="container-fluid p-5">
    <div class="row"> 
        @for ($i = 1; $i < 18; $i++)
            <div class="col-md-3 col-6 mt-2" data-hash="photoshop-works">
                <img src="{{ asset('images/placements/placement-'.$i.'.jpeg') }}" alt="" class="img-fluid" height="200">
            </div>
        @endfor
        
    </div>
</section>

@endsection