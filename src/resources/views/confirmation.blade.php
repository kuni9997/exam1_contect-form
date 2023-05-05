@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirmation.css') }}">
@endsection

@section('header')
    <h1 class="header__title">内容確認</h1>
@endsection


@section('content')
<div class="form">
    <form action="/add" method="post" class="form-item">
        @csrf
        <div class="form-item-input">
            <div class="form-item__name">
                <label for="last-name" class="form-item__name--label">
                    お名前
                </label>
                <div class="form-item__name__input">
                    <div class="form-item__last-name__input">
                        <input type="hidden" name="last-name" id="last-name" value="{{ $contact['last-name'] }}" readonly class="form-item__last-name__input--input">
                    </div>
                    <div class="form-item__first-name__input">
                        <input type="hidden" name="first-name" value="{{ $contact['first-name'] }}" readonly class="form-item__first-name__input--input">
                    </div>
                    <div class="form-item__name-dummy__input">
                        <input type="text" name="fullname" value="{{ $contact['last-name'].' '.$contact['first-name'] }}" readonly class="form-item__name-dummy__input--input">
                    </div>
                </div>
            </div>
            <div class="form-item__gender">
                <label for="" class="form-item__gender--label">性別</label>
                <div class="form-item__gender__input">
                    <input type="hidden" name="gender"  checked="checked" value="{{ $contact['gender'] }}" readonly class="form-item__gender__input--input">
                    @if($contact['gender'] == 1)
                        <p>男性</p>
                    @else
                        <p>女性</p>
                    @endif
                </div>
            </div>
            <div class="form-item__email">
                <label  class="form-item__email--label">メールアドレス</label>
                <div class="form-item__email__input">
                    <input type="email" name="email" value="{{ $contact['email'] }}" readonly class="form-item__email__input--input">
                </div>
            </div>
            <div class="form-item__postcode">
                <label  class="form-item__postcode--label">郵便番号</label>
                <div class="form-item__postcode__input">
                    <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly class="form-item__postcode__input--input">
                </div>
            </div>
            <div class="form-item__address">
                <label class="form-item__address--label">住所</label>
                <div class="form-item__address__input">
                    <input type="text" name="address" value="{{ $contact['address'] }}" readonly class="form-item__address__input--input">
                </div>
            </div>
            <div class="form-item__building_name">
                <label for="" class="form-item__building_name--label">建物名</label>
                <div class="form-item__building_name__input">
                    <input type="text" name='building_name' value="{{ $contact['building_name'] }}" readonly class="form-item__building_name__input--input">
                </div>
            </div>
            <div class="form-item__text">
                <label for="" class="form-item__text--label">ご意見</label>
                <div class="form-item__text__input">
                    <textarea name="opinion" class="form-item__text__input--input"  readonly >{{ $contact['opinion'] }}</textarea>
                </div>
            </div>
        </div>
        <div class="form-item__button">
            <input type="submit" value="確認">
        </div>
    </form>
    <div class="modify-button">
        <form action="/confirmation/modify" method="post" class="modify-button__item">
        @csrf
            <input type="submit"  value="修正する" class="modify-button__item--button">
        </form>
    </div>
</div>

@endsection