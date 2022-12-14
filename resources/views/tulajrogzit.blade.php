@extends('layouts.master')
@section('title', 'Főoldal')
@section('content')
@include('layouts.menu')
<h1>Tulajdonos rögzítése</h1>
<div class="container bg-dark text-white rounded-2">
    <div class="row">
        <div class="col">
            <form method="POST">
                @csrf
                @if (session() -> get('kesz'))
                    <div class="alert alert-success m-2">
                        {{session() -> get('kesz')}}
                    </div>
                @endif
                <div class="m-2 p-1">
                <label for="tulajnev"><b>Tulajdonos neve:</b></label>
                <input type="text" name="tulajnev" id="tulajnev" class="form-control" value="{{old('tulajnev')}}">
                    @error('tulajnev')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m-2 p-1">
                    <label for="tulkezd"><b>Tulajdonjog kezdete:</b></label>
                    <input type="date" name="tulkezd" id="tulkezd" class="form-control" value="{{old('tulkezd')}}">
                    @error('tulkezd')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m-2 p-1">
                    <label for="tulveg"><b>Tulajdonjog vége:</b></label>
                    <input type="date" name="tulveg" id="tulveg" class="form-control" value="{{old('tulveg')}}">
                    @error('tulveg')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m-2 p-1">
                    <button type="submit" class="btn btn-success">Rögzítés</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection