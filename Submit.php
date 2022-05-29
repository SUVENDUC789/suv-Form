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
    <?php include 'navbar.php'; include 'dbconnect.php'; ?>

    <div class="container my-5">
        <h3 class="text-center">*** Result ***</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Point</th>
                </tr>
            </thead>
            <tbody>
    <?php
            $sql="SELECT * FROM `question` WHERE 1";
            $result=mysqli_query($conn,$sql);
            $totalpointmax=mysqli_num_rows($result);

            $sql="SELECT * FROM `submit` ORDER BY `sl` DESC";
            $result=mysqli_query($conn,$sql);
            $numrow=mysqli_num_rows($result);

            for($i=1;$i<=$numrow;$i++)
            {
                $row=mysqli_fetch_assoc($result);
                echo '   <tr>
                <th scope="row">'.$i.'</th>
                <td>'.$row['name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['point'].' / '.$totalpointmax.'</td>
            </tr>';

            }

    ?>

            </tbody>
        </table>
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