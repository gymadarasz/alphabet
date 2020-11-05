<!doctype html>
<html lang="en">
    <head>
        <?php echo isset($this) ? $this->create('analytics.html.php', $this->data) : ''; ?>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Alphabet</title>
        
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v8.0" nonce="9ToOwCBy"></script>

        <div class="container">
            <?php echo isset($this) && isset($body) ? $this->create($body, $this->data) : ''; ?>
        </div>
    </body>
</html>