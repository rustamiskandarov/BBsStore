@extends('layouts.base')
@section('title', 'Мои объявления')
@section('main')
    <h2 class="mb-4">Добро пожаловать {{Auth::user()->name}}!</h2>
    <a class="btn btn-outline-primary" href="{{route('bb.create')}}">Добавить новое объявление</a>
    @if(count($bbs)>0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Цена</th>
                <th scope="col">Действия</th>

            </tr>
            </thead>
            <tbody>
            @foreach($bbs as $bb)
                <tr>
                    <th scope="row">1</th>
                    <td><a href="{{route('bb.show', ['bb'=>$bb])}}">{{$bb->title}}</a></td>
                    <td>{{$bb->price}}</td>
                    <td class="d-flex justify-content-end">
                        <a href="{{route('bb.edit', ['bb'=>$bb->id])}}" type="button" class="btn btn-primary btn-sm mx-3">Изменить</a>

                        <form action="{{route('bb.delete', ['bb'=>$bb->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @endif

@endsection
