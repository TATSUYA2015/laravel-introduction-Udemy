@extends('layouts.default')

@section('title', 'イベント登録')
@section('content')
    <from action="{{ route('events.store')}}" method="post">
        @csrf
        <label>イベント名: <input type="text" name="title"></label>
        <button type="submit">登録</button>
    </from>
@endsection
