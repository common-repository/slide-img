<?php
//add shortcode
function Slide_img_add_shortcode() {
global $slideimg_options;
ob_start(); ?>
      <div style="border:<?php echo $slideimg_options['vien']; ?> solid <?php echo $slideimg_options['mau']; ?>" class="slider-wrapper <?php echo $slideimg_options['bovien']; ?>" id="slider">
        <ul class="slider-img">
		<?php if ($slideimg_options['img1'] != "") { ?>
          <li>
            <a href="<?php echo $slideimg_options['link1']; ?>" <?php if ($slideimg_options['open1'] == true) {echo 'target="_blank"';} ?> ><img src="<?php echo $slideimg_options['img1'] ?>" alt="" /></a>
			<?php if($slideimg_options['text1'] != ""){ ?><div class="slideimg-text <?php echo $slideimg_options['size']; ?>"><a href="<?php echo $slideimg_options['link1']; ?>" <?php if ($slideimg_options['open1'] == true) {echo 'target="_blank"';} ?> ><?php echo $slideimg_options['text1']; ?></a></div><?php } ?>
          </li>
		<?php } ?>
		
		<?php if ($slideimg_options['img2'] != "") { ?>
          <li>
            <a href="<?php echo $slideimg_options['link2']; ?>" <?php if ($slideimg_options['open2'] == true) {echo 'target="_blank"';} ?> ><img src="<?php echo $slideimg_options['img2'] ?>" alt="" /></a>
			<?php if($slideimg_options['text2'] != ""){ ?><div class="slideimg-text <?php echo $slideimg_options['size']; ?>"><a href="<?php echo $slideimg_options['link2']; ?>" <?php if ($slideimg_options['open2'] == true) {echo 'target="_blank"';} ?> ><?php echo $slideimg_options['text2']; ?></a></div><?php } ?>
          </li>
		<?php } ?>
		
		<?php if ($slideimg_options['img3'] != "") { ?>
          <li>
            <a href="<?php echo $slideimg_options['link3']; ?>" <?php if ($slideimg_options['open3'] == true) {echo 'target="_blank"';} ?> ><img src="<?php echo $slideimg_options['img3'] ?>" alt="" /></a>
			<?php if($slideimg_options['text3'] != ""){ ?><div class="slideimg-text <?php echo $slideimg_options['size']; ?>"><a href="<?php echo $slideimg_options['link3']; ?>" <?php if ($slideimg_options['open3'] == true) {echo 'target="_blank"';} ?> ><?php echo $slideimg_options['text3']; ?></a></div><?php } ?>
          </li>
		<?php } ?>
		
		<?php if ($slideimg_options['img4'] != "") { ?>
          <li>
            <a href="<?php echo $slideimg_options['link4']; ?>" <?php if ($slideimg_options['open4'] == true) {echo 'target="_blank"';} ?> ><img src="<?php echo $slideimg_options['img4'] ?>" alt="" /></a>
			<?php if($slideimg_options['text4'] != ""){ ?><div class="slideimg-text <?php echo $slideimg_options['size']; ?>"><a href="<?php echo $slideimg_options['link4']; ?>" <?php if ($slideimg_options['open4'] == true) {echo 'target="_blank"';} ?> ><?php echo $slideimg_options['text4']; ?></a></div><?php } ?>
          </li>
		<?php } ?>
		
		<?php if ($slideimg_options['img5'] != "") { ?>
          <li>
            <a href="<?php echo $slideimg_options['link5']; ?>" <?php if ($slideimg_options['open5'] == true) {echo 'target="_blank"';} ?> ><img src="<?php echo $slideimg_options['img5'] ?>" alt="" /></a>
			<?php if($slideimg_options['text5'] != ""){ ?><div class="slideimg-text <?php echo $slideimg_options['size']; ?>"><a href="<?php echo $slideimg_options['link5']; ?>" <?php if ($slideimg_options['open5'] == true) {echo 'target="_blank"';} ?> ><?php echo $slideimg_options['text5']; ?></a></div><?php } ?>
          </li>
		<?php } ?>
		  		  
        </ul>
      </div>
<?php
$slideimg_top  = ob_get_clean();
return $slideimg_top;
}
add_shortcode( 'slideimg', 'Slide_img_add_shortcode');

