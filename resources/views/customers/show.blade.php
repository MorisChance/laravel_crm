@extends('layouts.main')

@section('content')
    <h1>顧客詳細画面</h1>
    <table border=1>
        <tr>
            <th>顧客ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>郵便番号</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->zipcode }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->tel }}</td>
        </tr>
    </table>
    <button onclick="location.href='/customers/{{ $customer->id }}/edit'">編集画面</button>
    <form action="/customers/{{ $customer->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form>
    <button onclick="location.href='/customers/zipcode'">一覧に戻る</button>
@endsection
