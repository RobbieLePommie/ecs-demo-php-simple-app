<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PolarSeven</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #9CE305;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script>
            var x= 1;
            var t = function() {
                if (x==1) {
                    document.body.style.background = "#ff0000";
                    x = 2;
                } else if ( x==2) {
                    document.body.style.background = "#00ff00";
                    x = 3;
                } else {
                    document.body.style.background = "#0000ff";
                    x = 1;
                }
                setTimeout(t, 1000);
            };
            setTimeout(t, 1000);
        </script>
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <img src="assets/images/p7.png" width="250" height="120">
                <h1>PolarSeven AWS Kubernetes CI/CD Pipeline Demo</h1>
                <h2>Congratulations</h2>
                <h2>THIS IS VERSION 1.4b</h2>
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
