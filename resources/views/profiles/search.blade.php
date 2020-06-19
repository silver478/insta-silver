@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($profiles as $profile)
  <div class="row">
    <div class="col-6 offset-3">
    <a href="/profile/{{ $profile->profile->user_id}}"><img src="{{$profile->profile->profileImage()}}"  class="rounded-circle w-100" style="max-width: 220px;"></a>
</div>
</div>
<div class="row pt-2 pb-4">
<div class="col-6 offset-3">


<div>




<p>
  <span class="font-weight-bold">
    <a href="/profile/{{$profile->profile->user_id}} }}">
      <span class="text-dark">{{$profile->username}}</span>
    </a>

</p>
  </div>
</div>
</div>
@endforeach
<div class="row">
  <div class="col-12 d-flex justify-content-center">

  </div>
</div>
</div>

@endsection
