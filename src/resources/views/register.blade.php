<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
          <a class="header__logo" href="/">
            mogitate
          </a>
        </div>
      </header>
    
      <main>
          <form class="form" action="/products/register" method=post>
            @csrf
            <div class="form__group">
                <div class="form__heading">
                  <h2>商品登録</h2>
                </div>
            </div>
            <div class="form__group">
              <div class="form__group-title">
                <span class="form__label--item">商品名</span>
                <span class="form__label--required">必須</span>
              </div>
              <div class="form__group-content">
                <div class="form__input--text">
                  <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}"/>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                  @error('name')
                  {{$message}}
                  @enderror
                </div>
              </div>
            </div>
            <div class="form__group">
              <div class="form__group-title">
                <span class="form__label--item">値段</span>
                <span class="form__label--required">必須</span>
              </div>
              <div class="form__group-content">
                <div class="form__input--text">
                  <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}"/>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                  @error('price')
                    {{ $message }}
                   @enderror
                </div>
              </div>
            </div>
            <div class="form__group">
              <div class="form__group-title">
                <span class="form__label--item">商品画像</span>
                <span class="form__label--required">必須</span>
              </div>
              <div class="form__group-input">
                <div class="form__register">
                    <input class="form__register-input" name="image" type="file" value="{{ old('image') }}"/>
                  </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                  @error('image')
                    {{ $message }}
                   @enderror
                </div>
              </div>
            </div>

            <div class="form__group">
                <label class="form__group-title">
                <span class="form__label--item">季節</span>
                  <span class="form__label--required">必須</span>
                  <span class="form__label--required1">複数選択可</span>
                </label>
                <div class="form__season-inputs">
                  <div class="form__season-option">
                  <label class="form__season-label">
                      <input class="form__season-input" name="season" type="checkbox" id="spring" value="1"/>
                      <span class="form__season-text">春</span>
                    </label>
                  </div>
                  <div class="form__season-option">
                    <label class="form__season-label">
                      <input class="form__season-input" name="season" type="checkbox" id="summer" value="2"/>
                      <span class="form__season-text">夏</span>
                    </label>
                  </div>
                  <div class="form__season-option">
                    <label class="form__season-label">
                      <input class="form__season-input" name="season" type="checkbox" id="fall" value="3"/>
                      <span class="form__season-text">秋</span>
                    </label>
                  </div>
                  <div class="form__season-option">
                    <label class="form__season-label">
                      <input class="form__season-input" name="season" type="checkbox" id="winter" value="2"/>
                      <span class="form__season-text">冬</span>
                    </label>
                  </div>
                </div>
                <p class="form__error">
                   @error('season')
                    {{ $message }}
                   @enderror
                </p>
              </div>
            <div class="form__group">
              <div class="form__group-title">
                <span class="form__label--item">商品説明</span>
                <span class="form__label--required">必須</span>
              </div>
              <div class="form__group-content">
                <div class="form__input--textarea">
                  <textarea name="description" placeholder="商品の説明を入力" value="{{ old('description') }}"></textarea>
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                  @error('description')
                    {{ $message }}
                   @enderror
                </div>
              </div>
            </div>
            <div class="form__button">
                <input class="form__back-btn" type="submit" value="戻る" name="back">
                <input class="form__send-btn btn" type="submit" value="登録" name="send">
            </div>
          </form>
      </main>
</body>
</html>