@extends('layouts.app')

@section('content')
<div class="container">
 @foreach ($posts as $post)
 <div class="row">
    <div class="col-6 offset-3">
        <a href="/profile/{{ $post->user->id }}">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </a>
    </div>
 </div>
 <div class="row pt-2 pb-4">
    <div class="col-6 offset-3">
        
        <hr>
        <strong>
            <a href="/profile/{{ $post->user->id }}" 
                class= "text-dark text-decoration-none">{{ $post->user->username }}</a></strong>
        
        <a href="#" class="pl-3">Follow</a>
        <p>{{ $post->caption }}</p>
    </div>
</div>
 @endforeach
 <div class="row">
    <div class="col-12">
        {{ $posts->links() }}
    </div>
 </div>
</div>
@endsection
