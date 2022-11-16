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
                    <label for="balido"><b>Baleset időpontja:</b></label>
                    <input type="datetime" name="balido" id="balido" class="form-control">
                </div>
                <div class="m-2 p-1">
                    <label for="serules"><b>Sérülés leírása:</b></label>
                    <input type="text" name="serules" id="serules" class="form-control">
                </div>
                <div class="m-2 p-1">
                    <button type="submit" class="btn btn-success">Rögzítés</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection