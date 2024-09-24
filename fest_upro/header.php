<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="top-line">
      <div class="content-width">

        <?php if ($field = get_field('logo_h', 'option')): ?>
          <div class="logo-wrap">
            <a href="<?= get_home_url() ?>">
              <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
              <?php else: ?>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              <?php endif ?>
            </a>
          </div>
        <?php endif ?>
        
        <nav class="top-menu">

          <?php wp_nav_menu( array(
            'theme_location'  => 'header',
            'container'       => '',
            'items_wrap'      => '<ul>%3$s</ul>'
          )); ?>

        </nav>
        <div class="soc-wrap">

          <?php if (($items = get_field('socials_h', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
          <ul>

            <?php foreach ($items as $item): ?>
              <?php if ($item['link']): ?>
                <li>
                  <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><i class="<?= $item['link']['title'] ?>"></i></a>
                </li>
              <?php endif ?>
            <?php endforeach ?>
            
          </ul>
        <?php endif ?>

        <div class="open-menu">
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="menu-responsive" id="menu-responsive" style="display: none">
  <div class="top">
    <div class="close-menu">
      <a href="#"><i class="fal fa-times"></i></a>
    </div>
  </div>
  <div class="wrap">

    <?php if ($field = get_field('logo_h', 'option')): ?>
      <div class="logo-wrap">
        <a href="<?= get_home_url() ?>">
          <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
            <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
          <?php else: ?>
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          <?php endif ?>
        </a>
      </div>
    <?php endif ?>

    <nav class="mob-menu-wrap">

      <?php wp_nav_menu( array(
        'theme_location'  => 'header',
        'container'       => '',
        'items_wrap'      => '<ul class="mob-menu">%3$s</ul>'
      )); ?>

    </nav>

    <?php if (($items = get_field('socials_h', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
    <div class="soc-wrap">
      <ul>

        <?php foreach ($items as $item): ?>
          <?php if ($item['link']): ?>
            <li>
              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><i class="<?= $item['link']['title'] ?>"></i></a>
            </li>
          <?php endif ?>
        <?php endforeach ?>
        
      </ul>
    </div>
  <?php endif ?>

</div>
</div>

<main>