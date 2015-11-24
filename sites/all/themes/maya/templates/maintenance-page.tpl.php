<?php

/**
 * @file
 * Implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 * @see bartik_process_maintenance_page()
 */
?>
<!DOCTYPE html>
<html>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <link href='//fonts.googleapis.com/css?family=Roboto&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php print base_path() . path_to_theme() ?>/css/maintenance.css">
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="page-wrapper">
    <div id="page">
      <div id="header">
        <?php if (isset($logo)): ?>
        <div class="site-logo">
          <img src="<?php print base_path() . path_to_theme() ?>/images/logo_white.png">
        </div>
        <?php endif; ?>
      </div> 

      <div id="main">
        <div id="content">
          <?php /*if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif;*/ ?>
          <?php print $content; ?>
          <?php /*if ($messages): ?>
          <div id="messages">
            <?php print $messages; ?>
          </div>
          <?php endif;*/ ?>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
