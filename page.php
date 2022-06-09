<?php get_header(); ?>

<div class="content pt-5 ">
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col padding_img">
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php if (get_the_post_thumbnail_url() != '') : ?>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Foto" class="mx-auto d-block img-fluid" />
				<?php endif; ?>
				<div class="contenuto_centrale">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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