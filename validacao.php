<?php
$nome_servidor = "127.0.0.1";
$nome_usuario = "root";
$senha = "";
$nome_banco = "locuploader";
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
if ($conecta->connect_error)
    die("Ocorreu uma falha na conexão". $conecta->connect_error."<br>");
echo "conexão realizada com sucesso!<br>";

$email = $_POST["email"];
$senha = $_POST["senha"];

if($email!=''&& $senha!='')
{
 $query="select * from usuario where email='$email' and senha='$senha'";

 $resultado=mysqli_query($conecta,$query); 

 if(!$resultado)
    die("Query Failed: " .  mysqli_error($conecta));
else
{
if(mysqli_num_rows($resultado)>0)
    
       echo "Bem-vindo!".$email."<br>";

}     
}  
$conecta->close();
?>