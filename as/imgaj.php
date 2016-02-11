<input type="button" onchange="mainInfo(this.value);">

function mainInfo(id) {
    $.ajax({
        type: "GET",
        url: "dummy.php",
        data: "mainid =" + id,
        success: function(result) {
            $("#somewhere").html(result);
        }
    });
};

PHP

<?php
   <?php

if (isset($_REQUEST['sub'])){
$name=$_FILES['img']['name'];
$type=$_FILES['img']['type'];

$size=($_FILES['img']['size'])/1024;

$ext=end(explode('.',$name));
if (($ext == "gif")
|| ($ext == "jpeg")
|| ($ext == "jpg")
|| ($ext =="png")
&& ($size > 30))
{

$newname=uniqid();
//$ext=end(explode('.',$name));
$fullname=$newname.".".$ext;
$target="upload/";
$fulltarget=$target.$fullname;
if(move_uploaded_file($_FILES['img']['tmp_name'],$fulltarget))
{
    echo "Success<br>";
    echo "Image id: $name";
}
else
{
    echo "Failed";
}
}

else{
    echo "not successful";
    }
}
?>
?>
