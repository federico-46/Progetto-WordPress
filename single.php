<?php get_header(); ?>

<div class="content pt-5">
	<div class="container pt-5">
		<div class="row">
			<div class="col padding_img">
				<?php if (get_the_post_thumbnail_url() != '') : ?>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Foto" class="mx-auto d-block img-fluid" />
				<?php endif; ?>
				<div class="p-5">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="text-center pb-5"><?php the_title(); ?></h1>
						<div class="testo">
							<?php the_content(); ?>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>