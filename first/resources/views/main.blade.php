@extends('layouts.page')

@section('title')
Главная страница
@endsection

@section('content')
    <h1>Сотрудники компании</h1>
    @include('layouts.messages')
    <div class="btn-group mb-3">
        <a href="/add"><div class="btn btn-success">Добавить сотрудника</div></a>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Должность</th>
            <th>Дата рождения</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        ?>

        @if(@count($data) == 0)
            <tr><td colspan="5" class="text-center">Список пуст.</td></tr>
        @endif

        @foreach($data as $el)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $el->name }}</td>
                <td>{{ $el->prof }}</td>
                <td>{{ $el->date }}</td>
                <td>
                    <a href="{{ route('edit', $el->id) }}">Редактировать</a> &nbsp;
                    <a href="{{ route('delete', $el->id) }}" onclick="conf(this, 'Действительно удалить?');return false;">Удалить</a>
                </td>
            </tr>
            <?php
            $i++
            ?>
        @endforeach
        </tbody>
    </table>
@endsection