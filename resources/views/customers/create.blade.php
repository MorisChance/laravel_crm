@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>新規登録画面</h1>
    <form action="/customers" method="post">
        @csrf
        <label for="name">名前</label>
        <input type="text" name='name' id='name'><br>
        <label for="email">メールアドレス</label>
        <input type="text" name='email' id='email'><br>
        <label for="zipcode">郵便番号</label>
        <input type="number" name='zipcode' id='zipcode' value="{{ $zipcode }}"><br>
        <label for="address">住所</label>
        <textarea name="address" id="address" cols="30" rows="5">{{ $address }}</textarea><br>
        <label for="tel">電話番号</label>
        <input type="number" name='tel' id="tel"><br>
        <input type="submit" value="登録">
    </form>
    <button onclick="location.href='/customers/zipcode'">郵便番号検索に戻る</button>
