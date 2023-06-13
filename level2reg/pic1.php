<html>
    <head>

        <link rel="stylesheet" href="stylesheet.css">
    </head>
<body>
<form method="post" enctype="multipart/form-data">
<div style="width:200px;border-radius:6px;margin:0px auto">
<table >
<tr>
<div class="form-group">
            <label for="vpassid">VPassID</label>
            <input type="text" class="form-control" id="vpassid" name="vpassid">
        </div>
</tr>
<tr>
<td>Select 1 chechbox:</td>
</tr>
<tr colspan="3">
<div class="container">
<td><img src="pic2\pic1n\9.png" alt="">
<input type="checkbox" name="techno[]" value="p1part9"></td>
</div>

<td><img src="pic2\pic1n\8.png" alt="">
<input type="checkbox" name="techno[]" value="p1part8"></td>

<td><img src="pic2\pic1n\7.png" alt="">
<input type="checkbox" name="techno[]" value="p1part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic1n\6.png" alt="">
<input type="checkbox" name="techno[]" value="p1part6"></td>

<td><img src="pic2\pic1n\5.png" alt="">
<input type="checkbox" name="techno[]" value="p1part5"></td>

<td><img src="pic2\pic1n\4.png" alt="">
<input type="checkbox" name="techno[]" value="p1part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic1n\3.png" alt="">
<input type="checkbox" name="techno[]" value="p1part3"></td>

<td><img src="pic2\pic1n\2.png" alt="">
<input type="checkbox" name="techno[]" value="p1part2"></td>

<td><img src="pic2\pic1n\1.png" alt="">
<input type="checkbox" name="techno[]" value="p1part1"></td>
</tr>
<trcolspan="3">
<td colspan="2" align="center"><input type="submit" value="submit" name="sub"></td>
</tr>
</table>
</div>
</form>
<?php

if(isset($_POST['sub']))
{
$host="localhost";//host name
$username="root"; //database username
$word="";//database word
$db_name="checkbox";//database name
$tbl_name="info"; //table name
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string
$checkbox2=$_POST['techno'];
$chk1="";
foreach($checkbox2 as $chk2)
{
$chk1 = $chk2;
}

$vpassid=$_POST["vpassid"];


$level2='1';

$updateSql = "UPDATE info SET level2 = '1', checkbox2 = '$chk1' where vpassid='$vpassid' ";


mysqli_query($con,$updateSql);

   // Redirect to another page
   header('location: login3.php');

if(!$con)
{
echo'<script>alert("Failed To Insert")</script>';
}

}
?>
</body>
</html>