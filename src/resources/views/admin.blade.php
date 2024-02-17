@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>
@if (Auth::check())
<form class="form" action="/logout" method="post">
    @csrf
    <button class="button">ログアウト</button>
</form>
@endif
<div class="attendance__content">
<h2>Admin</h2>
    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">お名前</th>
                <th class="attendance-table__header">性別</th>
                <th class="attendance-table__header">メールアドレス</th>
                <th class="attendance-table__header">お問い合わせの種類</th>
                <th class="attendance-table__header">詳細内容</th>
            </tr>
            
            <tr class="attendance-table__row">
                <td class="attendance-table__item"></td>
                <td class="attendance-table__item">サンプル</td>
                <td class="attendance-table__item">サンプル</td>
                <td class="attendance-table__item">サンプル</td>
                <td class="attendance-table__item">サンプル</td>
               
            </tr>
        </table>
    </div>
</div>
@endsection