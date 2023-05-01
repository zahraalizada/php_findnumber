<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Number Guess App | PHP Projects</title>

    <!--  Bootstrap Css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 ">
            <div class="panel-group">
                <div class="login card card-default">
                    <div class="card-header">
                        <h3>Basic Number Guess App</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="row align-items-end">
                                <div class="col-10">
                                    <div class="mb-3">
                                        <label for="secondnumber" class="form-label">Number <small class="text-muted">(Number around 1-100)</small></label>
                                        <input type="number" class="form-control" id="number" name="number"
                                               aria-describedby="number" required="required">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button type="submit" name="find-number" class="btn btn-primary mb-3">Find </button>
                                </div>
                            </div>
                            <div class="mb-3"></div>

                            <div>

                                <?php

                                session_start(); // start session
                                if (!$_SESSION){ // session control
                                    $_SESSION['randNumber'] = rand(1,5); // make session name randNUmber and assign rand num
                                }
                                if(isset($_POST['find-number'])){
                                    $number = $_POST['number'];
                                    if ($number > $_SESSION['randNumber']){
                                        echo "<h4>Please <u class='text-primary'>reduce</u> the number</h4>";
                                        echo "<h4>Last guess: <span class='text-danger'>".$number ."</span></h4>";

                                    } elseif ($number < $_SESSION['randNumber']){
                                        echo "<h4 >Please <u class='text-primary'>increase</u>  the number</h4>";
                                        echo "<h4>Last guess: <span class='text-danger'>".$number ."</span></h4>";
                                    } else{
                                        echo "<h4 >Congratulations!</h4>";
                                        echo "<h4>Number: <span class='text-success'>".$_SESSION['randNumber'] ."</span></h4>";
                                        session_destroy();
                                    }

                                }


                                ?>


                            </div>

                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Bootstrap Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>
</html>