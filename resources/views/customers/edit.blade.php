@extends('layouts.main')

@section('content')
    <h1>詳細編集画面</h1>
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
    <form action="/customers/{{ $customer->id }}" method="post">
        @csrf
        @method('patch')
        <label for="name">名前</label>
        <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}"><br>

        <label for="email">メールアドレス</label>
        <input type="text" name="email" value="{{ old('email', $customer->email) }}"> <br>
        <label for="zipcode">郵便番号</label>
        <input type="" name="zipcode" value="{{ old('zipcode', $customer->zipcode) }}"><br>
        <label for="address">住所</label>
        <input type="text" name="address" value="{{ old('address', $customer->address) }}"><br>
        <label for="tel">電話番号</label>
        <input type="number" name="tel" value={{ old('tel', $customer->tel) }}><br>
        <input type="submit" value=更新>
    </form>
    <button onclick="location.href='/customers'">戻る</button>
@endsection
