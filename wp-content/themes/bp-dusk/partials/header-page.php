<div class="pageheader">
	<h2><i class="fa fa-home"></i> <?php the_title(); ?> <span>Welcome to your live <?php the_title(); ?> <strong><a href="/your-profile/"><?php// get_template_part('partials/metadata', 'users'); ?></a></strong>...</span></h2>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li><a href="index.html"><?php echo bloginfo('name'); ?></a></li>
			<li class="active"><?php the_title(); ?></li>
		</ol>
	</div>
</div>