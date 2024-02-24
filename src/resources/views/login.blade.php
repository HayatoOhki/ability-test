@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection


@section('header__btn')
@section('header__nav')
<a class="header__nav" href="/register">register</a>
@endsection
@endsection


@section('content')
<div class="content">
    <div class="heading">
        <h2>Login</h2>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <p class="form__label--item">メールアドレス</p>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <p class="form__label--item">パスワード</p>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="例:coachtech1106">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <button class="form__button-submit" type="submit">ログイン</button>
    </form>
</div>
@endsection
