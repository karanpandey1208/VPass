<html>
    <head>

        <link rel="stylesheet" href="stylesheet.css">
    </head>
<body>
<form method="post" enctype="multipart/form-data" target="_blank">
<div style="width:200px;border-radius:6px;margin:0px auto">
<table >
<tr>
<td>Select 1 Checkbox:</td>
<div class="form-group">
            <label for="vpassid">VPassID</label>
            <input type="text" class="form-control" id="vpassid" name="vpassid">
        </div>
</tr>
</tr>
<tr colspan="3">
<div class="container">
<td><img src="pic1\pic6n\9.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part9"></td>
</div>

<td><img src="pic1\pic6n\8.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part8"></td>

<td><img src="pic1\pic6n\7.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic6n\6.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part6"></td>

<td><img src="pic1\pic6n\5.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part5"></td>

<td><img src="pic1\pic6n\4.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic6n\3.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part3"></td>

<td><img src="pic1\pic6n\2.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part2"></td>

<td><img src="pic1\pic6n\1.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part1"></td>
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
$checkbox=$_POST['techno'];
$chk="";
foreach($checkbox as $chk1)
{
$chk = $chk1;
}
$vpassid=$_POST["vpassid"];


$level1='6';

$updateSql = "UPDATE info SET level1 = '$level1', checkbox = '$chk' where vpassid='$vpassid' ";
mysqli_query($con,$updateSql);

   // Redirect to another page
   header('location: login2.php');

if(!$con)
{
echo'<script>alert("Failed To Insert")</script>';
}
}
?>
</body>
</html>