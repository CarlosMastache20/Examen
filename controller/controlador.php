<!-- <?php
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
        header("location: ../view/gato.php");
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
        header("location: ../view/gato.php");
        }
    }else if ($winner == 'n'){
        $winner = 't';
        echo "</br>Juego Empatado";
        header("location: ../view/gato.php");
    }
}
?> -->