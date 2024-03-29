<?php
require_once('config/config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Anime Template">
  <meta name="keywords" content="Anime, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= CONFIG['app']['name'] ?></title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="src/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="src/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="src/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="src/css/plyr.css" type="text/css">
  <link rel="stylesheet" href="src/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="src/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="src/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="src/css/style.css" type="text/css">
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <?php require_once('inc/header.php') ?>
  <!-- Header End -->

  <!-- Hero Section Begin -->
  <?php require_once('inc/hero.php') ?>
  <!-- Hero Section End -->

  <!-- Product Section Begin -->
  <section class="product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="trending__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Trending Now</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                  <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/trending/trend-1.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/trending/trend-2.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/trending/trend-3.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/trending/trend-4.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/trending/trend-5.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/trending/trend-6.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popular__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Popular Shows</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                  <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/popular/popular-1.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Sen to Chihiro no Kamikakushi</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/popular/popular-2.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/popular/popular-3.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/popular/popular-4.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Rurouni Kenshin: Meiji Kenkaku Romantan</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/popular/popular-5.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/popular/popular-6.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Monogatari Series: Second Season</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="recent__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Recently Added Shows</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                  <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/recent/recent-1.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Great Teacher Onizuka</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/recent/recent-2.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/recent/recent-3.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/recent/recent-4.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Fate/Zero 2nd Season</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/recent/recent-5.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Kizumonogatari II: Nekket su-hen</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/recent/recent-6.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="live__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Live Action</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                  <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/live/live-1.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Shouwa Genroku Rakugo Shinjuu</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/live/live-2.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/live/live-3.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/live/live-4.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/live/live-5.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="src/img/live/live-6.jpg">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>Active</li>
                      <li>Movie</li>
                    </ul>
                    <h5><a href="#">Kizumonogatari II: Nekketsu-hen</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
          <div class="product__sidebar">
            <div class="product__sidebar__view">
              <div class="section-title">
                <h5>Top Views</h5>
              </div>
              <ul class="filter__controls">
                <li class="active" data-filter="*">Day</li>
                <li data-filter=".week">Week</li>
                <li data-filter=".month">Month</li>
                <li data-filter=".years">Years</li>
              </ul>
              <div class="filter__gallery">
                <div class="product__sidebar__view__item set-bg mix day years" data-setbg="src/img/sidebar/tv-1.jpg">
                  <div class="ep">18 / ?</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  <h5><a href="#">Boruto: Naruto next generations</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix month week" data-setbg="src/img/sidebar/tv-2.jpg">
                  <div class="ep">18 / ?</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix week years" data-setbg="src/img/sidebar/tv-3.jpg">
                  <div class="ep">18 / ?</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix years month" data-setbg="src/img/sidebar/tv-4.jpg">
                  <div class="ep">18 / ?</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day" data-setbg="src/img/sidebar/tv-5.jpg">
                  <div class="ep">18 / ?</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                  <h5><a href="#">Fate stay night unlimited blade works</a></h5>
                </div>
              </div>
            </div>
            <div class="product__sidebar__comment">
              <div class="section-title">
                <h5>New Comment</h5>
              </div>
              <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                  <img src="src/img/sidebar/comment-1.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                  <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
              </div>
              <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                  <img src="src/img/sidebar/comment-2.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                  <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
              </div>
              <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                  <img src="src/img/sidebar/comment-3.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                  <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
              </div>
              <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                  <img src="src/img/sidebar/comment-4.jpg" alt="">
                </div>
                <div class="product__sidebar__comment__item__text">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Monogatari Series: Second Season</a></h5>
                  <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Product Section End -->

  <!-- Footer Section Begin -->
  <?php require_once('inc/footer.php'); ?>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch"><i class="icon_close"></i></div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here.....">
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- Js Plugins -->
  <script src="src/js/jquery-3.3.1.min.js"></script>
  <script src="src/js/bootstrap.min.js"></script>
  <script src="src/js/player.js"></script>
  <script src="src/js/jquery.nice-select.min.js"></script>
  <script src="src/js/mixitup.min.js"></script>
  <script src="src/js/jquery.slicknav.js"></script>
  <script src="src/js/owl.carousel.min.js"></script>
  <script src="src/js/main.js"></script>


</body>

</html>