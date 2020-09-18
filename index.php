<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web site php</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<?php require"header.php"?>
<body>
    <div class="container  mt-5">
        <h3 class="mb-5">Articles</h3>
        <div class ="d-flex flex-wrap">  
            <?php
                for($i=0; $i<=5; $i++):
            ?>
            <div class="mb-4 shadow-sm card">
                <div class="card-header">
                    <h4 class=" text-center my-0 font-weight-normal">Lorem ipsum</h4>
                </div>
                <div class="card-body" class ="img-thumbnail">
                    <img src="img/<?php echo ($i+1)?>.jfif" class="mx-auto d-block"  alt="images">
                    <ul class=" text-center list-unstyled mt-3 mb-4">
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lorem ipsum dolor sit amet.</button>
                </div>
            </div>
            <?php endfor;?>
        </div>
    </div>
</body>
<?php require"footer.php"?>
</html>