@extends('index')
@section('title',$data['title']['rendered'])

@section ('content')
<div class="" style="height:100px; width:100%;margin-top:-100px;background:purple">

</div>
<!-- <div class="container-fluid bg-light" style="height:100px; width:100%;margin:20px 0;display:flex;align-items:center;">
    
</div> -->
<section style="margin:0 auto;max-width:1024px; padding:20px;">
    <div>
        <h1 class="text-dark py-5">{{$data['title']['rendered']}}</h1>
    </div>
    <div style="height:500px; width:100%;background-image:url({{$data['jetpack_featured_media_url']}});background-size:cover;background-position:center;margin:0 auto;" class="d-flex align-items-end">
    </div>
    <div class="blog-content">
        {!!$data['content']['rendered']!!}
    </div>
</section>

<div class="" style="height:100px; width:100%;margin-bottom:100px;">

</div>
@endsection