<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
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
  <div class="FashionablyLate__content">
      <div class="FashionablyLate__heading">
        <h3 class="Contact">Contact</h3>
      </div>
      <form class="form">
        <div class="form__group">
          <span class="form__group-title">
            <span class="form__label--item">お名前※</span>
            

          </span>
          <span class="form__group-content">
            <span class="form__input--text">
            
              <input type="text" id="last-name" name="last_name" placeholder="例:山田"/>
            </span>
          <span class="form__group-content">
            <span class="form__input--text">
              
              <input type="text" id="first-name" name="first_name" placeholder="例:太郎"/>
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </span>
        </span>
        <div class="form__group">
          <span class="form__group-title">
            <span class="form__label--item">性別※</span>
            

          </span>

          <span class="form__group-content">
            <span class="form__input--text">
            
              <input type="radio" id="male" name="gender" value="male" checked>
              <label for="male">男性</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">女性</label>
              <input type="radio" id="others" name="gender" value="others">
              <label for="others">その他</label>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </span>
        </span>
        <span class="form__group">
          <span class="form__group-title">
            <span class="form__label--item">メールアドレス※</span>
            
          </span>
          <span class="form__group-content">
            <span class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" />
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </span>
        </div>
        <div class="form__group">
          <span class="form__group-title">
            <span class="form__label--item">電話番号※</span>
            
          </span>
          <span class="form__group-content">
            <span class="form__input--text">
             
            <input type="text" id="area-code" name="area_code" maxlength="3" pattern="[0-9]{1,3}" placeholder="080">
           
            <input type="text" id="middle-number" name="middle_number" maxlength="4" pattern="[0-9]{1,4}" placeholder="1234">
            
            <input type="text" id="last-number" name="last_number" maxlength="4" pattern="[0-9]{1,4}" placeholder="5678" >
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </span>
        </div>

        <span class="form__group">
          <span class="form__group-title">
            <span class="form__label--item">住所※</span>
            
          </span>
          <span class="form__group-content">
            <span class="form__input--text">
              <input type="home" name="home" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </span>
        </div>

        <span class="form__group">
          <span class="form__group-title">
            <span class="form__label--item">建物名</span>
            
          </span>
          <span class="form__group-content">
            <span class="form__input--text">
              <input type="build" name="build" placeholder="例:千駄ヶ谷マンション101" />
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </span>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類※
              <select name="" id="" class="id">
                <option value="" class="value"></option>
                <input type="hear" name="hear" placeholder="選択してください" />

              </select>
            </span>
          </div>
        </div>

        <span class="form__group">
          <span class="form__group-title">
            <span class="form__label--item">お問い合わせ内容※</span>
          </span>
          <span class="form__group-content">
            <span class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </span>
          </span>
        </span>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
