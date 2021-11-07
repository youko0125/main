$(function() {
    $('.o-button').click(function() { // ボタンがクリックされたら
        $('.l-side').addClass('active'); // ナビにクラスを付与
    });
    $('.o-side_button').click(function() {
        $('.l-side').removeClass('active')
    });
});