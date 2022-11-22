<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

    <?php

    $env = parse_ini_file('../.env');

    try {   

        $pdo = new PDO("mysql:host=$env[DB_HOST]:$env[DB_PORT];dbname=$env[DB_DATABASE]", "$env[DB_USERNAME]", "$env[DB_PASSWORD]");
        $sth = $pdo->prepare("SELECT * FROM user");
        $sth->execute();
        $users = $sth->fetchAll(PDO::FETCH_OBJ);

        echo '<h2>Users from DB</h2>';
    
        foreach($users as $user) {
            echo "<div><span><strong>$user->firstname</strong>$user->lastname</span><a href=\"mailto:$user->email\">$user->email</a></div>";
        }
        

    } catch (PDOException $e){
        die ('DB Connexion error');
    }

    ?>

    </body>

</html>