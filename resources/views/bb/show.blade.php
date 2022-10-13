@extends('layouts.base')
@section('title', $bb->title)
@section('main')
<div class="row row-cols-10">
        <div class="col">
            <div class="card shadow-sm">
                <div><img src="{{$bb->img}}" alt=""></div>

                <div class="card-body">
                    <p class="card-text">{{$bb->title}}</p>
                    <p>{{$bb->price}} за {{$bb->unit}}</p>
                    <p class="card-text">Опубликовал пользователь: {{$bb->user->name}}</p>
                    <p class="card-text">{{$bb->content}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
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
</div>
@endsection('main')
