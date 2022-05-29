
<?php

$not=FALSE;
$newName=$img_name='';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $tit=$_POST['mcqtit'];
    $set1=$_POST['1stOption'];
    $set2=$_POST['2ndOption'];
    $set3=$_POST['3rdOption'];
    $set4=$_POST['LastOption'];
    $mainAns=$_POST['Original_answer'];

    include 'dbconnect.php';

    if(isset($_FILES['image']))
    {
     
        $img_name=$_FILES['image']['name'];
        $oldName=$_FILES['image']['name'];
     
        $img_name=preg_replace("/\s+/","_",$img_name);
     
        $img_type=$_FILES['image']['type'];
        $img_tmp_name=$_FILES['image']['tmp_name'];
        $img_error=$_FILES['image']['error'];
        $img_size=$_FILES['image']['size'];
     
     
         $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
         $img_name=pathinfo($img_name,PATHINFO_FILENAME);
     
         $newName=$img_name.date("mjYHis").".".$img_ext;
     
        move_uploaded_file($img_tmp_name,"IMG/".$newName);
    }

    $sql="INSERT INTO `question` (`sl`, `questiontitle`, `op1`, `op2`, `op3`, `op4`, `orans`, `mark`, `type`, `picname`) VALUES (NULL, '$tit', '$set1', '$set2', '$set3', '$set4', '$mainAns', '1', 'imgmcq', '$newName')";

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

    <title>MCQ - Form | SC</title>
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
        <h3 class="text-center">Set MCQ Option</h3>
        <form action="imgqn.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="file" name="image" id="image">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><b>Set Question Title </b></label>
                <textarea class="form-control" name="mcqtit" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="1stOption" class="form-label">1st Option.</label>
                <input type="text" class="form-control" name="1stOption" id="1stOption" placeholder="Enter 1st Option.">
            </div>
            <div class="mb-3">
                <label for="2ndOption" class="form-label">2nd Option.</label>
                <input type="text" class="form-control" name="2ndOption" id="2ndOption" placeholder="Enter 2nd Option.">
            </div>
            <div class="mb-3">
                <label for="3rdOption" class="form-label">3rd Option.</label>
                <input type="text" class="form-control" name="3rdOption" id="3rdOption" placeholder="Enter 3rd Option.">
            </div>
            <div class="mb-3">
                <label for="LastOption" class="form-label">Last Option.</label>
                <input type="text" class="form-control" name="LastOption" id="LastOption"
                    placeholder="Enter Last Option.">
            </div>
            <div class="mb-3">
                <label for="Original_answer" class="form-label"><b>Original answer</b></label>
                <input type="text" class="form-control" name="Original_answer" id="Original_answer"
                    placeholder="Enter Original answer Option.">
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