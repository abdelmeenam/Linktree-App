@extends('layouts.links')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <img  class="rounded-circle mx-auto d-block  " src="https://picsum.photos/200" style=" width:300px ">
                @foreach($user->links as $link)
                <div class="link">
                        <a
                            href="{{ $link->link }}"
                            class="user-link d-block p-4 mb-4 rounded h3 text-center"
                            target="_blank"
                            rel="nofollow"
                            style="border: 2px solid {{ $user->text_color }}; color :{{ $user->text_color }}"
                        >
                        {{ $link->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection