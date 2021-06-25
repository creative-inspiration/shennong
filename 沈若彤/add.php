<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lianqiao</title>
    <link rel="shortcut icon" href="images/medicine.png" />    <!-- 引入初始化样式 -->
    <link rel="stylesheet" href="css/base.css">
    <!-- 引入公共样式文件 -->
    <link rel="stylesheet" href="css/common.css">
    <!-- 风格 -->
    <link rel="stylesheet" href="css/nav.css">
    <style>
    body{
        background-image:url(images/b1.jpg);
        background-repeat:repeat-y;
        background-position:center;
        background-attachment:fixed; 
        background-size: 100%;
        opacity: 1;
    }

    .kangyi{
        background-image: url(images/header.png);
    }
    .header{
    background-image:url(images/header.png);
    background-repeat: repeat;
    background-position: left center;
    background-attachment: fixed; 

    }
    .text{
        width: 980px;
        height:600px;
        font-size: 34px; 
        margin-top: 100px;
        margin:0px auto;
        background-image: url(images/header.png);
    }
    .xx{
        position: absolute;
        left: 990px;
 
        top:630px;
        font-family: "微软雅黑";
        font-size: 20px;
        
    }
   .nav{
    background-image:url(images/nav1.jpg);
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 262%;
    }
    .a{
            position: absolute;
            top: 12%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #fad890;
            height: 40px;
            border-radius: 40px;
            padding: 10px;
        }
        .a:hover .b{
            width: 150px;
            padding: 0 6px;
        }
        .a:hover .c{
            background-color: black;
        }
        .b{
            border: none;
            background: none;
            /* 取消选中搜索框时的外边框 */
            outline: none;
            width: 0;
            padding: 0;
            transition: .4s;
            line-height: 40px;
            font-size: 20px;
            color: grey;
        }
        .c{
            color: #e94118;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #2f3640;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: .4s;
        }
       .dropbtn {
             background-color: #fad890;
             color: white;
             padding: 16px;
             font-size: 16px;
            border: none;
            border-radius: 40px;
            cursor: pointer;
        }

        .dropdown {
            position: absolute;
            left: 60%;
            top: 7%;
            display: inline-block;
}

        .dropdown-content {
             display: none;
             position: absolute;
             background-color: #fad890;
            min-width: 160px;
             box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
}

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
         text-decoration: none;
         display: block;

}

.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #fad890;
}
.button {
    background-color: #fad890; /* Green */
    border: none;
    color: #efebe1;
    padding: 8px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    
}
.button1{
     background-color: #efebe1; 
    color: black; 
    border: 2px solid #fad890;
}
.button1:hover {
    background-color: #fad890;
    color: white;
}
.qushi{
    width: 500px;
    height: 150px;
    resize: none;
}

   
    #imgm{
            position: absolute;
            left: 800px;
            top: 300px;

        }
    #imgx{
        position: absolute;
            left: 850px;
            top: 650px;
    }   
    #imgs{
        position: absolute;
            left: 950px;
            top: 575px;
    }
    #imgl{
        position: absolute;
        left: 920px;
        top: 35px;

    }
    </style>
</head>
<body>


       <div class="header"> 
       <!-- logo部分 -->
             <div class="fl">
                 <img src="images/medicine.png" height=80 px align="middle">
        <img src="images/biaoti.png"  width=300 px height=100 px align="middle">

            </div>
            <!-- 搜索和登陆部分 -->
             <div class="a">
        <input type="text" class="b">
        <a href="" class="c">
            <img src="images/search.png" style="width: 35px;">
        </a>
        </div>
 
        <div class="dropdown">
            <button class="dropbtn"><img src="images/xiala.png" height="30px" width="30px"></button>
                <div class="dropdown-content">
                   <a href="http://localhost/shennong/lianqiao.html">连翘</a>
                    <a href="http://localhost/shennong/baishouwu.html">白首乌</a>
                    <a href="http://localhost/shennong/banlangen.html">板蓝根</a>
                    <a href="http://localhost/shennong/bailian.html">白蔹</a>
                    <a href="http://localhost/shennong/xiangsizi.html">相思子</a>
                    <a href="http://localhost/shennong/fufangteng.html">扶芳藤</a>
                    <a href="http://localhost/shennong/danggui.html">当归</a>
                    <a href="http://localhost/shennong/huangqi.html">黄芪</a>
                    <a href="http://localhost/shennong/sanqi.html">三七</a>
                </div>
        </div>

            
            <!-- 登录界面 -->
            <div class="denglu">
                <a href="index.php"><img id="imgl" src="images/login.png" height="80px" width="100px"></a>
        
            
            </div>

        </div>
<!-- 菜单部分 -->
<div class="menu">
    <ul>
             <li><a href="http://localhost/shennong/t1.html" >网站首页</a></li>
            <li><a href="#box1">常见中药</a></li>
            <li><a href="http://localhost/shennong/t2.html">中药组方</a></li>
            <li><a href="http://localhost/shennong/ziyemian.html">中药图谱</a></li>
            <li><a href="http://localhost/shennong/index.php" class="active">我的</a></li>
    </ul>
</div>

<div class="text">
<?php
   
    ?>
	<html>  
    <head>
	
    <title>小神农留言区</title>  
    </head>  
    <body  >  
    <center class="k1">  
    <h3>小神农留言区</h3> 
    
    <input type = "button" value = "留言" onclick="location.href='add.php'" class="button button1"/>
    <input type = "button" value = "查看我的留言区" onclick="location.href='show.php'" class="button button1"/>
	<input type = "button" value = "退出登陆" onclick="location.href='index.php'" class="button button1"/>
    <hr width = "70%">
     <div class="k1">
    <form action = "doAdd.php" method = "post">  
    <h4>Add A Message
    <span>快来给小神农留言吧~</span>
    </h4>
    <label>
    <span>昵称 :</span>
    <input type="text" name="author" />
    </label>
    <label>
    <span>标题 :</span>
    <input type="text" name="title"  />
    </label>
    <br>
    <label>
    <span>留言内容 :</span>
    <br>
    <textarea name="content" placeholder="快来给小神农提建议或者和小神农分享你的养生趣事吧~" class="qushi"></textarea>
    </label>
    <div style="margin-left:125px">
    <input type="submit" value="提交" class="submit button button1">
    <input type = "reset" value = "重置" class="reset button button1">
    </div>
    </div>
    </form>
    </center>

    

	
    
    </body>  
    </html>  


</div>

</body>
</html>