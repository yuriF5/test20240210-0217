<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
            FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content_name">
                    <div class="form__input-last_name--text">
                        <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}"/>
                    </div>
                    <div class="form__error">
                        @error('last_name')
                            {{ $message }} 
                        @enderror
                    </div>
                    <div class="form__input-first_name--text">
                        <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}"/>
                    </div>
                    <div class="form__error">
                        @error('first_name')
                            {{ $message }} 
                        @enderror
                    </div>              
                </div>
                
                <div class="form__group">
                    <div class="form__group-title-gender">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-gender">
                        <div class="form__input--radio">
                            <input id="men" type="radio" name="gender" value="1" checked>男性</label>
                        </div>
                        <div class="form__input--radio">
                            <input id="women" type="radio" name="gender" value="2" >女性</label>
                        </div>
                        <div class="form__input--radio">
                            <input id="other" type="radio" name="gender" value="3" >その他</label>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }} 
                        @enderror
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
                        </div>
                        <div class="form__error">
                        @error('email')
                            {{ $message }} 
                        @enderror
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content__tel">
                    <div class="form__input_tel--text">
                        <input type="tel1" id="" name="tel1" maxlength="5" placeholder="090" value="{{ old('tel1') }}"/> -
                        <input type="tel2" id="" name="tel2" maxlength="5" placeholder="1234" value="{{ old('tel2') }}"/> -
                        <input type="tel3" id="" name="tel3" maxlength="5" placeholder="5678" value="{{ old('tel3') }}"/>
                    </div>
                    <div class="form__error">
                        @error('tel')
                        {{ $message }} 
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
                        </div>
                    </div>
                    <div class="form__error">
                    @error('address')
                        {{ $message }} 
                    @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                        </div>
                    </div>
                </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="create-form__item">
                    <select class="create-form__item-select" name="content">
                        <option value="hidden">選択してください</option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問い合わせ</option>
                        <option value="5">その他</option>
                    </select>
                    </div>
                </div>                
                <div class="form__error">
                    @error('content')
                        {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-detail">
                    <div class="form__input--textarea">
                        <textarea name="detail" maxlength="120" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                    </div>
                </div>
                <div class="form__error">
                @error('detail')
                    {{ $message }} 
                @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>