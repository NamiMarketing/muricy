<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo THEME_CSS_PATH;  ?>/blog.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,200;0,300;0,500;0,600;0,800;1,200&display=swap"
    rel="stylesheet">
  <title>Aligner Talks</title>
</head>

<body>
  <nav>
    <a href="https://alignertalks.com.br" class="navbar-brand"><img src="<?php echo THEME_IMG_PATH;  ?>/alignertalks-logo-branca.png" alt=""></a>
    <div class="menu-toggle mobile">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
    </div>
    <ul class="nav">
      <li><a href="/">HOME</a></li>
      <li><a href="/equipe">EQUIPE</a></li>
      <li class="dropdown">
        <button class="dropbtn">CURSOS</button>
        <div class="dropdown-content">
          <a href="/alignertalks2022">Aligner Talks 2022</a>
          <span></span>
          <a href="/first-class">FirstClass<br>Instituto</a>
          <span></span>
          <a href="/clincheck">Consultoria de <br>ClinCheck</a>
        </div>
      </li>
      <li><a href="/blog" class="active">BLOG</a></li>
    </ul>
  </nav>


  <body>

    <div class="initial-banner">
      <h1>Blog</h1>
    </div>

      <div class="post-container">
        <?php 
            $args = array(
              'post_type'=> 'post',
              'orderby'    => 'ID',
              'post_status' => 'publish',
              'order'    => 'ASC',
              'posts_per_page' => 2 // this will retrive all the post that is published 
              );
              $result = new WP_Query( $args );
              if ( $result-> have_posts() ) : ?>
        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
          <div class="post">
            <img class="thumbnail-img" src="<?php the_post_thumbnail_url() ?>" alt="">
            <div>
            <div class="title">
              <h3><?php the_title(); ?></h3>
            </div>
              <div class="post-text">
                <img class="tagimg" src="<?php echo THEME_IMG_PATH;?>/tag.png" alt="">
                <h3 class="bigtext"><?php echo $category->cat_name ?></h3>
              </div>
              <div class="smalltext">
                <p><?php the_excerpt(); ?></p>
              </div>
              <div class="post-leiamais">
                <div class="button-container">
                  <a href="<?php echo get_permalink()?>">Leia mais</a>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>

    <?php get_footer(); ?>

  </body>

  <script>
    function toogleGroup(className) {
      var el = document.getElementsByClassName(className);
      if (el) el[0].classList.toggle("showGroup");
    }

    let show = true;

    const menuToggle = document.getElementsByClassName("menu-toggle")
    const menuNav = document.getElementsByClassName("nav")
    const one = document.getElementsByClassName("one")
    const two = document.getElementsByClassName("two")
    const three = document.getElementsByClassName("three")

    menuToggle[0].addEventListener("click", () => {
      document.body.style.overflowY = show ? "hidden" : "initial"
      one[0].classList.toggle("close", show)
      two[0].classList.toggle("close", show)
      three[0].classList.toggle("close", show)

      menuNav[0].classList.toggle("on", show)
      show = !show;
    })
  </script>

</html>