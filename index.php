<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Suvendu - Form | SC</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container my-5">
        <h3 class="text-center">Solve it this form</h3>
        <hr>
        <form action="Formfin.php" method="post">

        <?php 
        
        include 'dbconnect.php';

        $sql="SELECT * FROM `question` WHERE 1";
        $result=mysqli_query($conn,$sql);
        $numrow=mysqli_num_rows($result);
        if($numrow==0)
        {
            echo '    <div class="container">
                        <div class="p-5 mb-4 bg-light rounded-3">
                         <div class="container-fluid py-5">
                           <h1 class="display-5 fw-bold">Admin set only question.</h1>
                           <p class="col-md-8 fs-4">Be the first person to solve it.</p>
                         </div>
                       </div>
                       </div>';

        }
        else 
        {

            include 'name_and_email.php';

            
            for($i=0;$i<$numrow;$i++)
            {
                $row=mysqli_fetch_assoc($result);
    
                if($row['type']=='tf')
                {
    
                    echo '
                    
                    <div id="myid">
                    <p class="btn-success px-2">True or False</p>
                    <p style="margin:inherit"><em>'.($i+1).'</em> ) <b>'.$row['questiontitle'].'</b></p>
                    <input type="hidden" name="choice'.($i+1).'" value="None">
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op1'].'"> '.$row['op1'].'<br>
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op2'].'"> '.$row['op2'].'<br>
                    <input type="hidden" name="ans'.($i+1).'" value="'.$row['orans'].'">
                    </div>
                    <hr>
                    
                    ';
                }
                else if($row['type']=='mcq')
                {
                    
                    echo '
                    
                    <div id="myid">
                    <p class="btn-danger px-2">MCQ</p>
                    <p style="margin:inherit"><em>'.($i+1).'</em> ) <b>'.$row['questiontitle'].'</b></p>
                    <input type="hidden" name="choice'.($i+1).'" value="None">
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op1'].'"> '.$row['op1'].'<br>
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op2'].'"> '.$row['op2'].'<br>
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op3'].'"> '.$row['op3'].'<br>
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op4'].'"> '.$row['op4'].'<br>
                    <input type="hidden" name="ans'.($i+1).'" value="'.$row['orans'].'">
                    </div>
                    <hr>
                    
                    ';
                }
                else if($row['type']=='imgmcq')
                {
                    
                    echo '
                    
                    <div id="myid">
                    <p class="btn-warning px-2">Image + Question</p>
    
                    <img src="IMG/'.$row['picname'].'" alt="error loading img" height="400" widht="450">
                    <p style="margin:inherit"><em>'.($i+1).'</em> ) <b>'.$row['questiontitle'].'</b></p>
                    <input type="hidden" name="choice'.($i+1).'" value="None">
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op1'].'"> '.$row['op1'].'<br>
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op2'].'"> '.$row['op2'].'<br>
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op3'].'"> '.$row['op3'].'<br>
                    <input type="radio" name="choice'.($i+1).'" id="radio" value="'.$row['op4'].'"> '.$row['op4'].'<br>
                    <input type="hidden" name="ans'.($i+1).'" value="'.$row['orans'].'">
                    </div>
                    <hr>
                    
                    ';
                }
            }
            echo '<input type="submit" value="Submit" class="btn btn-primary">
            <hr>';
        }


        
        ?>


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