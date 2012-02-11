<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <?php print $user_picture; ?>

  <?php if ( !$page ): ?>
    <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ( $display_submitted ): ?>
    <p class="submitted">
      <small><?php print $submitted; ?></small>
    </p>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>
</div>
