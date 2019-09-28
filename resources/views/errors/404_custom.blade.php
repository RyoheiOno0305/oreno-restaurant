<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <!-- cssの読み込み -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- bootstrapの読み込み -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <title>俺のグルメナビ</title>
    </head>
    <body>
        <p class="error-message">該当するレストランは見つかりませんでした</p>
        <a class="back_btn btn btn-success" href="{{ url('genre_search') }}">検索に戻る</a>
    </body>
</html>