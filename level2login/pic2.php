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
<td><img src="pic2\pic2n\9.png" alt="">
<input type="checkbox" name="techno[]" value="p2part9"></td>
</div>

<td><img src="pic2\pic2n\8.png" alt="">
<input type="checkbox" name="techno[]" value="p2part8"></td>

<td><img src="pic2\pic2n\7.png" alt="">
<input type="checkbox" name="techno[]" value="p2part7"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic2n\6.png" alt="">
<input type="checkbox" name="techno[]" value="p2part6"></td>

<td><img src="pic2\pic2n\5.png" alt="">
<input type="checkbox" name="techno[]" value="p2part5"></td>

<td><img src="pic2\pic2n\4.png" alt="">
<input type="checkbox" name="techno[]" value="p2part4"></td>
</tr>

<tr colspan="3">
<td><img src="pic2\pic2n\3.png" alt="">
<input type="checkbox" name="techno[]" value="p2part3"></td>

<td><img src="pic2\pic2n\2.png" alt="">
<input type="checkbox" name="techno[]" value="p2part2"></td>

<td><img src="pic2\pic2n\1.png" alt="">
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
   
    $_SESSION['loggedin'] = true;
    $_SESSION['vpassid'] = $vpassid;
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