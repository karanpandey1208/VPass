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
<td><img src="pic2\pic7n\9.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part9"></td>
</div>

<td><img src="pic2\pic7n\8.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part8"></td>

<td><img src="pic2\pic7n\7.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic7n\6.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part6"></td>

<td><img src="pic2\pic7n\5.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part5"></td>

<td><img src="pic2\pic7n\4.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic7n\3.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part3"></td>

<td><img src="pic2\pic7n\2.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part2"></td>

<td><img src="pic2\pic7n\1.jpg" alt="">
<input type="checkbox" name="techno[]" value="p7part1"></td>
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
$vpassid=$_POST["vpassid"];
$chk1="";
foreach($checkbox2 as $chk2)
{
$chk1 = $chk2;
}

$sql = "Select * from info where checkbox2='$chk1' AND vpassid= '$vpassid' ";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['fname'] = $fname;
    header("location: reallogin3.php");

}

else
    header("location: reallogin3.php");
if (mysqli_query($con, $updateSql)) {
    ?>
    
    <a href="login3.php"><input type="button" value="Next Level" name="but"></a>
    <?php
}
else
{
echo'<script>alert("Failed To Insert")</script>';
}
}
?>
</body>
</html>