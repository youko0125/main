$(function() {
    $('.o-button').click(function() { // ボタンがクリックされたら
        $('.l-side').toggleClass('active'); // ナビにクラスを付与
        $('.o-dli-close').show();
    });
    $('.o-dli-close').click(function() {
        $(this).toggleClass('open'); // ×にクラスを付与
        $('.l-side').toggleClass('active')
    });
});