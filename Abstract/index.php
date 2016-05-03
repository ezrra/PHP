<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            require('Example.class.php');

            $user = new User();
            $user->setName('Juan');
            $user->getName();
        ?>
    </body>
</html>