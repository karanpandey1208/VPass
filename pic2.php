<html>
    <head>

        <link rel="stylesheet" href="stylesheet.css">
    </head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<div style="width:200px;border-radius:6px;margin:0px auto">
<table >
<tr>
<td>Select Technolgy:</td>
</tr>
<tr colspan="3">
<div class="container">
<td><img src="pic1\pic1n\9.png" alt="">
<input type="checkbox" name="techno[]" value="PHP"></td>
</div>

<td><img src="pic1\pic1n\8.png" alt="">
<input type="checkbox" name="techno[]" value=".Net"></td>

<td><img src="pic1\pic1n\7.png" alt="">
<input type="checkbox" name="techno[]" value="Java"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic1n\6.png" alt="">
<input type="checkbox" name="techno[]" value="javascript"></td>

<td><img src="pic1\pic1n\5.png" alt="">
<input type="checkbox" name="techno[]" value="javascript"></td>

<td><img src="pic1\pic1n\4.png" alt="">
<input type="checkbox" name="techno[]" value="javascript"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic1n\3.png" alt="">
<input type="checkbox" name="techno[]" value="javascript"></td>

<td><img src="pic1\pic1n\2.png" alt="">
<input type="checkbox" name="techno[]" value="javascript"></td>

<td><img src="pic1\pic1n\1.png" alt="">
<input type="checkbox" name="techno[]" value="javascript"></td>
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
$checkbox1=$_POST['techno'];
$chk="";
foreach($checkbox1 as $chk1)
{
$chk .= $chk1.",";
}
$in_ch=mysqli_query($con,"insert into info(checkbox) values ('$chk')");
if($in_ch==1)
{
echo'<script>alert("Inserted Successfully")</script>';
}
else
{
echo'<script>alert("Failed To Insert")</script>';
}
}
?>
</body>
</html>