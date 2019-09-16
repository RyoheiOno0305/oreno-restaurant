<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- bootstrapの読み込み -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- タイトル -->
    <title>俺のグルメナビ</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <h2 class="title">俺のグルメナビ</h2>
    </nav>
    <div class="col-md-offset-1">
        <div class="col-md-offset-2">
            <form class="col-md-offset-1 " method="post" action="{{url('results')}}">
                    {{csrf_field()}}
                    @csrf
                    <br>
                    <br>
                    <p>今どこ？：
                    <!-- 場所は駅で指定　例 新宿＝新宿駅 -->
                        <select name="place" class="select-box">
                            <option value="新宿駅">新宿</option>
                            <option value="東京駅">東京</option>
                            <option value="池袋駅">池袋</option>
                            <option value="渋谷駅">渋谷</option>
                            <option value="上野駅">上野</option>
                            <option value="秋葉原駅">秋葉原</option>
                            <option value="有楽町駅">有楽町</option>
                        </select>
                    　　　　
                       何食べる？：
                        <select name="name" class="select-box">
                            <option value="ステーキ">ステーキ</option>
                            <option value="パスタ">パスタ</option>
                            <option value="ピザ">ピザ</option>
                            <option value="そば">そば</option>
                            <option value="うどん">うどん</option>
                            <option value="うなぎ">うなぎ</option>
                            <option value="焼き鳥">焼き鳥</option>
                            <option value="しゃぶしゃぶ">しゃぶしゃぶ</option>
                            <option value="お好み焼き">お好み焼き</option>
                            <option value="餃子">餃子</option>
                            <option value="ラーメン">ラーメン</option>
                            <option value="つけ麺">つけ麺</option>
                            <option value="カレー">カレー</option>
                            <option value="焼肉">焼肉</option>
                            <option value="ジンギスカン">ジンギスカン</option>
                        </select>
                    </p>
                    <br>
                    
                     フリーワード検索：<input class="freeword" type="text">
                    <br>
                    <br>
                    条件：<br>
                    <div class="condition-box col-md-offset-1">
                        <ul>
                            <li class="condition"><input class="lunch" name="lunch" type="checkbox" value=>ランチ営業あり</li>
                            <li class="condition"><input class="no_smoking condition" name="no_smoking" type="checkbox" value=>禁煙席あり</li>
                            <li class="condition"><input class="bottomless_cup condition" name="bottomless_cup" type="checkbox" value=>飲み放題あり</li>
                            <li class="condition"><input class="private_room condition" name="private_room" type="checkbox" value=>個室あり</li>
                            <li class="condition"><input class="e_money condition" name="e_money" type="checkbox" value=>電子マネー利用可</li>
                            <li class="condition"><input class="breakfast condition" name="breakfast" type="checkbox" value=>モーニングあり</li>
                            <li class="condition"><input class="wifi condition" name="wifi" type="checkbox" value=>wifiあり</li>
                        </ul>
                    </div>
                    <button id="submit_button" class="btn btn-info col-xs-offset-4" type="submit" name="検索">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        検索
                    </button>
                </form>

            
                
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#submit_button').click(function(){
                            // 0で絞り込みなし、1で絞り込みあり
                            if($('.lunch').prop('checked')){
                                $('.lunch').val("1");
                            }else{
                                $('.lunch').val("0"); 
                            }
                            if($('.no_smoking').prop('checked')){
                                $('.no_smoking').val("1");
                            }else{
                                $('.no_smoking').val("0"); 
                            }
                            if($('.bottomless_cup').prop('checked')){
                                $('.bottomless_cup').val("1");
                            }else{
                                $('.bottomless_cup').val("0"); 
                            }
                            if($('.private_room').prop('checked')){
                                $('.private_room').val("1");
                            }else{
                                $('.private_room').val("0"); 
                            }
                            if($('.e_money').prop('checked')){
                                $('.e_money').val("1");
                            }else{
                                $('.e_money').val("0"); 
                            }
                            if($('.breakfast').prop('checked')){
                                $('.breakfast').val("1");
                            }else{
                                $('.breakfast').val("0"); 
                            }
                            if($('.wifi').prop('checked')){
                                $('.wifi').val("1");
                            }else{
                                $('.wifi').val("0"); 
                            }
                        });
                    });
                </script>
            </div>
        </div>
</body>