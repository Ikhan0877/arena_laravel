@component('mail::message')

Course Request From Arena Kamanahalli Website.

<strong>Name</strong>{{$data['username']}} <br>
<strong>Email Address</strong>{{$data['email']}} <br>
<strong>Phone Number</strong>{{$data['phoneno']}} <br>
<strong>Course</strong>{{$data['coursetype']}} <br>

@endcomponent