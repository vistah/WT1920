<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Aufgabe 6</title>
    <?php
        require_once "./mockdataarray.php";
    ?>
</head>
<body>
<div class="container">
    <h1>Teilnehmerinnen</h1>
    <?php
    if(isset($_GET['id'])):
    //Formular
    $id =filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    echo "
    <form action='./aufgabe6.php' method='post'>
    <div class='form-group row'>
    <label for='vorname' class='col-2'>Vorname</label>
    <div class='col-10'>
    <input type='text' class='form-control' name='vorname' value='".$members[$id][0]."'/>
    </div>
    </div>
    
    <div class='form-group row'>
    <label for='nachname' class='col-2'>Nachname</label>
    <div class='col-10'>
    <input type='text' class='form-control' name='nachname' value='".$members[$id][1]."'/>
    </div>
    </div>
    
    <div class='form-group row'>
    <label for='email' class='col-2'>E-Mail</label>
    <div class='col-10'>
    <input type='text' class='form-control' name='email' value='".$members[$id][2]."'/>
    </div>
    </div>
    <input type='hidden' name='id' value='".$id."'/>
    <button type='submit'>Save changes </button>
    </form>
    "
; else:
        if(isset($_POST['id'])):
            $id = $_POST['id'];
        $vorname = filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);
        $nachname = filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        $members[$id][0]=$vorname;
            $members[$id][1]=$nachname;
            $members[$id][2]=$email;

            $datei= fopen("./mockdataarray.php", "r+");
            $output= '<?php $members='.var_export($members).';?>';
    ?>
    <table class="table table-striped table-responsive">
        <thead>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>E-Mail</th>
        <th>Edit</th>
        </thead>
        <body>
        <?php
        foreach ($members as $id =>$member){//members ist ein mehrdimensoniales Array
           echo "<tr>";
           echo "<td>".$member[0]."</td>";
           echo "<td>".$member[1]."</td>";
           echo "<td>".$member[2]."</td>";
           echo "<td> <a href='./aufgabe6.php?id=".$id."'>Edit</a> </td>";
           echo "</tr>";

        }
        ?>

        </body>
    </table>
    <?php
    endif;
    ?>
</div>
</body>
</html>
