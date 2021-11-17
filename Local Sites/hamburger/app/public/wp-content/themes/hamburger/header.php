<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="Hamburger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hamburger</title>
    <script src="https://kit.fontawesome.com/055b8d114c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="l-module">
        <div class="l-content">
            <header class="l-header">
                <div class="p-header">
                    <h1 class="p-header_title l-header_title_color">Hamburger</h1>
                    <div class="o-button">Menu</div>
                    <form class="p-header_form">
                        <button type="submit" class="l-label l-label_color">
                    <div class="search icon"></div>
                </button>
                        <input type="submit" value="検索" class="l-qanda l-qanda_color">
                    </form>
                </div>
            </header>