<?php
$winner = 'n';
$box = array ('','','','','','','','','');
if(isset($_POST['submitbtn'])){
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];
    

    if(($box[0]=='x' && $box[1]=='x' && $box[2]=='x') ||
    ($box[3]=='x' && $box[4]=='x' && $box[5]=='x') ||
    ($box[6]=='x' && $box[7]=='x' && $box[8]=='x') ||
    ($box[0]=='x' && $box[3]=='x' && $box[6]=='x') ||
    ($box[2]=='x' && $box[6]=='x' && $box[8]=='x') || 
    ($box[2]=='x' && $box[4]=='x' && $box[6]=='x') ||
    ($box[1]=='x' && $box[4]=='x' && $box[7]=='x') ||
    ($box[2]=='x' && $box[5]=='x' && $box[8]=='x') ||
    ($box[0]=='x' && $box[4]=='x' && $box[8]=='x')
    ||
    ($box[3]=='x' && $box[6]=='x' && $box[6]=='x'))
     {
        $winner = 'x';
        echo "</br></br><strong> X gano el juego. </strong></br>";
       
    }

    $blank = 0;
    for($i=0; $i<=8; $i++){
        if($box[$i]==''){
            $blank = 1;
        }
    }

    if($blank == 1 && $winner == 'n'){
        $i = rand() % 8;
        
        while($box[$i] != ''){
            $i = rand() %8;
           
        }
        $box[$i] == 'o';
        if(($box[0]=='o' && $box[1]=='o' && $box[2]=='o') ||
        ($box[3]=='o' && $box[4]=='o' && $box[5]=='o') ||
        ($box[6]=='o' && $box[7]=='o' && $box[8]=='o') ||
        ($box[0]=='o' && $box[3]=='o' && $box[6]=='o') ||
        ($box[2]=='o' && $box[6]=='o' && $box[8]=='o') || 
        ($box[2]=='o' && $box[4]=='o' && $box[6]=='o') ||
        ($box[1]=='o' && $box[4]=='o' && $box[7]=='o') ||
        ($box[2]=='o' && $box[5]=='o' && $box[8]=='o') ||
        ($box[0]=='o' && $box[4]=='o' && $box[8]=='o')){
            $winner = 'o';
        echo "</br></br><strong> O gano el juego. </strong></br>";
      
        }
    }else if ($winner == 'n'){
        $winner = 't';
        echo "</br>Juego Empatado";
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Gato | Examen</title>
    <style type="text/css">
    #box{
        background-color: #c3ccb5;
        border: 3xp solid #008000;
        width: 100px;
        height: 100px;
        font-size: 70px;
        text-align: center;
    }
    
    #go{
        width: 150px;
        height: 50px;
        background-color: #cddc39;
        font-size: 20px;
    }
    
    #again{
        width: 200px;
        height: 50px;
        background-color: #cddc39;
        font-size: 20px;
    }
    </style>
   
</head>
<body bgcolor="#7D96FC">
    <div align="center">
    <h2>Instrucciones: Juega con otra persona y rellenen cada uno con sus casillas con sus simbolo correspondiente ya sea "X" ó "O"
    <br> Al terminar presionen el boton de "confirmar" partida para saber quien gano</h2>
    <form name="tictactoe" action="gato.php" method="POST">
    <?php
    for($i=0; $i<=8; $i++){
        printf("<input type='text' name='box%s' value='%s' id='box'>" , $i, $box[$i]);
        if($i==2 || $i==5 || $i==8){
            print('<br>');
        }   
    }

    if($winner == 'n'){
        print('</br><input type="submit" name="submitbtn" value="Confirmar" id="go">');
    }
    else{
        print('</br><input type="button" name="newgamebtn" value="Jugar de nuevo" id="again"
        onClick="window.location.href=\'gato.php\'" >');
    }
    
    ?>


    </form>
    </div>
    
</body>
</html>