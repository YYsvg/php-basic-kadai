<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題連想配列</title>
</head>
<body>
    <p>
        <?php
        $onion = [
            '名前'=> '玉ねぎ'.'<br>',
            '値段' => '200'.'<br>',
            '産地'=>'北海道'.'<br>'
        ];
        foreach($onion as $key => $value){
            echo "{$key}:{$value}";
        }
        ?>
    </p>    
</body>
</html>