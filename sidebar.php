<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
?>
<div id="right_column_flip">
<?php if ($children) { ?>
<div id="secondary-nav">
<h2>In this section:</h2><?php
  echo "<ul class='no_bullets'>".$children."</ul>";
?>
</div>
<?php
} else { ?>
		 <h2>Recent blog posts</h2>
		 <ul class="no_bullets">
		 <?php
		 	$recent_posts = wp_get_recent_posts();
		 	foreach( $recent_posts as $recent ){
		 		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
		 	}
		 ?>
		 </ul>

<?php } 

if (is_home()) {
 ?>
   
                      <li><h2><?php _e('Archives', 'kubrick'); ?></h2>
                              <ul class="no_bullets">
                              <?php wp_get_archives('type=monthly'); ?>
                              </ul>
                      </li>

<?php } ?>      
		<ul class="no_bullets">

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
    ?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p><?php printf(__('You are currently browsing the archives for the %s category.', 'kubrick'), single_cat_title('', false)); ?></p>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the day %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('l, F jS, Y', 'kubrick'))); ?></p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('F, Y', 'kubrick'))); ?></p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the year %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time('Y')); ?></p>

			<?php /* If this is a search result */ } elseif (is_search()) { ?>
			<p><?php printf(__('You have searched the <a href="%1$s/">%2$s</a> blog archives for <strong>&#8216;%3$s&#8217;</strong>. If you are unable to find anything in these search results, you can try one of these links.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), wp_specialchars(get_search_query(), true)); ?></p>

			<?php /* If this set is paginated */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name')); ?></p>

			<?php } ?>

		<?php }?>
		</ul>

<h2>Alaveteli resources elsewhere on the web</h2>
<ul class="no_bullets">
<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
</ul>