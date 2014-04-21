<div id="sub-header">
  <div class="row">
    <div class="small-12 columns">
      <?php if ($logo): ?>
        <div id="logo">
          <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>" rel="home" id="logo">
            <a href=""><img src="<?php print $logo; ?>" alt="<?php print t('Home') ?>" /></a>
          </a>
        </div>
      <?php endif ?>

      <div id="site-informations">
        <?php if ($site_name): ?>
          <h1>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <?php print $site_name ?>
            </a>
            <?php if ($site_slogan): ?> <small><?php print $site_slogan ?></small> <?php endif ?>
          </h1>
        <?php endif ?>
      </div>

      <navigation class="right">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))) ?>
      </navigation>
    </div>
  </div>
</div>



</div>

<?php if($page['header']) : ?>
<div id="header">
<div class="row">
  <div class="small-12 large-12 columns">
    <?php print render($page['header']) ?>
  </div>
</div>
 </div>
<?php endif ?>

</div>

<div class="row">
  <?php if ($main_menu || $secondary_menu): ?>
    <navigation class="small-12 columns">

      <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu'))) ?>
    </navigation>
  <?php endif; ?>
</div>

<div class="row">

  <?php if ($breadcrumb): ?>
    <?php print $breadcrumb ?>
  <?php endif ?>


</div>

<div class="messages">
  <div class="row">
    <div class="small-12 columns">
      <?php print $messages ?>
    </div>
  </div>
</div>



<div class="row">

  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" class="<?php print $sidebar_first_grid_classes ?>">
      <?php print render($page['sidebar_first']) ?>
    </aside>
  <?php endif ?>

  <div id="content" class="<?php print $content_grid_classes ?>">


    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']) ?></div><?php endif ?>
    <a id="main-content"></a>
    <?php print render($title_prefix) ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif ?>
    <?php print render($title_suffix) ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif ?>
    <?php print render($page['help']) ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links) ?></ul><?php endif ?>
    <?php print render($page['content']) ?>
    <?php print $feed_icons ?>
  </div>

  <?php if ($page['sidebar_second']): ?>
    <aside id="sidebar-second" class="<?php print $sidebar_second_grid_classes ?>">
      <?php print render($page['sidebar_second']) ?>
    </aside>
  <?php endif; ?>

</div>

<footer class="row">
  <?php print render($page['footer']); ?>
</footer>