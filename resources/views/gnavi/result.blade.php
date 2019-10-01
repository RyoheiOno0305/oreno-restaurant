


<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- cssの読み込み -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- bootstrapの読み込み -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- slickerの読み込み -->
    <link href="js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="js/slick.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- FontAwesomeの読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- タイトル -->
    <title>俺のグルメナビ</title>
</head>
    <body>
        
        
        
            @foreach($results["rest"] as $result)
            <br>
            <br>
                <div class="result-table col-md-offset-2 col-md-8">
                    <h3><a href="{{ $result['url'] }}">{{$result["name"]}}</a></h3>
                    <div class="slider-box">
                        <ul class="slider col-md-4">
                            @if(empty($result['image_url']['shop_image1']))
                                <li><a href="#"><img src="/images/no-image.png" alt="" ></a></li>
                            @elseif(empty($result['image_url']['shop_image2']))
                                <li><a href="#"><img src="/images/no-image.png" alt="" ></a></li> 
                            @else
                                <li><a href="#"><img src="{{ $result['image_url']['shop_image1'] }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ $result['image_url']['shop_image2'] }}" alt=""></a></li>
                            @endif
                        </ul>
                        <div class="introduction　col-md-offset-2 col-md-8">
                            <p class="info">{{$result['pr']['pr_long']}}</p>
                            <p class="tel">電話番号：{{$result['tel']}}</p>
                            <p class="address">住所：{{$result['address']}}</p>
                            <br>
                            <a class="coupon" href="{{$result['coupon_url']['pc']}}">クーポンpc</a>
                            <a class="coupon" href="{{$result['coupon_url']['mobile']}}">クーポンmobile</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <a class="fixed_btn btn btn-success" href="{{ url('genre_search') }}">検索に戻る</a>

        
        
        

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


