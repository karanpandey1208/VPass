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
<td>Select 1 checkbox:</td>
</tr>
<tr colspan="3">
<div class="container">
<td><img src="pic1\pic1n\9.png" alt="">
<input type="checkbox" name="techno[]" value="p1part9"></td>
</div>

<td><img src="pic1\pic1n\8.png" alt="">
<input type="checkbox" name="techno[]" value="p1part8"></td>

<td><img src="pic1\pic1n\7.png" alt="">
<input type="checkbox" name="techno[]" value="p1part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic1n\6.png" alt="">
<input type="checkbox" name="techno[]" value="p1part6"></td>

<td><img src="pic1\pic1n\5.png" alt="">
<input type="checkbox" name="techno[]" value="p1part5"></td>

<td><img src="pic1\pic1n\4.png" alt="">
<input type="checkbox" name="techno[]" value="p1part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic1\pic1n\3.png" alt="">
<input type="checkbox" name="techno[]" value="p1part3"></td>

<td><img src="pic1\pic1n\2.png" alt="">
<input type="checkbox" name="techno[]" value="p1part2"></td>

<td><img src="pic1\pic1n\1.png" alt="">
<input type="checkbox" name="techno[]" value="p1part1"></td>
</tr>
<trcolspan="3">
  
<td colspan="2" align="center"><a href="level2reg\pic1.php"> <input type="submit" value="submit" name="sub">
</a> 
</td>

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
    $_SESSION['loggedin'] = true;
    $_SESSION['vpassid'] = $vpassid;
    header("location: welcome.php");

}

else
    header("location: reallogin1.php");
 
 if(!$con)
 {
 echo'<script>alert("Failed To Insert")</script>';
 }
 }
?>
</body>
</html>