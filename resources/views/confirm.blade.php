@extends('index')
@section('title','Arena Animation | Best Institude in bangalore')
@section('content')
    <div class="bg-success" style="margin-top:-90px;">
        <br>
        <br>
        <br>
    </div>
    <div class="container-fluid px-5" style="padding-bottom:150px;padding-top:50px;">
        <div class="row">
            <div class="col-md-6">
                <h2 class="display-2 pt-5 mt-5 text-primary">Thank You for Reaching to us</h2>
                <p class="h4 pt-3 text-dark">Our customer executive will reach out <br> to soon.</p>
                <a href="/" class="btn btn-primary mt-4">Go to Home</a>
            </div>
            <div class="col-md-6">
                    <img src="{{ asset('images/contact.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

@endsection