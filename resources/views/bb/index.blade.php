@extends('layouts.base')
@section('title', 'Главная')

@section('main')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Объявления</h1>
                <p class="lead text-muted">Сайт по размещению объявлений</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Показать все</a>
                    <a href="#" class="btn btn-secondary my-2">Избранные</a>
                </p>
            </div>
        </div>
    </section>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($bbs as $bb)
            <div class="col">
                <div class="card shadow-sm">
                    <div><img src="{{$bb->img}}" alt=""></div>

                    <div class="card-body">
                        <p class="card-text">{{$bb->title}}</p>
                        <p class="card-text">Опубликовал пользователь: {{$bb->user->name}}</p>
                        <p>{{$bb->price}} за {{$bb->unit}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a type="button" href="{{route('bb.show',$bb)}}" class="btn btn-sm btn-outline-secondary">Подробнее
                                </a>
                                <a type="button" href="{{route('bb.show',$bb)}}" class="btn btn-sm btn-outline-secondary">Купить
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">В избранные
                                </button>
                            </div>
                            <small class="text-muted">9

                            </small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection('main')

