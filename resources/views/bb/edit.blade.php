@extends('layouts.base')
@section('title', 'Новое объявление')
@section('main')
<div class="row row-cols-10">
        <div class="col">
            <form action="{{route('bb.update', ['bb'=>$bb])}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Заголовок</label>
                    <input type="text" value="{{old('title', $bb->title)}}" name="title" class="form-control @error('title') is-invalid @enderror" id="titleInput" aria-describedby="titleHelp">
                    @error('title')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror
                    <div id="titleHelp" class="form-text">Заголовок вашего нового объявления</div>
                </div>
                <div class="mb-3">
                    <label for="contentInput" class="form-label">Тескт объявления</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="contentInput" rows="3">{{old('content', $bb->content)}}</textarea>
                    @error('content')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror
                </div>

                <div class="mb-3 row">
                    <div class="col">
                        <label for="priceInput" class="form-label">Цена</label>
                        <input type="number" value="{{old('price', $bb->price)}}" name="price" class="form-control @error('price') is-invalid @enderror" id="priceInput" aria-describedby="titleHelp">
                        @error('price')
                        <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                        @enderror
                        <div id="titleHelp" class="form-text">Укажите стоимость услуги или товара в рублях</div>
                    </div>
                    <div class="col">
                        <label for="quantityInput" class="form-label">Колличество</label>
                        <input type="number" value="{{old('quantity', $bb->quantity)}}" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantityInput" aria-describedby="quantityHelp">
                        @error('quantity')
                        <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                        @enderror
                        <div id="quantityHelp" class="form-text">Укажите колличество</div>
                    </div>
                    <div class="col">
                        <label for="unitInput" class="form-label">Единица измерения</label>
                        <input type="text"  value="{{old('unit', $bb->unit)}}" name="unit" class="form-control @error('unit') is-invalid @enderror" id="unitInput" aria-describedby="unitHelp">
                        @error('unit')
                        <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                        @enderror
                        <div id="unitHelp" class="form-text">Например шт. кг. м и т.д</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Выбирите фото объявления</label>
                    <input name="img" class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
</div>
@endsection('main')
