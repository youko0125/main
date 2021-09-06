$(function() {
    $('.o-button').click(function() { // ボタンがクリックされたら
        $('.l-side').addClass('active'); // ナビにクラスを付与
    });
    $('.o-dli-close').click(function() {
        $('.l-side').removeClass('active')
    });
});