<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8"> 
 <title>Log in</title>
<link href="CSS/style.css" media="screen" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='CSS/style.css'>
	</head>
	<body>
    <header><?php require"header.php"?></header>
    <main>
        <div class="container mregister "></div>
        <div class="row justify-content-center">
        <div class="mb-4 shadow-sm card">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal text-center">Loream ipsum</h4>
                </div>
                <div class="card-body" class ="img-thumbnail">
                    <div class="container mregister text-center">
                        <div id="login">
                            <form id="registerform" method="post" action="Auth/logIn.php" name="register">
                                <p><label class="container mregister text-center"for="user_pass">E-mail<br>
                                <input class="container mregister text-center"class="input" id="email" name="email" size="32"type="email" value=""></label></p>
                                <p><label class="container mregister text-center"for="pass">Password<br>
                                <input class="container mregister text-center"class="input" id="password" name="pass"size="32"   type="password" value=""></label></p>
                                <button type="submit" class="btn btn-lg btn-block btn-outline-primary" id="register" name= "register" value="Sing in">Sing up</button>
                            </form>
                        </div>    
                    </div>
                </div>
    </main>
    <footer>
        <?php require"footer.php"?>
    </footer>
</body>
</html>