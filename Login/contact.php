<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3fd9c2331c.js" crossorigin="anonymous"></script>
</head>
<header>
    <a href="index.php" class="fas fa-arrow-left" id="arrow-left"></a>
</header>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <?php
                        if(isset($_POST['Send'])){
                            $name = $_POST['UserName'];
                            $subject = $_POST['txtSubject'];
                            $from = $_POST['userEmail'];
                            $to = "9o9kong68@gmail.com";
                            $message = $_POST['userMessage'];
                            $headers = "From: ".$from;
                            $txt = "Someone Send U Message In Contact Form Check It Out! from: ".$name.".\n\n".$message;
                            if(mail($to,$subject,$message,$headers)){
                                echo "Yes";
                            }
                            else{
                                echo "Hell Nah";
                            }
                        }

                        ?>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <input type="text" name="UserName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="userEmail" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="txtSubject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="userMessage" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="Send">Send</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>