<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="page-wrapper"><div id="page">
    <header>
      <hgroup id="logo">
        <h1 id="interior-page"><a href="http://techneblog.com"><img src="sites/all/themes/techne/assets/images/techne_logo_320.gif"></a></h1>
      </hgroup>
      <h1 id="menu"><a href="#firstlink">menu</a></h1>
    </header>

    <?php print $messages; ?>

    <section id="main_content">
      <header id="page-title">
        <h1><?php print render($title);?></h1>
      </header>
      <?php print render($page['content']); ?>
    </section>

    <?php if ($page['sidebar']): ?>
      <aside class="sidebar">
        <?php print render($page['sidebar']); ?>
      </aside>
    <?php endif; ?>

    <nav id="mainmenu">
      <ul>
        <li><a id="firstlink" href="./blog"><i class="fa fa-paragraph"></i>Blog<span class="navtag">byte-sized tips</span></a> </li>
        <li><a href="./articles"><i class="fa fa-newspaper-o"></i>Articles<span class="navtag">in-depth explanations</span></a></li>
        <li><a href="./portfolio"><i class="fa fa-briefcase"></i>Portfolio<span class="navtag">samples of my work</span></a></li>
        <li><a href="./about"><i class="fa fa-meh-o"></i>About<span class="navtag">info about me</span></a></li>
      </ul>
    </nav>
    <footer>
    <i class="fa fa-search"></i><?php print render($page['footer']); ?>
    <ul class="social-bookmarks">
      <li class="linkedin"><a href="http://www.linkedin.com/pub/thomas-dodson/b/183/733"><i class="fa fa-linkedin"></i></a></li>
      <li class="github"><a href="https://github.com/tdodson"><i class="fa fa-github-alt"></i></a></li>
      <li class="twitter"><a href="http://twitter.com/techneblog"><i class="fa fa-twitter"></i></a></li>
      <li class="facebook"><a href="http://www.facebook.com/dodson.t"><i class="fa fa-facebook"></i></a></li>
      <li class="rss"><a href="feed.xml"><i class="fa fa-rss"></i></a></li>
    </ul>
    </footer>

  </div></div> <!-- /#page, /#page-wrapper -->
