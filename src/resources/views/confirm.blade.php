<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
        <?php print_r($contact) ?>

        <div class="confirm__content">
            <div class="confirm__heading">
            <h2>Contact</h2>
            </div>
        <form class="form" action="/contacts" method="post">
        @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}"readonly />    
                            </td>
                            <td class="confirm-table__text">
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}"readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="hidden" name="gender" value="{{ $contact['gender'] }} "readonly />
                            <?php
                            if ($contact['gender'] == '1') {
                            echo '男性';} else if ($contact['gender'] == '2') {
                            echo '女性';} else if ($contact['gender'] == '3') {
                            echo 'その他';}
                            ?>
                            </td>
                        </tr>   
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="{{ $contact['email'] }}"readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            <input type="tel" name="tel" value="{{ $contact['tel'] }}"readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <input type="address" name="address" value="{{ $contact['address'] }}"readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <input type="building" name="building" value="{{ $contact['building'] }}"readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ種類</th>
                        <td class="confirm-table__text">
                            <input type="hidden" name="content" value="{{ $contact['content'] }}"readonly />
                            <?php
                                if ($contact['content'] == '1') {
                                echo '商品のお届けについて';} else if ($contact['content'] == '2') {
                                echo '商品の交換について';} else if ($contact['content'] == '3') {
                                echo '商品トラブル';}else if ($contact['content'] == '4') {
                                echo 'ショップへのお問い合わせ';} else if ($contact['content'] == '5') {
                                echo 'その他';} 
                                ?>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                        </td>
                    </tr>
                </table>
            </div>
            <div class=submit-button>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                <div class="form__button">
                    <div class="form__b_button">
                        <a class="submit" href="/">修正</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>
</body>

</html>