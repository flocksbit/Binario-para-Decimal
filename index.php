<?php
  if(isset($_GET["valorBinario"])){

    $binario = $_GET["valorBinario"];
    $decimal = 0;
    $base = 1;

    for($i=strlen($binario)-1; $i >=0; $i--){
      $decimal += $binario[$i]*$base;
      $base *= 2;
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Conversor de Binário para Decimal</title>

</head>
<body>
    <div class="card">
      <h1>Converta Binários em Decimais</h1>
      <form autocomplete=off>
        <span>Binário:</span>
        <div class="container">
        <input type="text" name="valorBinario" maxlength="8" required class="input-custom">
        </div>
        <button type="submit">Converter</button>
      </form>

      <?php if(isset($binario)): ?>
      <div class="result">
        <p>O número binário: <strong><?=$binario?></strong>   é equivalente ao número <strong><?=$decimal?></strong> em decimal.</p>
      </div>
      <?php endif;?>
      
    </div>
</body>
</html>


