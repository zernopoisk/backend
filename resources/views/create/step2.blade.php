@extends('create.layouts.master')

@section('title')
    Посмотрим как будет выглядеть ваше объявление
@endsection

@section('content')
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Посмотрим как будет выглядеть ваше объявление</h2>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Предпросмотр объявления</h5>
            <hr>
            <a class='btn btn-success' href="/listings/checkout">Смотрится хорошо, переходим к оплате?</a>
            <br>
            или
            <br>
            <a href="/listings/create">нужно внести изменения</a>
        </div>
    </div>
@endsection