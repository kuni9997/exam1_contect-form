@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header')
    <h1 class="header__title">お問い合わせ</h1>
@endsection


@section('content')
<div class="form">
    <form action="/confirmation" method="post" class="form-item">
        @csrf
        <div class="form-item-input">
            <div class="form-item__name">
                <label for="last-name" class="form-item__name--label">
                    お名前<span>※</span>
                </label>
                <div class="form-item__name-content">
                    <div class="form-item__name__input">
                        <div class="form-item__last-name__input">
                            <input type="text" name="last-name" id="last-name" value="{{ old('last-name',$data['last-name']??'' )}}" class="form-item__last-name__input--input">
                            @if($errors->has('last-name'))
                                <div class="error">
                                    <div class="error-message__name">
                                        <p class="error-message__item">{{ $errors->first('last-name') }}</p>
                                    </div>
                                </div>
                            @elseif($errors->has('first-name'))
                                <div class="error">
                                    <div class="error-message__name">
                                        <p class="error-message__item">{{ $errors->first('first-name') }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="form-item__first-name__input">
                            <input type="text" name="first-name" value="{{ old('first-name',$data['-name']??'') }}" class="form-item__first-name__input--input">
                        </div>
                    </div>
                    <div class="form-item__name-example">
                        <p class="form-item__last-name__example">例）山田</p>
                        <p class="form-item__first-name__example">例）太郎</p>
                    </div>
                </div>
            </div>
            <div class="form-item__gender">
            <label for="" class="form-item__gender--label">性別<span>※</span></label>
                <div class="form-item__gender__input">
                    <input type="radio" name="gender" value="male" checked="checked" class="form-item__gender__input--input"><label class="gender-label">男性</label>
                    <input type="radio" name="gender" value="female" class="form-item__gender__input--input"><label class="gender-label">女性</label>
                </div>
            </div>
            <div class="form-item__email">
                <label  class="form-item__email--label">メールアドレス<span>※</span></label>
                <div class="form-item__email__input">
                    <input type="email" name="email" value="{{ old('email',$data['email']??'') }}" class="form-item__email__input--input">
                    @error('email')
                    <div class="error">
                        <div class="error-message__name">
                            <p class="error-message__item">{{ $errors->first('email') }}</p>
                        </div>
                    </div>
                    @enderror
                    <p class="form-item__email__example">例）test@example.com</p>
                </div>
            </div>
            <div class="form-item__postcode">
                <label  class="form-item__postcode--label">郵便番号<span>※</span></label>
                <div class="form-item__postcode__input">
                    <label class="postcode__label">〒</label>
                    <input type="text" name="postcode" value="{{ old('postcode',$data['postcode']??'') }}" class="form-item__postcode__input--input">
                    @error('postcode')
                    <div class="error">
                        <div class="error-message__name">
                            <p class="error-message__item">{{ $errors->first('postcode') }}</p>
                        </div>
                    </div>
                    @enderror
                    <p class="form-item__postcode__example">例）123-4567</p>
                </div>
            </div>
            <div class="form-item__address">
                <label class="form-item__address--label">住所<span>※</span></label>
                <div class="form-item__address__input">
                    <input type="text" name="address" value="{{ old('address',$data['address']??'') }}" class="form-item__address__input--input">
                    @error('address')
                    <div class="error">
                        <div class="error-message__name">
                            <p class="error-message__item">{{ $errors->first('address') }}</p>
                        </div>
                    </div>
                    @enderror
                    <p class="form-item__address__example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
            </div>
            <div class="form-item__building_name">
                <label for="" class="form-item__building_name--label">建物名</label>
                <div class="form-item__building_name__input">
                    <input type="text" name='building_name' value="{{ old('building_name',$data['building_name']??'') }}" class="form-item__building_name__input--input">
                    <p class="form-item__building_name__example">千駄ヶ谷マンション101</p>
                </div>
            </div>
            <div class="form-item__text">
                <label for="" class="form-item__text--label">ご意見<span>※</span></label>
                <div class="form-item__text__input">
                    <textarea name="opinion" class="form-item__text__input--input" >{{ old('opinion',$data['opinion']??'') }}</textarea>
                    @error('opinion')
                    <div class="error">
                        <div class="error-message__name">
                            <p class="error-message__item">{{ $errors->first('opinion') }}</p>
                        </div>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-item__button">
            <input type="submit" value="確認">
        </div>
    </form>
</div>

@endsection