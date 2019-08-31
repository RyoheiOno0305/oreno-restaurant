<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <title>俺のグルメナビ</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="js/slick.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
</head>

    <body>
        @foreach($results["rest"] as $result)
            <div class="result-table">
                <p>{{$result["name"]}}</p>
                <ul class="slider">
                    @if(empty($result['image_url']['shop_image1']))
                        <li><a href="#"><img src="/images/no-image.png" alt=""></a></li>
                    @elseif(empty($result['image_url']['shop_image2']))
                        <li><a href="#"><img src="/images/no-image.png" alt=""></a></li> 
                    @else
                        <li><a href="#"><img src="{{ $result['image_url']['shop_image1'] }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ $result['image_url']['shop_image2'] }}" alt=""></a></li>
                    @endif
                </ul>
                <br><a href="{{ $result['url'] }}">このお店のURL</a>
            </div>
        @endforeach

        <script type="text/javascript">
            $(document).ready(function(){

                $('.slider').slick({
                    autoplay:true,
                    autoplaySpeed:5000,
                    dots:true,
                });
                
            });
        </script>
    </body>
</html>


