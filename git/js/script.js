$(function() {
    $('.o-button').click(function() { // ボタンがクリックされたら
        $(this).toggleClass('active'); // ボタン自身にactiveクラスを付与し
        // $('.l-side').toggleClass('panelactive'); // ナビゲーションにpanelactiveクラスを付与

    })
});

// $(function() {
// alert('OK!');
// });