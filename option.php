<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Select Option - Form | SC</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container my-5">
        <h3 class="text-center">Select Option</h3>
        <div class="row">
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="pic/mcq.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Multiple choice question</h5>
                        <p class="card-text">Multiple choice, objective response, or MCQ is a form of an objective assessment in which respondents are asked to select only correct answers from the choices offered as a list.</p>
                        <hr>
                        <a href="mcq_set.php" class="btn btn-primary">Create Question</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="pic/tf.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">True or false question</h5>
                        <p class="card-text">True/False Film Fest is an annual documentary film festival that takes place in Columbia, Missouri. The Fest occurs on the first weekend in March, with films being shown from Thursday evening to Sunday night.</p>
                        <hr>
                        <a href="tf.php" class="btn btn-primary">Create Question</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="pic/im.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Image + question</h5>
                        <p class="card-text">Image questions allow you to show a visualization of the answer options for respondents to review and select. Instead of selecting a radio button, respondents can scroll over the image and pick the one that best suits their answer.</p>
                        <hr>
                        <a href="imgqn.php" class="btn btn-primary">Create Question</a>
                    </div>
                </div>
            </div>
        </div>
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