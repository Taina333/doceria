<?php
$servername="localhost";
$username= "root";
$password="";
$db_name="doceria";
$connect= mysqli_connect($servername,$username,$password,$db_name);

$nome=$_POST['nome'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$salario=$_POST['salario'];
$sql = "INSERT INTO funcionario (nome,email,cpf,salario)
VALUES ('$nome','$email','$cpf','$salario');";
if(mysqli_query($connect,$sql)){
    echo "seus dados foram inseridos corretamente no banco";
} else{
    echo "algum erro aconteceu durante a execução";
}
?>