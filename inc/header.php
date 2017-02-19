<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $page_title;?>汽车人招聘网</title>

    <!-- Bootstrap -->
    <link href="/css/df.css" rel="stylesheet"> 
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href=" /favicon.ico" /> 
  </head>
  <body>


 <nav class="navbar-fixed-top">
    <div  class="navbar navbar-inverse"> 
          <div class="container">
              <div class="navbar-header">
                  <a class="navbar-brand" href="./">汽车人招聘网</a>
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="/" onclick="topnav_hide()">首页推荐</a></li>
                        <li><a href="/default.php#xinpian" onclick="topnav_hide()">职位搜索</a></li>
                        <li><a href="/default.php#about" onclick="topnav_hide()">我的简历</a></li>
                        <li><a href="/default.php#lianxi" onclick="topnav_hide()">汽车圈</a></li>
                      </ul>
              </div><!--/.navbar-header -->

              <ul class="nav navbar-nav navbar-right">
                      <li><a href="/default.php#top" onclick="topnav_hide()">金栋君</a></li>
                      <li><a href="/default.php#top" onclick="topnav_hide()"><i class="fa fa-envelope-o fa-lg"></i></a></li>
                      <li><a href="/default.php#xinpian" onclick="topnav_hide()"><i class="fa fa-sign-out fa-lg"></i></a></li>
                      <li><div class="btn btn-default navbar-btn btn-xs ui-m-r-10" >APP下载</div></li> 
                      <li><div class="btn btn-success navbar-btn btn-xs" >企业版</div></li> 
              </ul>
          </div>
      </div>
    <!--  -->
      <div  class="navbar navbar-default hidden" id="qyb_menu"> 
          <div class="container">       
                <ul class="nav navbar-nav">          
                  <li><a href="/default.php#xinpian" onclick="topnav_hide()">招聘中心</a></li>
                  <li><a href="/default.php#xinpian" onclick="topnav_hide()">职位管理</a></li>
                  <li><a href="/default.php#about" onclick="topnav_hide()">简历管理</a></li>
                  <li><a href="/default.php#lianxi" onclick="topnav_hide()">企业设置</a></li>
                  <li class="active"><a href="/default.php#top" onclick="topnav_hide()">公司主页</a></li>
                </ul>
          </div>
      </div>
      <!--  -->
    </nav>

    <?php asa?>