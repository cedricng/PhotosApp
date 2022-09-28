@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">

        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="" 
                    class="rounded-circle w-100" style="max-width: 40px;">
                </div>
                <div class="p-3">
                    <p><strong>
                        <a href="/profile/{{ $post->user->id }}" class="text-dark text-decoration-none" >
                            {{ $post->user->username }}</a></strong></p>
                </div>
                
            </div>
            <hr>
            <strong>
                <a href="/profile/{{ $post->user->id }}" class= "text-dark text-decoration-none">{{ $post->user->username }}</a></strong>
            
            <a href="#" class="pl-3">Follow</a>
            <p>{{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection
