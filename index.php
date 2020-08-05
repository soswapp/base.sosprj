<?php
require_once ".baseinit.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="/site.webmanifest">
  <head>
    <meta>
    <title>7 OS Project UI testing</title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="keywords" content="<?php echo PRJ_KEYWORDS; ?>">
    <meta name="description" content="<?php echo PRJ_DESCRIPTION; ?>">
    <meta name="author" content="<?php echo PRJ_AUTHOR; ?>">
    <meta name="creator" content="<?php echo PRJ_CREATOR; ?>">
    <meta name="publisher" content="<?php echo PRJ_PUBLISHER; ?>">
    <meta name="robots" content='index'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="/app/soswapp/theme-soswapp/css/theme.min.css">
    <link rel="stylesheet" href="/app/soswapp/theme-soswapp/css/theme-<?php echo PRJ_THEME; ?>.min.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="/app/soswapp/plugin-soswapp/css/plugin.min.css">
    <link rel="stylesheet" href="/app/soswapp/dnav-soswapp/css/dnav.min.css">
    <link rel="stylesheet" href="/app/soswapp/faderbox-soswapp/css/faderbox.min.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.min.css"); ?>">
  </head>
  <body>
    <?php \TymFrontiers\Helper\setup_page("base", "base",true, PRJ_HEADER_HEIGHT); ?>
    <!-- <div id="sos-loader">
      <div id="sos-loader-loaded"></div>
    </div> -->
    <header id="page-head" class="color face-primary border -bthin -bbottom">
      <div class="view-space">
        <nav class="padding -p20">
          <a href="#">Nav one</a>
          <a href="#">Nav two</a>
          <a href="#">Nav three</a>
          <a href="#">Nav four</a>
          <a href="#">Nav five</a>
        </nav>
      </div>
    </header>
    <div id="main-content">
      <div class="view-space">
        <div class="sec-div padding -p20">
          <h1>7 OS Project template</h1>
        </div>
      </div>
    </div>

    <!-- Required scripts -->
    <script src="/app/soswapp/jquery-soswapp/js/jquery.min.js">  </script>
    <script src="/app/soswapp/js-generic-soswapp/js/js-generic.min.js">  </script>
    <script src="/app/soswapp/theme-soswapp/js/theme.min.js"></script>
    <!-- optional plugins -->
    <script src="/app/soswapp/plugin-soswapp/js/plugin.min.js"></script>
    <script src="/app/soswapp/dnav-soswapp/js/dnav.js"></script>
    <script src="/app/soswapp/faderbox-soswapp/js/faderbox.min.js"></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>"></script>
    <script type="text/javascript">
    </script>
  </body>
</html>
