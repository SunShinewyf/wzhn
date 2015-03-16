<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <link rel="shortcut icon" type="image/x-icon" href="__PUBLIC__/images/icon/title.png"/>
   <title>玩转华农</title>
   <meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
   <head>
       <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/admin.css"/>
       <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/left.css"/>
       <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css"/>
       <script type="text/javascript"  src="__PUBLIC__/js/jquery.min.js"></script>
	   <script type="text/javascript"  src="__PUBLIC__/js/left.js"></script>
	   <script type="text/javascript" charset="utf-8" src="__PUBLIC__/editor/ueditor.config.js"></script>
       <script type="text/javascript" charset="utf-8" src="__PUBLIC__/editor/ueditor.all.min.js"> </script>
       <script type="text/javascript" charset="utf-8" src="__PUBLIC__/editor/lang/zh-cn/zh-cn.js"></script>
       
   </head>
    <body>
      <div id="header">
          <div class="header-left">
              <p style="float:left;">玩转华农后台管理系统</p>
          </div>
          <div class="header-right">
             <a  href="#"><img src="__PUBLIC__/images/static/home.png"><font class="go-home">首页</font></a>
             <a href="#"><img src="__PUBLIC__/images/static/LoginOut.png"><font class="go-out">退出</font></a>
          </div>
      </div>
      
  </body>
  </html>

  <div id="sidebar">
            <div class="person">
          <div class="person-img"><img src="__PUBLIC__/images/static/person.png"/></div>
          <p class="welcome">某某你好</p>
       </div>
	   <div id="left">
		  <ul class="accordion">
	   <li id="zero" class="home"><a href="#zero">首页</a>
	   <li id="one" class="manger"> <a href="#one">管理员管理</a>
		  <ul class="sub-menu">
			<li><a href="">管理员列表</a></li>
			<li><a href="">添加管理员</a></li>
		  </ul>
	   </li>
	   <li id="two" class="info"> <a href="#two">资讯管理</a>
		  <ul class="sub-menu">
			<li class="word"><a href="">资讯列表</a></li>
			<li class="word"><a href="">资讯添加</a></li>
		  </ul>
	   </li>
	   <li id="three" class="module"> <a href="#three">模块管理</a>
		  <ul class="sub-menu">
			<li><a href="">模块列表</a></li>
			<li><a href="">添加模块</a></li>
		  </ul>
	   </li>   
	  </ul>
	  <div class="desc">
	     <p>Powered by 沸点工作室</p>
	  </div>
	</div>		
   </div>
  
  <div id="main">
      <div class="page-title">
            	添加资讯&nbsp;&nbsp; 
      </div>
         
         <div class="catalog">
             <a href="">首页</a>&nbsp;>&nbsp;<a href="">添加资讯</a>
         </div>
         
         <div class="parts">
           <div class="part-desc">
            <h>模块说明</h>
            <p1>本模块只能由超级管理员才能更改，在该模块中，你可以浏览各个模块，还可以对模块进行添加</p1>
           </div>
         </div>
         
         <div class="parts" style="width:540px;">
           <div class="module-list">
              <h style="width:520px">模块列表</h>
              <table style="width:540px">
                 <tr>
                    <th>编号</th>
                    <th>模块名</th>
                    <th>模块创立时间</th>
                    <th>模块备注</th>
                    <th>操作</th>
                 </tr>
              
              </table>
              </div>
           </div>
           
           <div class="parts" style="width:492px;margin-left:10px">
              <div class="module-add">
                 <h style="width:472px;">模块添加</h>
                 <form action="" method="post">
                      <label for="name">*模块名</label>
                      <input type="text" name="nickname" id="nickname" class="box-control" placeholder="填写模块名称" autocomplete="off"/>
                      <label for="manger">*模块管理员</label>
                      <select class="box-control">
                         <option value="0" selected>root管理员</option>
                         <option value="1">普通管理员</option>
                      </select>
                      <input type="submit" id="btn" value="添加"/>
                 </form>
              </div>
           </div>
     </div>
  
  </body>
  </html>