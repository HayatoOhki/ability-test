@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection


@section('header__nav')
<a class="header__nav" href="/login">login</a>
@endsection


@section('content')
<div class="content">
    <div class="heading">
        <h2>Register</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <p>お名前</p>
            <input type="text" name="name" placeholder="例:山田　太郎" value="{{ old('name') }}">
        </div>
        <div class="form__group">
            <p>メールアドレス</p>
            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
        </div>
        <div class="form__group">
            <p>パスワード</p>
            <input type="password" name="password" placeholder="例:coachtech1106">
        </div>
        <button class="form__button-submit" type="submit">登録</button>
    </form>
</div>
@endsection
