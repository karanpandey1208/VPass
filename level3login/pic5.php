<html>
    <head>

        <link rel="stylesheet" href="stylesheet.css">
    </head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
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
<td><img src="pic1\pic5n\9.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part9"></td>
</div>

<td><img src="pic1\pic5n\8.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part8"></td>

<td><img src="pic1\pic5n\7.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic5n\6.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part6"></td>

<td><img src="pic1\pic5n\5.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part5"></td>

<td><img src="pic1\pic5n\4.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic5n\3.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part3"></td>

<td><img src="pic1\pic5n\2.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part2"></td>

<td><img src="pic1\pic5n\1.jpg" alt="">
<input type="checkbox" name="techno[]" value="p5part1"></td>
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
$vpassid=$_POST["vpassid"];
$chk2="";
foreach($checkbox3 as $chk3)
{
$chk2 = $chk3;
}

$sql = "Select * from info where checkbox3='$chk2' AND vpassid= '$vpassid' ";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['fname'] = $fname;
    header("location: welcome.php");

}

else
    header("location: reallogin1.php");
if (mysqli_query($con, $updateSql)) {
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