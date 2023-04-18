<!DOCTYPE html>
<html>
    <head>
        <title>Basketball</title>
    </head>
    <body>
        <form action="Product_of_all_integers.php" method="post">
    
           <button name="submit">Submit</button>
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
$draw = $_POST['draws'];
$win = $_POST['wins'];
if ($draw<0) {
    echo 'Syntax error';
} 

elseif ($win<0) {
    echo 'Syntax error';
} 
function score($draw,$win){
    
$total = (3 * $draw + $win * 2);
echo "<br>";

if ($total>0){
    echo "The total score"." ".$total;
    }
}
score($draw,$win);

}
?>