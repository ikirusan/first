@extends('layouts.page')

@section('title')
    Страница добавления / редактирования сотрудника
@endsection

@section('content')
    <h1>Сотрудники компании</h1>
    @include('layouts.messages')
    <form action="{{ route('add-form') }}" method="post">
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" value="{{ isset($data) ? $data->name : old('name') }}" class="form-control" placeholder="Укажите имя">
        </div>
        <div class="form-group">
            <label for="date">Дата рождения</label>
            <input type="date" name="date" id="date" value="{{ isset($data) ? $data->date : old('date') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="prof">Должность</label>
            <input type="text" name="prof" id="prof" value="{{ isset($data) ? $data->prof : old('prof') }}" class="form-control" placeholder="Укажите должность">
        </div>
        <input type="hidden" name="_token" value="{{ @csrf_token() }}">
        <input type="hidden" name="action" value="{{ isset($data) ? 'edit' : 'add' }}">
        @if(isset($data))
            <input type="hidden" name="id" value="{{ $data->id }}">
        @endif
        <button type="submit" class="btn btn-success">{{ isset($data) ? 'Сохранить' : 'Добавить' }}</button>
        <a href="{{ route('main') }}"><div type="button" class="btn btn-link">Вернуться</div></a>
    </form>
@endsection