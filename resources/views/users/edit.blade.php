@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Editing user setting</h2>
                    <form action="/dashboard/settings/" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="background_color">Background color</label>
                                    <input type="text" id="background_color" name="background_color" class="form-control {{ $errors -> first('background_color')? 'is-invalid' : '' }} " value="{{ $user->background_color }}">
                                    @if ($errors->first('background_color'))
                                        <div class="invalid-feedback">{{ $errors->first('background_color') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Text color</label>
                                    <input type="text" id="text_color" name="text_color" class="form-control {{ $errors -> first('text_color')? 'is-invalid' : '' }} "  value="{{ $user->text_color }}">
                                    @if ($errors->first('text_color'))
                                    <div class="invalid-feedback">{{ $errors->first('text_color') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @csrf
                                <button type="submit" class="btn btn-primary {{  session('success') ? ' is-valid' : ''  }} ">Save settings</button>
                                @if(session('success'))
                                <div class="valid-feedback">{{ session('success') }}</div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection