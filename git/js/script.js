$(function() {
    $('.o-button').click(function() { // ボタンがクリックされたら
        $('.l-side').toggleClass('active'); // ナビにクラスを付与
        $('.o-dli-close').toggleClass('one'); // ×にクラスを付与
    })
});

// $(function() {
// alert('OK!');
// });