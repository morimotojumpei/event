<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">          
    <!-- SNS対策 先生に聞く-->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"><script src="https://pagead2.googlesyndication.com/pagead/js/r20201201/r201100131/rum_fy2019.js"></script><script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://partner.googleadservices.com/gampad/cookie.js?domain=www.kokuchpro.com&amp;callback=_gfp_s_&amp;client=ca-pub-5936792356450049&amp;cookie=ID%3D5ac6b1c9f6b566a9%3AT%3D1607006056%3AS%3DALNI_MbIIC-4b3eJULUE7LtkRzI5d_SKWQ"></script>
            
    <!-- SNS情報 -->
    <meta property="fb:app_id" content="あああああああ">
    <meta property="og:type" content="あああああ">
    <meta property="og:url" content="ああああああ">
    <meta property="og:title" content="ああああああああ">
    <meta property="og:image" content="あああああああああ">
    
    <!-- 以下は必要？
    <meta name="twitter:site" content="ああああああああ">
    <meta name="twitter:card" content="ああああああああ"> -->
    
    <!-- 新しいIEに変更してねって意味←不要かも！！-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <meta charset="utf-8">
    
    <!-- レスポンス対応 -->
    <meta name="viewport" content="width=1030px,maximum-scale=2.0,user-scalable=yes">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    
    <!-- name="description"は、その文書の説明を短文で指定します。 ここで指定する値は、Googleの検索結果に表示されるなど、多くの検索エンジンで利用されるので慎重に言葉を選んでください。 -->
    <meta name="Description" content="梅田、関西、イベント、2021年、飲み会、Mikodapps">
    
    <!-- SEO対策 先生にきく-->
    <!-- <link rel="alternate" type="application/rss+xml" title="神戸飲み会イベント特集 - こくちーずプロ" ?href="https://www.kokuchpro.com/feature/%E7%A5%9E%E6%88%B8%E9%A3%B2%E3%81%BF%E4%BC%9A/.rss"> -->

    <meta name="Key word" content=”Mikodapps,イベント,セミナー,勉強会,コミュニティ,集客,告知,チケット,主催,無料,ソーシャル,梅田,関西,イベント,2021年,飲み会”>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/index/reset.css">
    <link rel="stylesheet" href="css/index/content.css">
    <link rel="stylesheet" href="css/index/main.css">
    <link rel="stylesheet" href="css/index/footer.css">
    <link rel="stylesheet" href="css/index/movie.css">
    <link rel="stylesheet" href="css/index/header.css">
    <link rel="stylesheet" href="css/index/contact.css">

    <!-- --font-awsome-- -->
    <script src="https://kit.fontawesome.com/720c0d4f32.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    

<!-- javascript -->
<script src="js/index.js"></script>

<!-- Google Tag Manager -->
    
<!-- Minimize page flickering -->

<!-- Google Analytics Tracking code -->

<!-- DFP Tracking code -->

<!-- Favicons -->
<link rel=”icon” href=“/image/favicon/favicon.ico”>   
<title>Mikodapps_飲み会イベント</title>
</head>
<body>
    <header>
                        {{-- <section class="Auth">
                          <div class="flex-center position-ref full-height">
                              @if (Route::has('login'))
                                  <div class="top-right links">
                                      @auth
                                          <a href="{{ url('/home') }}">Home</a>
                                      @else
                                          <a href="{{ route('login') }}">Login</a>
                        
                                          @if (Route::has('register'))
                                              <a href="{{ route('register') }}">Register</a>
                                          @endif
                                      @endauth
                                  </div>
                              @endif
                          </div>
                        </section> --}}
            <div class="top_category">
              <div class="left">
                <h3>Mikodapps</h3>
              </div>
              <div class="right">
              </div>
              {{-- <div class="header_image"> --}}
                  <ul class="content" >
                    <li class="menu1"><a href="home">Home</a></li>
                    <li class="menu2"><a href="schedule">Schedule</a></li>
                    <li class="menu3"><a href="info">Info</a></li>
                    <li class="menu4"><a href="first_time">First time</a></li>
                    <li class="menu5"><a href="question">Question</a></li>
                    <li class="menu6"><a href="contact">Contact</a></li>
                  </ul>
                </div>

              </div>    
              <!-- <hr class="rainbow"> -->
            {{-- ハンバーガー部分 --}}
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidebar">
                <span class="navbar-toggler-icon"></span>
              </button>    
              </nav>    
            </header>
          
