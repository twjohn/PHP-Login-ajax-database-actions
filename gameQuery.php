<?php

        $user = 'root';
        $pass = '';
        $dbConnection = new PDO('mysql:host=localhost;dbname=gameinfo',$user,$pass);

        
        $sql = 'select * from games where title=:title';

            $query = $dbConnection->prepare($sql);
            $game=$_POST['dataVal'];
        echo "this is the value being got          ".$game;
            $query->bindParam(':title',$game);

            $query->execute();

            echo "<table>
            <tr>
            <th>title id</th>
            <th>title</th>
            <th>rating</th>
            <th>release date</th>
            <th>publisher</th>
            </tr>";

            while($userinfo = $query->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>" . $userinfo['title_id'] . "</td>";
                echo "<td>" . $userinfo['title'] . "</td>";
                echo "<td>" . $userinfo['rating'] . "</td>";
                echo "<td>" . $userinfo['releaseDate'] . "</td>";
                echo "<td>" . $userinfo['publisher'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";