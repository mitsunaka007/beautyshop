// Topへ戻るボタンのJSコード - START
const pagetop_btn = document.querySelector(".pagetop");

pagetop_btn.addEventListener("click", scroll_top);

function scroll_top() {
  window.scroll({ top: 0, behavior: "smooth" });
}

window.addEventListener("scroll", scroll_event);
function scroll_event() {
  if (window.pageYOffset > 100) {
    pagetop_btn.style.opacity = "1";
  } else if (window.pageYOffset < 100) {
    pagetop_btn.style.opacity = "0";
  }
}

//スクロールすると下からふわっとテキストコンテンツを表示させるフェードイン機能 - START
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

  // ふわっ
  jQuery('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
    var elemPos = jQuery(this).offset().top-50;//要素より、50px上の
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight){
    jQuery(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
    }else{
    jQuery(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
    }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
  jQuery(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  jQuery(window).on('load', function(){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
//スクロールすると下からふわっとテキストコンテンツを表示させるフェードイン機能 - END

//フッターのタイトルを表示させるフェードイン機能 - START
function animateHead(){

  // ふわっ
  jQuery('.footerHead').each(function(){ //animate__rollInというクラス名が
    var elemPos = jQuery(this).offset().top-50;//要素より、50px上の
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight){
    jQuery(this).addClass('animate__rollIn animate__animated');// 画面内に入ったらanimatedというクラス名を追記
    }else{
    jQuery(this).removeClass('animate__rollIn animate__animated');// 画面外に出たらanimatedというクラス名を外す
    }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
  jQuery(window).scroll(function (){
    animateHead();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  jQuery(window).on('load', function(){
    animateHead();/* アニメーション用の関数を呼ぶ*/
  });
//フッターのタイトルを表示させるフェードイン機能 - END

//LINEの「友だち追加」を表示させるフェードイン機能 - START
function animateLINE(){

  jQuery('.lineHead').each(function(){ //animate__slideInUpというクラス名が
    var elemPos = jQuery(this).offset().top-50;//要素より、50px上の
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight){
    jQuery(this).addClass('animate__slideInUp animate__animated');// 画面内に入ったらanimatedというクラス名を追記
    }else{
    jQuery(this).removeClass('animate__slideInUp animate__animated');// 画面外に出たらanimatedというクラス名を外す
    }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
  jQuery(window).scroll(function (){
    animateLINE();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  jQuery(window).on('load', function(){
    animateLINE();/* アニメーション用の関数を呼ぶ*/
  });
//フッターのタイトルを表示させるフェードイン機能 - END

jQuery(function () {
  jQuery('#js-slider-2').slick({
    // arrows: true, // 前・次のボタンを表示する
    dots: true, // ドットナビゲーションを表示する
    appendDots: $('.dots-2'), // ドットナビゲーションの生成位置を変更
    speed: 1000, // スライドさせるスピード（ミリ秒）
    slidesToShow: 3, // 表示させるスライド数
    centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
    variableWidth: true, // スライド幅の自動計算を無効化
    autoplay: true
  });
});