<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <title>俺のグルメナビ</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="">
        <div id="top-title" class="col-xs-offset-1">
            <h1>俺のグルメナビ</h1>
        </div>
        <div class="col-xs-offset-2">
            <form method="post" action="{{url('results')}}">
                    {{csrf_field()}}
                    @csrf
                    <h3>今どこ？</h3>：
                        <select name="place" class="select-box">
                            <option value="新宿駅">新宿</option>
                            <option value="東京駅">東京</option>
                            <option value="池袋駅">池袋</option>
                            <option value="渋谷駅">渋谷</option>
                            <option value="上野駅">上野</option>
                            <option value="秋葉原駅">秋葉原</option>
                            <option value="有楽町駅">有楽町</option>
                        </select>
                    <br>
                    <h3>何食べる？</h3>：
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
                    <br>
                    <br>
                    条件：<br>
                    <input class="lunch" name="lunch" type="checkbox" value=>ランチ営業あり<br>
                    <input class="no_smoking" name="no_smoking" type="checkbox" value=>禁煙席あり<br>
                    <input class="bottomless_cup" name="bottomless_cup" type="checkbox" value=>飲み放題あり<br>
                    <input class="private_room" name="private_room" type="checkbox" value=>個室あり<br>
                    <input class="e_money" name="e_money" type="checkbox" value=>電子マネー利用可<br>
                    <input class="breakfast" name="breakfast" type="checkbox" value=>モーニングあり<br>
                    <input class="wifi" name="wifi" type="checkbox" value=>wifiあり<br>

                    <button id="submit_button" class="btn btn-info col-xs-offset-4" type="submit" name="検索">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        検索
                    </button>
                </form>

            
                
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#submit_button').click(function(){
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