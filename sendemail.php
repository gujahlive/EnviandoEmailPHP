<DOCTYPE! html>
<html>
<head>
<title>Enviar email</title>
</head>
<body>
<?php 
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
?>
<?php 
$to = "gustavofvieira@live.com";
$subject = "$assunto";
$message = "<strong>Nome:</strong> $nome<br /> <br /><strong>Email:</strong> $email<br /> <br /><strong>Assunto:</strong> $assunto<br /> <br /><strong>Menssagem:</strong> $mensagem<br /> <br />";
$header = "MIME-Version: 1.0\n";
$header = "Content-type: text/html; charset=iso-8859-1\n";
$header = "From: $email\n";
mail($to,$subject,$message,$header);
echo "Mensagem enviada com sucesso!";
?>

</form>
</body>
<html>