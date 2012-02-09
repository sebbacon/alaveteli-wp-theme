<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link href="http://test.alaveteli.org/stylesheets/main.css?1328784189" media="all" rel="stylesheet" title="Main" type="text/css">
        <link href="http://test.alaveteli.org/stylesheets/fonts.css?1314786482" media="all" rel="stylesheet" type="text/css">
        <link href="http://test.alaveteli.org/stylesheets/print.css?1328784189" media="print" rel="stylesheet" type="text/css">
        
        <!--[if LT IE 7]> 
        <style type="text/css">@import url("/stylesheets/ie6.css");</style> 
        <![endif]-->
        <!--[if LT IE 7]> 
        <style type="text/css">@import url("/stylesheets/ie6-custom.css");</style> 
        <![endif]-->
        <!--[if LT IE 8]> 
        <style type="text/css">@import url("/stylesheets/ie7.css");</style> 
        <![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="entirebody">
    <div id="banner">
      <div id="banner_inner">
        
        
          <div id="logged_in_bar">
 <img src="http://test.alaveteli.org/images/twitter-16.png" alt="twitter icon" class="twitter-icon"> <a href="http://www.twitter.com/alaveteli_foi">Follow us on twitter</a>

          </div>
           

        <div id="navigation_search">
            <form action="/" id="navigation_search_form" method="get">
               <p>
                   <input id="navigation_search_query" name="s" size="40" type="text" value="<?php the_search_query(); ?>">
                   <input src="http://test.alaveteli.org/images/search-button.png?1314786482" type="image">
               </p>
            </form>
        </div>
        
        <a href="/" id="logo"><img src="http://test.alaveteli.org/alavetelitheme/images/logo.png?1328785848" alt="Logo"></a>

        
        <div id="topnav">
          <ul>
			<?php wp_list_pages('title_li=&depth=1' ); ?>
          </ul>

    </ul>
</div>

      </div>
    </div>
    <div id="wrapper">
        <div id="content">
            
            

            <div id="help_about" class="controller_help">
            
