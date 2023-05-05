@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/data.css') }}">
@endsection

@section('header')
    <h1 class="header__title">管理システム</h1>
@endsection

@section('content')
<div class="form">
    <div class="form-content__item">
        <form action="/search" method="post" class="form-content">
        @csrf
            <div class="form-content__item--input">
                <div class="form-content__item--name-gender">
                    <div class="form-content__item-name">
                        <label for="">お名前</label>
                        <input type="text" name="fullname" id="" class="form-content__item-name--input" value="{{ old('fullname')}}">
                    </div>
                    <div class="form-content__item-gender">
                        <label class="form-content__item-gender--header">性別</label>
                        <div class="form-content__item-gender-all">
                            <input type="radio" name="gender" value="" checked="checked" class="form-content__item-gender--input">
                            <label for="" >全て</label>
                        </div>
                        <div class="form-content__item-gender--male">
                            <input type="radio" name="gender" value="1" class="form-content__item-gender--input">
                            <label for="">男性</label>
                        </div>
                        <div class="form-content__item-gender--female">
                            <input type="radio" name="gender" value="2" class="form-content__item-gender--input">
                            <label for="">女性</label>
                        </div>
                    </div>
                </div>
                <div class="form-content__item-date">
                    <label for="">登録日</label>
                    <input type="date" name="start_date" id="" class="form-content__item-date--start" value="{{ old('start_date')}}">
                    <p class="form-content__item-date--text">~</p>
                    <input type="date" name="end_date" id="" class="form-content__item-date--end" value="{{ old('end_date')}}">
                </div>
                <div class="form-content__item-email">
                    <label for="">メールアドレス</label>
                    <input type="text" name="email" id="" class="form-content__item-email--input"
                    value="{{ old('email')}}">
                </div>
            </div>
            <div class="form-content__item-button">
                <input type="submit" value="検索" class="form-content__item-button--search">
            </div>
        </form>
        <form action="/data" method="get">
            <input type="submit" value="リセット" class="form-content__item-button--reset">
        </form>
     </div>
</div>
<div class="form-data">
    <div class="form-data__item">
        <!-- ページネーション追加 -->
        <table>
            <tr class="form-data__table--header">
                <th>ID</th>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>ご意見</th>
            </tr>
            {{ $contacts->links('pagination::tailwind') }}
            @if(!$contacts == "")
            @foreach ($contacts as $contact)
            <form action="/down" method="post">
                @method('DELETE')
                @csrf
                <tr class="form-data__table--contact">
                    <td><input type="text" name="id" class="form-data__table--id" value="{{ $contact['id'] }}" readonly></td>
                    <td><input type="text" name="fullname" class="form-data__table--fullname" value="{{ $contact['fullname'] }}" readonly></td>
                    <td><input type="text" name="gender" class="form-data__table--gender" value="{{ $contact->Gender($contact['gender']) }}" readonly></td>
                    <td><input type="text" name="email" class="form-data__table--email" value="{{ $contact['email'] }}" readonly></td>
                    <td class="form-data__table--mask">
                        <input type="text" name="opinion" class="form-data__table--opinion" value="{{ Str::limit( $contact['opinion'] ,50)}}" readonly>
                        <p class="form-data__table--opinion--hover">{{$contact['opinion']}}</p>
                    </td>
                    <td class="form-data__table_td--button"><input type="submit" value="削除" class="form-data__table--button"></td>
                </tr>
            </form>
            @endforeach
            @endif
        </table>
    </div>
</div>

@endsection