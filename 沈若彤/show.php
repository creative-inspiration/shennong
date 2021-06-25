    <?php
    header('Content-type: text/html; charset=UTF8');
    session_start();
    ?>
	<html>  
    <head>  
    <title>小神农发帖区</title> 
	
    <meta charset="UTF-8">
    <title>lianqiao</title>
    <link rel="shortcut icon" href="images/medicine.png" />
    <!-- 引入初始化样式 -->
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
        height:1200px;
        font-size: 15px;
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
.ds-post-main {
    position: relative;
    width: 500px;
    margin-left: auto;
    margin-right: auto;
}
.ds-comment-body {
    z-index: 1;
    position: relative;
    left: 0;
    background: #f2dbab;
    padding: 15px 15px 15px 30px;
    color: #696A52;
    border:2px;
    border-radius: 5px;
    box-shadow: 0 1px 2px rgba(0,0,0,.15), 0 1px 0 rgba(255,255,255,.75) inset;
}
.ds-comment-body {
    color: #696A52;
}
.ds-avatar {
    z-index: 2;
    position: absolute;
    top: 48px;
    left: -20px;
    padding: 5px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    box-shadow: -1px 0 1px rgba(0,0,0,.15) inset;
}
.ds-avatar a {
    display: block;
    padding: 1px;
    width: 32px;
    height: 32px;
    border: 1px solid #B9BAA6;
    border-radius: 50%;
    background-color: #fff;
    -moz-transition: color 0.15s linear;
    -webkit-transition: color 0.15s linear;
    transition: color 0.15s linear;
}
    #ap{
            resize: none;
            width: 675px;
            height: 1000px;
            margin:0px auto;
            border:none;
            background-color: transparent;
            font-family: "楷体";
            font-size: 20px;

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
    .display{
        font-size: 8px;
    }
    </style>
    </head>  
    <body background="./images/7.jpg" style="background-size:cover;background-attachment: fixed; font-size: 8px" >  
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
            <li><a href="http://localhost/shennong/t1.html#box1">常见中药</a></li>
            <li><a href="http://localhost/shennong/t2.html">中药组方</a></li>
            <li><a href="http://localhost/shennong/ziyemian.html">中药图谱</a></li>
            <li><a href="http://localhost/shennong/index.php" class="active">我的</a></li>
    </ul>
</div>
<div class="text">
    <center>  
     <h2 style="font-size: 34px">小神农留言板</h2>  
    <input type = "button" value = "留言" onclick="location.href='add.php'" class="button button1"/>
    <input type = "button" value = "查看我的留言区" onclick="location.href='show.php'" class="button button1"/>
	<input type = "button" value = "退出登陆" onclick="location.href='index.php';logout()" class="button button1"/>
    <hr width = "70%"> 
	</center>
       <?php  
        //数据库连接  
        $con = @mysqli_connect("127.0.0.1","root","123456","my1");  
        if(!$con){  
            die("数据库连接错误".mysqli_connect_error());  
        }  
        mysqli_query($con,"set names 'utf8'");  
        //显示每页的留言数  
        $pagesize = 8;  
        //确定页数p参数  
        @$p = $_GET['p']?$_GET['p']:1;  
        //数据指针  
        $offset = ($p-1)*$pagesize;  
        //查询本页现实的数据 
		
        $id=$_SESSION["uid"];
        $query_sql = "select * from tbl_ms1 where user= '$id' order by user desc limit $offset,$pagesize";  
        # echo $query_sql;  
        $result = mysqli_query($con,$query_sql);  
		/*if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}*/
        //循环输出  
		echo "<div style='margin-top:55px'>";
		while($res = mysqli_fetch_array($result)){
			echo "<div class='k'>";
			echo "<div class='ds-post-main'>";
			echo "<div class='ds-comment-body'>
			&emsp;&emsp;<span style='font-weight:700 ;font-size:18px'>{$res['author']}    {$res['time']} </span>
			<span style='float:left'><a href = 'del.php?id=".$res['id']."'><input type='submit' class='button1' value='删除'></input></a></span>
			<p style='font-size:15px;'>&emsp;标题 : {$res['title']}   用户名 : <span>{$res['user']}</span></p>
            <hr width=450px>  
			<p>{$res['liuyan']}</p></div><br>";
			echo "</div>";
			echo "</div>";
        }
		echo "</div>";
        //分页代码  
        //计算留言总数  
        $count_result = mysqli_query($con,"select count(*) as count from tbl_ms1 where user= '$id'");  
        $count_array = mysqli_fetch_array($count_result);  
      
        //计算总的页数  
        $pagenum = ceil($count_array['count']/$pagesize);  
        //echo '共',$count_array['count'],'条留言';  
		//echo '共',$pagenum,'页';
        echo "<center>";
        echo "<div style='display: inline-block;margin-right: 15px;margin-left:15px;'>",'共',$count_array['count'],'条留言','</div>';  
		echo "<div style='display: inline-block;margin-right: 15px;margin-left:15px;'>",'共',$pagenum,'页','</div>';  
      
        //循环输出个页数及链接  
        if($pagenum>1){  
            for($i = 1;$i<=$pagenum;$i++){  
                if($i == $p){  
                    echo "<div style='background:#e8ffc4;width:25px;display: inline-block;margin-right: 10px;'>",$i,"</div>";
                      
                }else{  
                    //echo  '<a href="show.php?p=',$i,'">',$i,'</a>';
					echo '<a href="show.php?p=',$i,'">',"<div style='width:25px;display: inline-block;margin-right: 10px;background:#FF9D6F'>",$i,'</div>','</a>';
                }
            }
	echo "<div style='display: inline-block;margin-right: 10px;'>",'当前在 ',$p, ' 页',"</center></div>";
        }
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "</div>";
    ?>
	<script type="text/javascript"> 
      function logout(){ 
        <% 
          session.invalidate(); //运用invalidate()比较好，退出时使session失效
        %> 
      }
    </script>
    </div>
    </body>  
    </html> 