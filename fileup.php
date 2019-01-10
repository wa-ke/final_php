<?php
require_once "conn.php";
define('MAX_SIZE',2000000);
define('URL',dirname(__FILE__).'\uploads');
if (!is_dir(URL)) {
    mkdir(URL,0777);
}

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    if (!@move_uploaded_file($_FILES['userfile']['tmp_name'],URL.'/'.$_FILES['userfile']['name'])) {
        echo "<script>alert('移动失败');history.back();</script>";
        exit;
    }
} else {
    echo "<script>alert('临时文件夹找不到上传的文件');history.back();</script>";
    exit;
}
$filename=$_FILES['userfile']['name'];
$url="uploads/".$_FILES['userfile']['name'];
$sql="insert into upfile (filename, filedir) VALUES ('$filename','$url')";
mysqli_query($link,$sql);
echo "<script>alert('上传成功！');location.href='root.php'</script>";