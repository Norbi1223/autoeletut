@extends('layouts.master')
@section('title', 'Főoldal')
@section('content')
@include('layouts.menu')
<h1>Autók rögzítése</h1>
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
                <label for="rendszam"><b>Rendszám:</b></label>
                <input type="text" name="rendszam" id="rendszam" class="form-control">
                @error('rendszam')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="m-2 p-1">
                    <label for="tipus"><b>Típus:</b></label>
                    <input type="text" name="tipus" id="tipus" class="form-control">
                
                @error('tipus')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="m-2 p-1">
                    <label for="szin"><b>Szín:</b></label>
                    <input type="text" name="szin" id="szin" class="form-control">
                
                @error('szin')
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