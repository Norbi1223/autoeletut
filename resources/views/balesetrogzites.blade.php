@extends('layouts.master')
@section('title', 'Főoldal')
@section('content')
@include('layouts.menu')
<h1>Balesetek rögzítése</h1>
<div class="container bg-dark text-white rounded-2">
    <div class="row">
        <div class="col">
            <form method="POST">
                @csrf
                <div class="m-2 p-1">
                <label for="rendszam"><b>Rendszám:</b></label>
                <input type="text" name="rendszam" id="rendszam" class="form-control">
                </div>
                <div class="m-2 p-1">
                    <label for="rendszam"><b>Típus:</b></label>
                    <input type="text" name="tipus" id="tipus" class="form-control">
                </div>
                <div class="m-2 p-1">
                    <label for="rendszam"><b>Szín:</b></label>
                    <input type="text" name="szin" id="szin" class="form-control">
                </div>
                <div class="m-2 p-1">
                    <button type="submit" class="btn btn-success">Rögzítés</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection