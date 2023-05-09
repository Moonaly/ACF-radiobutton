<?php

function casino_list_display($atts) {
// Attributes
$atts = shortcode_atts(
array(
	'postid' => get_the_ID(),
), 
$atts
);
// Attributes in var
$post_id = $atts['postid']; 
ob_start();
?>


<?php if( have_rows('casino_list_display', $postid) ): ?>

	<div class="casinolist_display"> 
		<div class="casinolist_row">
			<?php while( have_rows('casino_list_display', $postid) ): the_row(); 
				$display_img = get_sub_field('display_img');
				$display_title = get_sub_field('display_title', $postid);
				$display_link = get_sub_field('display_link');
				$display_desc = get_sub_field('display_desc', $postid);
			// 	$display_rating = get_sub_field('display_rating');
			?>
			<div class="casinolist_item col">
				<div class="casinolist_bx row">
					<div class="col casinothumb">
					    <div class="casinolist_thumb">
					        <div class="num">
					            <span>1</span>
					        </div>
					        <img src="<?php echo $display_img; ?>">
					    </div>
					    <div class="casinolist_title"><a href="<?php echo $display_link; ?>"><?php echo $display_title; ?></a></div>
					</div>
					<div class="col"><?php echo $display_desc; ?></div>
					<div class="col">
					    <div class="star-rating">

                            <?php $display_rating = get_sub_field('display_rating'); ?>
                            
                            <?php if ($display_rating == 'one'): ?>
                            
                                <div class="star star-full"></div>
                                <div class="star star-empty"></div>
                                <div class="star star-empty"></div>
                                <div class="star star-empty"></div>
                                <div class="star star-empty"></div>
                            
                            <?php elseif ($display_rating == 'two'): ?>
                            
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-empty"></div>
                                <div class="star star-empty"></div>
                                <div class="star star-empty"></div>
                            
                            <?php elseif ($display_rating == 'three'): ?>
                            
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-empty"></div>
                                <div class="star star-empty"></div>
                            
                            <?php elseif ($display_rating == 'four'): ?>
                            
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-empty"></div>
                            
                            <?php elseif ($display_rating == 'fourhalf'): ?>
                            
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-half"></div>
                                <div class="star star-empty"></div>
                            
                            <?php elseif ($display_rating == 'five'): ?>
                            
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                                <div class="star star-full"></div>
                            
                            <?php endif; ?>

                        </div>

					    
					    <span>New players only</span>
					</div>
					<div class="col">
					    <div class="btn_group">
					        <a href="#"><div class="btn_vst">VISIT</div></a>
					        <a href="#"><div class="btn_rr">Read Review</div></a>
					    </div>
					</div>
				</div>
				<div class="text-darkgray">
				    <p>18+. New players only. Welcome Bonus - Place 5 x €/$/£10 or more bets to receive €/$/£25 in free bets. This bonus only applies for deposits of €/$/£50 or higher! All you need to do is just deposit the money in your website.com account and you will receive this bonus instantly!</p>
				</div>
			</div>
		<?php endwhile; ?>			
		</div>	
	</div>

	<script> 
	</script>
<?php endif; ?>


<?php
return ob_get_clean();
}
add_shortcode('casino_list_display','casino_list_display');

