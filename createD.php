<?php
$servername="localhost";
$username= "root";
$password="";
$db_name="doceria";
$connect= mysqli_connect($servername,$username,$password,$db_name);

$nome=$_POST['nome'];
$data_validade=$_POST['data_validade'];
$valor=$_POST['valor'];
$sql = "INSERT INTO doces (nome,data_validade,valor)
 VALUES ('$nome','$data_validade','$valor');";
if(mysqli_query($connect,$sql)){
    echo "seus dados foram inseridos corretamente no banco";
} else{
    echo "algum erro aconteceu durante a execução";
}
?>