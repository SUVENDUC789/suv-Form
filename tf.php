<?php

$not=FALSE;

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $qn=$_POST['tftit'];
    $ans=$_POST['choice'];
    

    include 'dbconnect.php';

    
    $sql="INSERT INTO `question` (`sl`, `questiontitle`, `op1`, `op2`, `op3`, `op4`, `orans`, `mark`, `type`) VALUES (NULL, '$qn', 'True', 'False', '', '', '$ans', '1', 'tf')";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        $not=True;
    }
    else
    {
        $not=FALSE;
    }



}


?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>True False - Form | SC</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php

    if($not==True)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Question!</strong> set successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

    ?>
    <div class="container my-5">
        <h3 class="text-center">Set True False Option</h3>
        <form action="tf.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><b>Set Question Title </b></label>
                <textarea class="form-control" name="tftit" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div id="myid" class="mb-3">
                <p><b>Set Original Answer.</b></p>
                <input type="hidden" name="choice" value="None">
                <input type="radio" name="choice" id="radio" value="True"> True<br>
                <input type="radio" name="choice" id="radio" value="False"> False<br>
            </div>
            <input type="submit" value="Set Now" class="btn btn-primary">
        </form>

    </div>
    <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>