@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Editing link</h2>
                    <form action=" /dashboard/links/{{ $link->id }}" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="My YouTube Channel" value="{{ $link->name }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link URL</label>
                                    <input type="text" id="link" name="link" class="form-control" placeholder="https://youtube.com/user/aschmelyun" value="{{ $link->link }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @csrf
                                <button type="submit" class="btn btn-primary">Update Link</button>
                                <button type="button" class="btn btn-danger"><a href="{{ url('dashboard/links/delete/ '.$link->id) }}" class="alert-link">Delete Link</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection