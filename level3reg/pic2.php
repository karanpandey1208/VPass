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
<td><img src="pic1\pic2n\9.png" alt="">
<input type="checkbox" name="techno[]" value="p2part9"></td>
</div>

<td><img src="pic1\pic2n\8.png" alt="">
<input type="checkbox" name="techno[]" value="p2part8"></td>

<td><img src="pic1\pic2n\7.png" alt="">
<input type="checkbox" name="techno[]" value="p2part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic2n\6.png" alt="">
<input type="checkbox" name="techno[]" value="p2part6"></td>

<td><img src="pic1\pic2n\5.png" alt="">
<input type="checkbox" name="techno[]" value="p2part5"></td>

<td><img src="pic1\pic2n\4.png" alt="">
<input type="checkbox" name="techno[]" value="p2part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic2n\3.png" alt="">
<input type="checkbox" name="techno[]" value="p2part3"></td>

<td><img src="pic1\pic2n\2.png" alt="">
<input type="checkbox" name="techno[]" value="p2part2"></td>

<td><img src="pic1\pic2n\1.png" alt="">
<input type="checkbox" name="techno[]" value="p2part1"></td>
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
$checkbox3=$_POST['techno'];
$chk2="";
foreach($checkbox3 as $chk3)
{
$chk2 = $chk3;
}

$vpassid=$_POST["vpassid"];


$level3='2';

$updateSql = "UPDATE info SET level3 = '$level3', checkbox3 = '$chk2' where vpassid='$vpassid' ";
mysqli_query($con,$updateSql);

   // Redirect to another page
   header('location: afterreg.php');

if(!$con)
{
echo'<script>alert("Failed To Insert")</script>';
}

}
?>
</body>
</html>