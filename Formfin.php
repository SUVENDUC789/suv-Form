<h1>Please Wait some time ...</h1>
<?php
$total=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    include 'dbconnect.php';

    $sql="SELECT * FROM `question` WHERE 1";
    $result=mysqli_query($conn,$sql);
    $numrow=mysqli_num_rows($result);

    for($i=1;$i<=$numrow;$i++)
    {
        $choice=$_POST['choice'.$i.''];
        $ans=$_POST['ans'.$i.''];
        if($choice==$ans)
        {
            $total++;
        }
    }

    $ip=$_SERVER['REMOTE_ADDR'];

    $sql="INSERT INTO `submit` (`sl`, `name`, `email`, `point`, `ip`) VALUES (NULL, '$name', '$email', '$total', '$ip')";
    $result=mysqli_query($conn,$sql);

    $message="Total Point is : $total";
        echo '<script language="javascript">';
        echo 'alert("'.$message.'");';
        echo 'window.location="http://localhost:8080/php_t/FILES-SUPER-GLOBAL-VARIABLE/suv-Form/index.php";';
        echo '</script>';


}


?>
