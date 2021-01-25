

@extends('layouts.homeapp')

@section('content')
  <div class="event_schedule">
    <span><h2>イベントスケジュール</h2></span>
  </div>

  <section class="info">
      <p>Mikodappsでは、毎週、大阪を中心に飲み会イベントを実施しております。
        このページでは、開催イベントの日程を掲載しております。
      </p>
      <p>翌月のカレンダーを見る場合は下の<img class="event_picture" src="/wp-content/uploads/2020/06/calendar_arrow.jpg" data-lazy-type="image" data-src="/wp-content/uploads/2020/06/calendar_arrow.jpg" width="30" alt="右矢印"><noscript><img src="/wp-content/uploads/2020/06/calendar_arrow.jpg" width="30" alt="右矢印" /></noscript>をクリックして翌月のスケージュールをご覧ください。
      </p>
      <!-- カレンダー -->
      
     
      <!-- カレンダーここまで -->
    </section>
    
    <div class="event_list">
      <span><h2>イベント一覧</h2></span>
    </div>

  <section class="events">
      <div class="ages">
        <div>
          <a href="#"><img class="age" src="/Users/onoshoya/event/image/tree.png"  alt="20代が参加できるイベント"></a>
        </div>
        <div>
          <a href="#"><img class="age" src="/Users/onoshoya/event/image/tree.png"  alt="30代が参加できるイベント"></a>
        </div>
        <div>
          <a href="#"><img class="age" src="image/tree.png"  alt="40代が参加できるイベント"></a>
        </div>
        <div>
          <a href="#"><img class="age" src="image/tree.png"  alt="50代が参加できるイベント"></a>
        </div>
      </div>
  </section>
    
  <div class="event_date"> 
    <span><h2>イベント開催予定日</h2></span>
  </div>

<aside class="flex">
<div class="main_page"> 

<section class="blogcard">
  <h3 class="partyTitle">
    <a href="https://arakon.net/party/12369/">
      <span>12/19(土)クリスマス直前！婚歴理解者party企画★４０代中心(37歳～50歳くらいまで）の婚活★恋活パーティー♪本町駅直結のお洒落な...</span>
    </a>
  </h3>
  <div class="parts">
    <div class="partyPhoto">
        <img width="300" height="300" src="https://arakon.net/wp/wp-content/uploads/2020/07/1207_1400.jpg" class="event_picture" alt="本町イタリアン倶楽部" >
    </div>
    <div class="partyInfo">
        <ul>
            <li><span>開催場所</span>
                <a href="https://s.tabelog.com/osaka/A2701/A270106/27114332/" target="_blank" itemprop="url"><p>本町イタリアン倶楽部</p></a>
                </li><br>
            <li><span>男性</span><p>5000円</p></li><br>
            

            


            <li><span>女性</span><p>2000円</p></li><br>
            <li><span>参加状況</span><p>男性残りわずか★/ 女性残りわずか★</p></li><br>
            <li><span>年齢層</span>35歳〜50歳くらいまで【新年齢設定】</li>
        </ul>
        <div class="partyPoint">
            <p>出会いの秋企画<br>
              婚歴者、婚歴理解者の独身限定★４０代中心のお洒落なデザイナーズイタリアンで美味しいイタリアンコースとお酒を堪能しながらわいわい楽しく婚活★恋活のきっかけつくりのパーティーに参加しませんか？...
            </p>
        </div>
      </div>
  </div>
  <div class="entryBox">
    <ul>
        <li><a class="btnWhite" href="#">詳細はこちら</a></li>
        <li><a class="btnGold" href="#">ご予約はこちら</a>
    </ul>
 </div>
</section>

<section class="blogcard">
  <a href=#>
    <div class="parts">
      <div class="blogcard_thumbnail">
        <img class="event_picture" src="https://luciace.com/wp-content/uploads/2020/11/event_44-150x150.jpg" data-lazy-type="image" data-src="https://luciace.com/wp-content/uploads/2020/11/event_44-150x150.jpg" alt="12/6(日)【35歳～52歳限定 カジュアル梅田飲み会】40名規模☆" width="120" height="120"><noscript><img src="https://luciace.com/wp-content/uploads/2020/11/event_44-150x150.jpg" alt="12/6(日)【35歳～52歳限定 カジュアル梅田飲み会】40名規模☆" width="120" height="120" /></noscript>
      </div>
      <div class="blogcard_content">
        <div class="blogcard_title">12/6(日)【35歳～52歳限定 カジュアル梅田飲み会】40名規模☆</div>
        <div class="blogcard_excerpt">＼毎回満席のため、お申し込みはお早めに／ 【コロナ対策について】 アルコール消毒液の実地、マスク無料配布、非接触体温計での測定(37.5℃以上は参加できません)、コロナ対策も徹底的に管理してい…</div>
      </div>
    </div>
</section>
  </div>
<div class="sidebar">
  
</div>  

</aside>

@endsection