					
						<div class="position-relative wrapper post-<?php echo get_the_ID() ?>	">
							<?php if ( has_post_thumbnail() ):?>
							<div class="feature-img">
								<?php
									list($width, $height, $type, $attr) = getimagesize(get_the_post_thumbnail_url( get_the_ID() ));
									if ($width>540 AND $height>280){
										$imgurl = aq_resize(get_the_post_thumbnail_url( get_the_ID() ), 540, 280, true);
									} else {
										$imgurl = get_the_post_thumbnail_url( get_the_ID() );
									}
								?>
								<img class="img-fluid img-blog" src="<?php echo $imgurl ?>" alt="<?php echo $mosbelocal_options['misc-img-alt'][0] . ' | ' .get_the_title() ?>">
							</div>						
							<?php endif; ?>
							<div class="d-flex">
								<div class="post-date">
									<span><?php echo get_the_date( 'd' ); ?></span>									
									<span><?php echo get_the_date( 'M' ); ?></span>									
								</div>
								<div class="post-desc">
									<div class="post-auth">Posted by <?php echo get_the_author(); ?></div>
									<h4 class="post-title"><?php the_title(); ?></h4>
									<div class="post-con"><?php echo wp_trim_words(get_the_content(), 30, ''); ?></div>
								</div>
							</div>
							<a href="<?php echo get_the_permalink() ?>" class="position-absolute hidden-link">Read More</a>
						</div>
					