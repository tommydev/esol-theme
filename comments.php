<?php
/*	@Theme Name	:	esol
* 	@file         :	comments.php
* 	@package      :	esol-lite
* 	@author       :	VibhorPurandare
* 	@license      :	license.txt
* 	@filesource   :	wp-content/themes/esol/comments.php
*/
 if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'esol' ); ?></p>
	<?php return; endif; ?>
         <?php if ( have_comments() ) : ?>
<div class="col-md-12">
			<div class="leave-comment">
				<h4 class="comment-title"><i class="fa fa-comments"></i>
					<?php echo comments_number('No Comments', '1 Comment', '% Comments'); ?></h4>
				<ol class="comments-list">
				<li>
					<ul>
						<li>
							<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>		
							<?php endif; ?>
							<?php wp_list_comments( array( 'callback' => 'asiathemes_comment' ) ); ?>
						</li>
					</ul>
				</li>
			</ol>
		</div>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'esol' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'esol' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'esol' ) ); ?></div>
		</nav>
		<?php endif;  ?>
		<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : 
        //_e("Comments Are Closed!!!",'esol');
		?>
	<?php endif; ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e("You must be",'esol'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e("logged in",'esol')?></a> <?php _e("to post a comment",'esol'); ?>
</p>
<?php else : ?>
	<div class="col-md-12">
			<div class="leave-comment">
	<?php  
	  $fields=array(
		'author' => '<div class="row">
					<div class="col-md-4">
						<input type="text" name="author" id="author" class="blog-search-field"placeholder="Your name here...">
					</div>',
		'email' => '<div class="col-md-4">
						<input type="email" class="blog-search-field" name="email" id="email" placeholder="Your email here...">
					</div></div>',
	);
	function my_fields($fields) { 
		return $fields;
	}
	add_filter('wl_comment_form_default_fields','my_fields');
		$defaults = array(
		'fields'=> apply_filters( 'wl_comment_form_default_fields', $fields ),
		'comment_field'=> '<textarea id="comment" name="comment" cols="45" rows="8" placeholder="Your message here..."></textarea>',		
		'logged_in_as' => '<p class="logged-in-as">' . __( "Logged in as ",'esol' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Log out of this account">'.__(" Log out?",'esol').'</a>' . '</p>',
		'title_reply_to' => __( 'Leave a Reply to %s','esol'),
		'class_submit' => 'accent-button',
		'id_submit'            => 'comment_btn',
		'label_submit'=>__( 'Submit Comment','esol'),
		'comment_notes_before'=> '',
		'comment_notes_after'=>'',
		'title_reply'=> '<h2>'.__('Leave a Reply','esol').'</h2>',		
		'role_form'=> 'form',		
		);
		comment_form($defaults); ?>						
	
<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>