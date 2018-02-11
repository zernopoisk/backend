@extends('create.layouts.master')

@section('title')
    Оплатите ваше объявление
@endsection

@section('content')
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Оплатите ваше объявление</h2>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Подтвердите действие, предварительно выбрав удобный способ оплаты</h5>
            <hr>
            <form action="/listings/checkout" method="post">
                <input class="btn btn-success" type="submit" name="submit" value="Разместить объявление">
            </form>
            или
            <br>
            <a href="/listings/create">нужно внести изменения</a>
        </div>
    </div>
@endsection