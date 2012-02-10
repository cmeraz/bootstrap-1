<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <?php if ( $nav_links ): ?>
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      <?php endif; ?>
      <?php if ( $site_name ): ?>
        <a class="brand" href="<?php print $front_page; ?>">
          <?php print $site_name; ?>
        </a>
      <?php endif; ?>
      <?php if ( $nav_links ): ?>
        <div class="nav-collapse">
          <?php print $nav_links; ?>
        </div>
      <?php endif; ?>
      <?php if ( $nav_links_dropdown ): ?>
        <?php print $nav_links_dropdown; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container">
  <?php if ( $breadcrumb ): ?>
    <?php print $breadcrumb; ?>
  <?php endif; ?>

  <?php print $messages; ?>

  <?php if ( $title ): ?>
    <div class="page-header">
      <h1><?php print $title; ?></h1>
    </div>
  <?php endif; ?>

  <?php if ( $tabs ): ?>
    <div class="tabs"><?php print render($tabs); ?></div>
  <?php endif; ?>

  <div class="row">
    <?php if ( $page['sidebar_first'] ): ?>
      <?php print render($page['sidebar_first']); ?>
    <?php endif; ?>

    <?php print render($page['content']); ?>

    <?php if ( $page['sidebar_second'] ): ?>
      <?php print render($page['sidebar_second']); ?>
    <?php endif; ?>
  </div>

</div>

<footer class="container">
  <?php print render($page['footer']); ?>
</footer>
