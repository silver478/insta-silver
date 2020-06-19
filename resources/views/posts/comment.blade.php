@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
    <img src="/storage/{{$post->image}}" class="w-100">
</div>
<div class="col-4">
  <div>
<div class="d-flex align-items-center">
  <div class="pr-3">
<img src="{{$post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
  </div>
  <div>
<div class="font-weight-bold">
  <a href="/profile/{{ $post->user->id }}">
    <span class="text-dark">{{$post->user->username}}</span>
  </a>
  <a href="#" class="pl-3">Follow</a>
</div>


  </div>
</div>

<hr>


<p>
  <span class="font-weight-bold">
    <a href="/profile/{{ $post->user->id }}">
      <span class="text-dark">{{$post->user->username}}</span>
    </a>
  </span> {{ $post->caption }}
</p>

  <form action="/p/{{$post->id}}" enctype="multipart/form-data" method="post">
    @csrf
<div class="form-group row">
    <label for="comment" class="col-md-4 col-form-label ">Comment</label>


        <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}"  autocomplete="comment" autofocus>

        @error('comment')
            <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
            </span>
        @enderror </div>

   <button class="btn btn-primary">Add Comment</button>


  </div>
</div>
</div>
</div>

@endsection
