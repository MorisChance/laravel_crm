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
    <h1>郵便番号検索画面</h1>
    <form action="/customers/create" method="GET">
        <label for="zipcode">郵便番号検索</label>
        <input type="text" name='zipcode' id="zipcode" placeholder='検索したい郵便番号' value="{{ old('zipcode') }}">
        <input type="submit" value="検索">
    </form>
    <button onclick="location.href='{{ route('customers.index') }}'">一覧へ戻る</button>
