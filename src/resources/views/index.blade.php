<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>もぎたて</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
      <header class="header">
        <div class="header__inner">
          <a class="header__logo" href="/products">
            mogitate
          </a>
        </div>
      </header>
      <main class="main">
        <div class="sidebar">
            <h2 class="tittle_page">商品一覧</h2>
        </div>
        <form class="product-form" action="/products" method="get">
          @csrf
        <div class="content">
            <div class="form__button-box">
            <input class="form__button-submits" type="submit" value="＋商品を追加" name="move">
            </div>
            
            <div class="flex__item" >
                <div class="practice__card">
                  <div class="card__img">
                    <img src="" alt="" />
                  </div>
                  <div class="card__content">
                    <div class=card__ttl>
                    <p class="card__ttl-name"></p>
                    <p class="card__ttl-price"></p>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
            
        </div>
      </main>
      
      
</body>
</html>