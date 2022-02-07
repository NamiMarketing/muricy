<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silicon Energy</title>

  <link rel="stylesheet" href="<?php echo THEME_CSS_PATH;  ?>/blog.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo THEME_CSS_PATH;  ?>/swiper-bundle.css" />
  <script src="<?php echo THEME_JS_PATH;  ?>/swiper-bundle.js"></script>
</head>

<body>
<nav>
    <a href="https://alignertalks.com.br" class="navbar-brand"><img src="<?php echo THEME_IMG_PATH;  ?>/svg/alignertalks-logo.svg" alt=""></a>
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

  <?php 
			if( have_posts() ):
				while( have_posts() ): the_post(); ?>
  <div class="single-post" id="post-<?php the_ID(); ?>">

    <div class="post-header">
      <h4>
        <strong>ATUALIZAÇÃO</strong>
        <?php the_date() ?>
      </h4>
      <?php the_title('<h1>','</h1>' ); ?>

      <div class="share">
        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank">
          <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/facebook.svg" alt="">
        </a>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink() ?>" target="_blank">
          <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/linkedin.svg" alt="">
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" target="_blank">
          <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/twitter.svg" alt="">
        </a>
        <a href="whatsapp://send?text= Confira esse post! <?php the_permalink() ?>" data-action="share/whatsapp/share"
          target="_blank">
          <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/whatsapp.svg" alt="">
        </a>
      </div>
    </div>
    <h4>

      <div class="conteudo">
        <?php the_content(); ?>

        <div class="conteudo-footer">
          <div class="share">
            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank">
              <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/facebook.svg" alt="">
            </a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink() ?>" target="_blank">
              <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/linkedin.svg" alt="">
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" target="_blank">
              <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/twitter.svg" alt="">
            </a>
            <a href="whatsapp://send?text= Confira esse post! <?php the_permalink() ?>"
              data-action="share/whatsapp/share" target="_blank">
              <img src="<?php echo THEME_IMG_PATH;?>/social-media-icons/whatsapp.svg" alt="">
            </a>
          </div>
        </div>

        <!-- <?php $next_post_link_url = get_permalink( get_adjacent_post(false,'',false)->ID ); 
										$prev_post_link_url = get_permalink( get_adjacent_post(false,'',true)->ID );
										$link_atual = get_permalink();
										?>
        <div class="nav-links">
          <a href="	<?php echo $prev_post_link_url  ?>">&larr; Artigo anterior</a>
          <?php if($link_atual != $next_post_link_url): ?>
          <a href="	<?php echo $next_post_link_url ?>">Próximo artigo &rarr;</a>
          <?php endif ?>
        </div> -->
      </div>
  </div>
  <?php endwhile;			
			endif;				
		?>


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