<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>学生成绩管理系统</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <style type="text/css">
        #Layer3 {
            position:absolute;
            width:976px;
            height:518px;
            z-index:2;
            left: 214px;
            top: 120px;
            background: url(imag/bg.jpg) no-repeat;
            background-size: 12vw,12vw;
        }
        .more {color: #999999}
        a:link {
            text-decoration: none;
        }
        a:visited {
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
            color: #33CCCC;
        }
        a:active {
            text-decoration: blink;
            color: #D8E8FA;
        }
        .STYLE4 {
            font-size: 24px;
            font-weight: bold;
        }
        .STYLE5 {color: #373737}
        .STYLE6 {color: #666666}
        .STYLE8 {color: #EB1A5B}
        .STYLE9 {font-size: 12px}


    </style>
</head>
<body>
<div>
    <div id="Layer3" align="center">
        <form id="form1" name="form1" method="post" action="login-ok.php">
            <p>&nbsp;</p>
            <div >
                <table width="350" height="254" border="0" align="center" >
                    <tr >
                        <td colspan="2">
                            <div align="center" class="STYLE4">
                                <div align="left" class="STYLE5"></div>
                            </div>
                        </td>
                    </tr><tr>
                        <td width="76" height="102">
                            <div align="center" class="more">用户ID：</div></td>
                        <td width="250"><label>
                                <div align="center">
                                    <label> <input type="text" name="user"  class="text" placeholder="输入学号(学生)/工号(教师)"/>
                                    </label>
                                </div>
                            </label></td>
                    </tr><tr>
                        <td><div align="center" class="more">密&nbsp; 码：</div></td>
                        <td><div align="center">
                                <label><input type="password" name="psd"  class="text"/></label>
                            </div>
                        </td>
                    </tr><tr >
                        <td colspan="2"><div align="center" style=" height:60px"><br>
                                <p><input name="submit" type="submit" class="btn47"  style="background-color:#FFFFFF; width:80px; height:30px;"onmouseover="this.style.backgroundPosition='left -90px';this.style.color='#336699';" onmouseout="this.style.backgroundPosition='left top';this.style.color='#097b96';" value="登录" /></p>
                                <p>&nbsp;</p>
                                <p align="right" class="STYLE9"><span class="STYLE6">还没账号？请先</span><span class="STYLE8"><a href="register.php">注册</a></span></p>
                            </div></td></tr>
                </table>
            </div>
        </form>
    </div>
</div>
</body>
</html>
