<html>
    <head>

        <link rel="stylesheet" href="stylesheet.css">
    </head>
<body>
<form  method="post" enctype="multipart/form-data">
<div style="width:200px;border-radius:6px;margin:0px auto">
<table >
<tr>
<div class="form-group">
            <label for="vpassid">VPassID</label>
            <input type="text" class="form-control" id="vpassid" name="vpassid">
        </div>
</tr>
<tr>
<td>Select 1 Checkbox:</td>
</tr>
<tr colspan="3">
<div class="container">
<td><img src="pic2\pic6n\9.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part9"></td>
</div>

<td><img src="pic2\pic6n\8.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part8"></td>

<td><img src="pic2\pic6n\7.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic6n\6.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part6"></td>

<td><img src="pic2\pic6n\5.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part5"></td>

<td><img src="pic2\pic6n\4.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic6n\3.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part3"></td>

<td><img src="pic2\pic6n\2.jpg" alt="">
<input type="checkbox" name="techno[]" value="p6part2"></td>

<td><img src="pic2\pic6n\1.jpg" alt="">
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
$checkbox2=$_POST['techno'];
$chk1="";
foreach($checkbox2 as $chk2)
{
$chk1= $chk2;
}

$vpassid=$_POST["vpassid"];


$level2='6';

$updateSql = "UPDATE info SET level2 = '$level2', checkbox2 = '$chk1' where vpassid='$vpassid' ";
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