<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo THEME_CSS_PATH;  ?>/landing.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;600;800;900&display=swap" rel="stylesheet">
  <title>Aligner Talks</title>
</head>

<body>
  <nav>
    <a href="https://alignertalks.com.br" class="navbar-brand"><img
        src="<?php echo THEME_IMG_PATH;  ?>/alignertalks-logo-branca.png" alt=""></a>
    <div class="menu-toggle mobile">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
    </div>
    <ul class="nav">
      <li><a href="/" class="active">HOME</a></li>
      <li class="dropdown">
        <button class="dropbtn">CURSOS</button>
        <div class="dropdown-content">
        <span></span>
          <a href="/aligner-talks">Aligner Talks</a>
          <span></span>
          <a href="/first-class">FirstClass instituto 4.0</a>
          <span></span>
          <a href="/clincheck">Consultoria de clinCheck</a>
        </div>
      </li>
      <li><a href="/conheca-nossa-equipe">CONHEÇA NOSSA EQUIPE</a></li>
    </ul>
  </nav>

  <?php get_footer(); ?>

</body>

<script>
</script>

</html>