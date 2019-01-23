<?php

//$home = file_get_contents('http://news.baidu.com/fashion');
////print_r($home);
//$body='/<span class="arrow">生活方式</span>.*<a href="http://www.qdaily.com/articles/24762.html" target="_blank" >柏林最酷的商场，变成了 3 万束鲜花的“风干”台</a>/is';
//preg_match($body,$home,$arr);
//print_r($arr);
//
//$res=new PDO( 'mysql:dbname=zk2;host=127.0.0.1','root','root');
//$sql='select * from news';
//foreach ($res->query($sql) as $row) {
//    print_r($row);
//}

//查询
//$arr=$res->query($sql);
//print_r($arr->fetch());

//删除
//$sql='delete  from news where id=1';
//print_r($res->exec($sql));

//添加
//$sql='insert into news (title,person) values (1,2)';
//print_r($res->exec($sql));
//$id=$_GET['id'];
//$filename=$id.'.html';
//if(file_exists($filename))
//{
//    echo "静态";
//    include "$filename";
//}else
//    {
//        $arr=$res->prepare("select * from news where id=$id");
//        $arr->execute();
//        $info=$arr->fetch();
//        ob_start();
//        include "moban.php";
//        file_put_contents($filename,ob_get_clean());
//        include "$filename";
//
//    }

$dbh = new PDO('mysql:host=127.0.0.1;dbname=zk2', 'root', 'root');
$id=$_GET['id'];
$filename=$id.'.html';
if(file_exists($filename))
{
   echo '静态';
   include "$filename";
}else
   {
       $arr=$dbh->prepare("select * from news where id=$id");
       $arr->execute();
       $info=$arr->fetch();
       ob_start();
       include "moban.php";
       file_put_contents($filename,ob_get_clean());
       include "$filename";
   }




