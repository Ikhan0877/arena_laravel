@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')

@section ('content')
<div class="" style="height:100px; width:100%;margin-top:-100px;background:purple">

</div>
<div class="container-fluid bg-light" style="height:100px; width:100%;margin:20px 0;display:flex;align-items:center;">
    <h1 class="">Our Blog</h1>
</div>
<section class="bg-light p-5">
    <div class="container ">
        <div class="row">
            @foreach($data as $item)
            <div class="col-md-3  mt-2">
                <div style="background-image:url('{{$item['jetpack_featured_media_url']}}');height:300px; width:100%;background-size:cover;">

                </div>
                <p class="h5 p-2"> {{$item['title']['rendered']}}</p>
                <div style="height:50px;overflow:hidden;color:grey;">{!!$item['excerpt']['rendered']!!}</div>
                <a href="" class="btn btn-secondary mt-3"> View More</a>
            </div>
            @endforeach
          
        </div>
    </div>
</section>
<div class="" style="height:100px; width:100%;margin-bottom:100px;">

</div>
@endsection