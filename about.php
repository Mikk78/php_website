<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <header><?php require"header.php"?></header>
    <main>
        <div class="container mt-5">
            <form action="check.php" method="post">
                <input type="email" name="email" placeholder="Your email" class="form-control"><br>
                <textarea name="message" class="form-control" placeholder="Write your message"></textarea><br>
                <button type="submit" type="send" class="btn btn-success" class="" align-text="center">Send</button><br>
            </form>
        </div>
    </main>
    <footer><?php require"footer.php"?></footer>
</body>
</html>

