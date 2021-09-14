<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <title>
            Contact Us
        </title>
    </head>
    <body>
    <div class="container">
        <br>
            <br>
                <br>
                    <br>
                        <br>
    	<div class="row justify-content-center">
    		<div class="col-12 col-md-8 col-lg-6 pb-5">
                        <form method="POST">
                            <div class="card border-primary rounded-0">
                                <div class="card-header p-0">
                                    <div class="bg-info text-white text-center py-2">
                                        <h3><i class="fa fa-envelope"></i> Contact Us</h3>
                                        <p class="m-0">Please Share Your Experiance</p>
                                    </div>
                                </div>
                                <div class="card-body p-3">

                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="nombre" name="enteredName" placeholder="Enter Your Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                            </div>
                                            <input type="email" class="form-control" id="nombre" name="enteredEmail" placeholder="Enter Your Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                            </div>
                                            <textarea class="form-control" name="enteredMessage" placeholder="Please share your experiance with us" required></textarea>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit" value="Submit" name="submitMessage" class="btn btn-info btn-block rounded-0 py-2">
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
    	</div>
    </div>
    <?php

        $connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

        if(isset($_POST['submitMessage'])){
            $enteredName = $_POST['enteredName'];
            $enteredEmail = $_POST['enteredEmail'];
            $message = $_POST['enteredMessage'];

            mysqli_query($connection,"INSERT INTO contact_us(username,email,message) VALUES ('$enteredName', '$enteredEmail', '$message')");

            header('Location:thankYou.php');
        }
    ?>
    </body>
</html>