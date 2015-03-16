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
            	资讯列表&nbsp;&nbsp;
      </div>
         
         <div class="catalog">
             <a href="">首页</a>&nbsp;>&nbsp;<a href="">资讯列表</a>
         </div>
         
         <div class="parts" style="width:452px;">
            <div class="part-desc">
               <h style="width:430px;">板块说明</h>
               <p1>本版块用于查看已经发表的文章。还有文章搜索功能，你还可以点击按钮<font><a href="">写新文章</a></font></p1>
            </div>
          
         </div>
         <div class="parts" style="width:574px;margin-left:20px;height:156px;">
             <h style="width:553px">搜索</h>
             <form id="search-news" action="" method="post">
                   &nbsp;&nbsp;<span>搜索选项</span>&nbsp;&nbsp;:
                   <select id="option" name="option-key" class="select-control">
                        <option selected value="0">按标题：</option>
                        <option value="1">按上传者:</option>
                        <option value="2">阅读量</option>
                    </select>
                    
                    <input type="text" name="key" class="select-control" style="width:230px;"/>
                    <input type="submit" id="sea-btn" value="搜索"/>
                    
                    &nbsp;&nbsp;<span>选择模块</span>&nbsp;&nbsp;: 
                    <select id="option" name="module" class="select-control" style="margin-top:-12px">
                       <option value="0" selected>看电影</option>
                       <option value="1">校园活动</option>
                    </select>
                    </br>  </br>
                     &nbsp;&nbsp;<span>对当前结果</span>&nbsp;&nbsp;: 
                     <font><a href="">按发布时间排序</a></font>  &nbsp;&nbsp;<font><a href="">按阅读量排序</a></font>&nbsp;&nbsp;<font><a href="">按最近修改排序</a></font>
             
             </form>
         </div>
         <div class="parts">
            <div class="news-list">
                <h>资讯列表</h>
                <table>
                    <tr>
                       <th>编号</th>
                       <th>标题</th>
                       <th>作者</th>
                       <th>内容</th>
                       <th>所属模块</th>
                       <th>图片</th>
                       <th>发布日期</th>
                       <th>更新时间</th>
                    
                    </tr>
                
                </table>
            
            </div>
          
         </div>
    
   
  </div>
    
  </body>
  </html>