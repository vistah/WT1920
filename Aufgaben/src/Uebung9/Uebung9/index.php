<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link rel="player" href="player.php">-->
    <?php
    	require_once('player.php');
   	?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Uebung 9</title>
    <style>
        .container-fluid
        {
            display: flex;
            width: 100%;
        }
        #links
        {
            flex: 1;
        }

        #mitte
        {
            flex: 1;
        }
        #mitte > h3
        {
            margin-left: 50px;
        }
        #rechts
        {
            flex: 2;
        }
        header> h1
        {
            text-align: center;
            background-color: #888888;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        footer>p{
            text-align: center;
            background-color: #888888;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        footer
        {
            position: absolute;
            bottom: 0px;
            width: 100%;
        }
        @media screen and (max-width: 768px)
        {
            #mitte{
                display: none;


            }

        }


    </style>
</head>

<body>
<header>
    <h1>Ein Spiel</h1>
</header>
<div class="container-fluid">

    <div id="links">
        <h3>Auswahl Spielerin</h3>
        <ul>
            <?php
            for($i=0; $i<count($player); $i++)
            {
                echo '<li>'.$player[$i]["name"].'('.$player[$i]["moves"].')</li>';
            }
            ?>
        </ul>

    </div>
    <div id="mitte">
        <h3>oder</h3>
    </div>
    <div id="rechts">
        <h3>Neue Spielerin anlegen</h3>
        <input type="text" placeholder="Name"></input><br>
        <button>Neue Spielerin anlegen</button>
    </div>
</div>
<footer>
    <p>Viktoria Stahlbaum</p>
</footer>
</body>

</html>