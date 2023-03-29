<?php

function token($tamanho = 40) {
    $string = md5(rand());
    $randomString = substr($string, 0, $tamanho);
    return $randomString;
}

$token = token();

?>
<form id="myForm" action="home.php" style="opacity: 0" method="post">
  <input name="login" value="<?=$_POST['login']?>">
  <input name="token" value="<?=$token?>">
  <input type="submit" id="btnSubmit">
</form>
<?php

$usuarios = file_get_contents('senhas.txt');
$usuarios = json_decode($usuarios, true);

$login = $_POST['login'];
$senha = $_POST['senha'];
$novoLogin = base64_encode($login);
$novaSenha = base64_encode($senha);


foreach ($usuarios as $usuario) {
  if ($usuario['login'] == $novoLogin && $usuario['senha'] == $novaSenha) {

    echo "<script>document.getElementById('myForm').submit();</script>";
    exit();
    
  }
 //$admin++;
}

header('Location: erro.php');
exit();

header('Location: home.php?login=' . urlencode($token));
    exit();

?>