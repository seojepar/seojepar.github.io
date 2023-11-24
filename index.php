<!DOCTYPE html>
<html>
<head>
    <title>Whitehole</title>
    <meta charset="utf-8">
</head>
<body>
    <h1><a href="index.html">Computer Organizations</a></h1>
    <ol>
        <?php
        $lists = scandir('data');
        foreach($lists as $list){
            if(in_array($list, ['.','..']))
                continue;
            ?>
            <li><a href="index.php?id=<?=$list?>"><?=$list?></a></li>
            <!--id가 뭔지에 대해 알아보기-->
            <?php
        }
        ?>
    </ol>
    <h2><?=$_GET['id']?></h2>
    <!--URL로 넘어온 id의 값-->
    <?=file_get_contents("data/{$_GET['id']}")?>
</body>
</html>
<!--파일 개수가 많아질것 같아서 PHP나 MySQL을 공부해야될 필요성이 느껴졌다.
하지만 gituhub Pages는 static 서버이므로 데이터베이스를 지원하지 않고 그저 html만 읽어서 처리해주기 때문에 (대충) 새로운 https://www.000webhost.com/  서버를 구해서 다시 시작해야겠다는 생각도 들었다.
그리고 직접 웹사이트를 만들어보니 여러개의 파일이 추가될때마다 관리를 안해줘도 되는 PHP의 강력성에 대한 감이 왔고, 그래서 대충 한번 걍 공부해보기로 다짐했다.-->
