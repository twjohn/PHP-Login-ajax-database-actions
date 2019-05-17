<!DOCTYPE html>
<html>
    <head>
        <title>Login System</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="test.js"></script>
    </head>
    <body>
        <p id="test">list will display here... </p>
        <select name='title' id="gameSelect">
            <option value="" selected>select game</option>
            <?php
                 $user = 'root';
                 $pass = '';
                 $dbConnection = new PDO('mysql:host=localhost;dbname=gameinfo',$user,$pass);

                 $sql = 'select title from games';

                $Pass = $dbConnection->prepare($sql);
                $Pass->execute();

                while($gameinfo=$Pass->fetch(PDO::FETCH_ASSOC))
                    echo "<option value = '".$gameinfo['title']."'>".$gameinfo['title']."</option>";
            ?>
        </select>
    </body>
</html>