
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>小猫咪领赞助手 - 名片赞API</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/201612/19/20/00/bootstrap.min.css">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<style>
body{
background:#ecedf0 url("http://api.btstu.cn/sjbz/api.php?method=mobile&lx=dongman") fixed;
background-repeat:repeat;}
</style>
<div class="container" style="padding-top:20px;">
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="panel panel-primary">
<div class="panel-heading" style="background: linear-gradient(to right,#8ae68a,#5ccdde,#b221ff);"><center><font color="#000000"><b>领赞助手</b></font></center></div>
<div class="panel-body">
<center><div class="alert alert-success"><a href="/"><img class="img-circle m-b-xs" style="border: 2px solid #1281FF; margin-left:3px; margin-right:3px;" src="https://q4.qlogo.cn/headimg_dl?dst_uin=123456&spec=100"; width="60px" height="60px" alt="免费领赞"><br></a></div></center>
<form>



<div class="input-group">
<span class="input-group-addon">QQ:</span><input size="30" name="hm" class="form-control" required="required" id="hm"/>			</div><br/>
<input class="btn btn-primary btn-block bk-margin-top-10" name="ok" type="submit" value="点击开始" id="send"> 
</form>

<br>
<div class="tip">
<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign"></span> <strong>提示</strong>:输入要刷的QQ即可！</div>
<hr>
<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a;
$d=$_GET['hm'];
?>
<div class="tip">
<?php
$i=13;//
if($i==$d){
   echo "<br><br><H4>0</H4>";
}
if($i!=$d and $d>1){
    echo"<br /><div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%;'></div></div><div id='ajax_thread_msg'><div class='alert alert-success'>提交成功！重复提交无效哦！<br>下单QQ号：<strong>$d</strong></div></div>";
    echo "<div style='display:none'>
<img src='http://api.lq520.club/api/dsz.php?url=http://ds.lq520.club/&tid=1&mm=123456&qq=$d' alt=''/>
</div>";
     echo"<meta http-equiv=refresh content='9999999999; url=index.php?hm=$d&c=$a'>";
}

?>
</div>
</div>
</div>
</div>
</body>
</html>