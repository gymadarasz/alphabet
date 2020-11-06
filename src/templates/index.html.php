<!doctype html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XLSCE3XY9L"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-XLSCE3XY9L');
        </script>

        <!-- TODO add to a separated template -->
        <script data-ad-client="ca-pub-4299416078288363" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Alphabet</title>
        
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fa3ec8f7b2fa46e"></script>

        <style>
            * {color: white;}
            body {
                background: #444444;
                background: -moz-radial-gradient(center, #444444 0%, #333333 100%, #888888 100%);
                background: -webkit-radial-gradient(center, #444444 0%, #333333 100%, #888888 100%);
                background: radial-gradient(ellipse at center, #444444 0%, #333333 100%, #888888 100%);
            }
            img {
                border-radius: 0.3em;
            }
            p {
                text-align: justify;
            }
            .table {
                font-size: 0.6em;
            }
            .hint-cell {
                float: left;
                width: 2em;
                padding: 0.4em;
                border: 1px solid darkgray;
                margin: 0.1em;
            }
            .hint-cell strong {
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="container">
            {{ isset($this) && isset($body) ? $this->create($body, $this->data) : ''; }}
        </div>
    </body>
</html>