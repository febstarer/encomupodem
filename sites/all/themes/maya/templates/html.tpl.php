<!DOCTYPE html>
<html>
  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-69269289-1', 'auto');
    ga('send', 'pageview');
  </script>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <div class="body-innerwrapper">
      <div id="skip-link">
          <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
      </div>
      <?php print $page_top; ?>
      <?php print $page; ?>
      <?php print $page_bottom; ?>
    </div>
  </body>
</html>
