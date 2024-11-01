<?php
// code add muc luc setting admin
function Slide_img_options_page() {
	global $slideimg_options;
	$slideimg_addimg = __('Import image address', 'slide-img'); 
	$slideimg_addlink = __('The link moves away after clicking the image', 'slide-img'); 
	$slideimg_addtext = __('Show text on the image', 'slide-img');
	$slideimg_open = __('Open new page', 'slide-img');
	
	ob_start(); ?>
	<div class="wrap" style="font-size:15px;">
		<h2 style="background: rgb(118,163,18);background: linear-gradient(87deg, rgb(97 97 97) 0%, rgb(247 230 218 / 0%) 100%);padding:10px;color:#fff;border-radius:10px;"><b><?php echo __('SLIDE IMG SETTINGS', 'slide-img'); ?></b></h2>
		<form method="post" action="options.php">
			<?php settings_fields('slideimg_settings_group'); ?>
		   <h4 style="font-size:28px;color:#666"><?php _e('Set up the options below', 'slide-img'); ?></h4>
		   
		   <div style="margin-top:20px;background:#fff;padding:20px;border-radius:10px;box-shadow:0px 0px 4px #999">
		       <div style="font-size:23px;margin-bottom:7px;"><b><?php _e('Border styles', 'slide-img'); ?></b></div>
			   <?php _e('Border styles Round or Square', 'slide-img'); ?><p />
		       <?php $boviens = array('Round', 'Square'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="slideimg_settings[bovien]" id="slideimg_settings[bovien]" > 
               <?php foreach($boviens as $bovien) { ?> 
               <?php if($slideimg_options['bovien'] == $bovien) { $selectebo = 'selected="selectebo"'; } else { $selectebo = ''; } ?>
               <option value="<?php echo $bovien; ?>" <?php echo $selectebo; ?>><?php echo $bovien; ?></option> 
               <?php } ?> 
               </select>
			   
			   <div style="font-size:23px;margin-bottom:7px;"><b><?php _e('Text size', 'slide-img'); ?></b></div>
			   <?php _e('The text size displayed on the image', 'slide-img'); ?><p />
		       <?php $sizes = array('Default', 'Size-15px', 'Size-20px', 'Size-25px', 'Size-30px', 'Size-35px', 'Size-40px', 'Size-45px'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="slideimg_settings[size]" id="slideimg_settings[size]" > 
               <?php foreach($sizes as $size) { ?> 
               <?php if($slideimg_options['size'] == $size) { $selectez = 'selected="selectez"'; } else { $selectez = ''; } ?>
               <option value="<?php echo $size; ?>" <?php echo $selectez; ?>><?php echo $size; ?></option> 
               <?php } ?> 
               </select>
			   
			    <div style="font-size:23px;margin-bottom:7px;"><b><?php _e('Border line', 'slide-img'); ?></b></div>
			   <?php _e('Border size', 'slide-img'); ?><p />
		       <?php $viens = array('0px', '1px', '2px', '3px', '4px', '5px', '6px', '7px', '8px', '9px', '10px'); ?>
               <select style="border:2px solid #aaa;border-radius:10px;width:150px;" name="slideimg_settings[vien]" id="slideimg_settings[vien]" > 
               <?php foreach($viens as $vien) { ?> 
               <?php if($slideimg_options['vien'] == $vien) { $selectev = 'selected="selectev"'; } else { $selectev = ''; } ?>
               <option value="<?php echo $vien; ?>" <?php echo $selectev; ?>><?php echo $vien; ?></option> 
               <?php } ?> 
               </select>
			   <p><label class="description" for="slideimg_settings[title-name]"><?php _e('Border color', 'slide-img'); ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;width:150px;height:40px;" id="slideimg_settings[mau]" name="slideimg_settings[mau]" type="color" value="<?php echo $slideimg_options['mau']; ?>"/>
		   </div>
		   		   
		   <div style="margin-top:20px;background:#fff;padding:20px;border-radius:10px;box-shadow:0px 0px 4px #999">
		        <div style="font-size:23px;margin-bottom:7px;"><b><?php _e('Add image', 'slide-img'); ?></b></div>
				<?php _e('Add an image by entering its images address in the input below', 'slide-img'); ?><p />
				
				<div style="margin-top:20px;padding:20px;border:2px dashed #999;border-radius:5px;">
				<b><?php _e('Add image 1', 'slide-img'); ?></b>
				<br><?php if ($slideimg_options['img1'] != ""){?><br>
				<div><img style="max-width:300px;width:100%;border-radius:10px;border:2px solid #aaa" src="<?php echo $slideimg_options['img1']; ?>" /></div><?php } ?>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addimg; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[img1]" name="slideimg_settings[img1]" type="text" placeholder="https://..." value="<?php echo $slideimg_options['img1']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addtext; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[text1]" name="slideimg_settings[text1]" type="text" placeholder="<?php _e('Import text display', 'slide-img'); ?>" value="<?php echo $slideimg_options['text1']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addlink; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[link1]" name="slideimg_settings[link1]" type="text" placeholder="URL" value="<?php echo $slideimg_options['link1']; ?>"/>
			    <br><br>
				<input id="slideimg_settings[open1]" type="checkbox" name="slideimg_settings[open1]" value="1" <?php checked('1', $slideimg_options['open1']); ?> />
                <label style="font-size:14px;"><?php echo $slideimg_open; ?></label>
				</div>
				
				<div style="margin-top:20px;padding:20px;border:2px dashed #999;border-radius:5px;">
				<b><?php _e('Add image 2', 'slide-img'); ?></b>
				<br><?php if ($slideimg_options['img2'] != ""){?><br>
				<div><img style="max-width:300px;width:100%;border-radius:10px;border:2px solid #aaa" src="<?php echo $slideimg_options['img2']; ?>" /></div><?php } ?>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addimg; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[img2]" name="slideimg_settings[img2]" type="text" placeholder="https://..." value="<?php echo $slideimg_options['img2']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addtext; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[text2]" name="slideimg_settings[text2]" type="text" placeholder="<?php _e('Import text display', 'slide-img'); ?>" value="<?php echo $slideimg_options['text2']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addlink; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[link2]" name="slideimg_settings[link2]" type="text" placeholder="URL" value="<?php echo $slideimg_options['link2']; ?>"/>
			    <br><br>
				<input id="slideimg_settings[open2]" type="checkbox" name="slideimg_settings[open2]" value="1" <?php checked('1', $slideimg_options['open2']); ?> />
                <label style="font-size:14px;"><?php echo $slideimg_open; ?></label>
				</div>
				
				<div style="margin-top:20px;padding:20px;border:2px dashed #999;border-radius:5px;">
				<b><?php _e('Add image 3', 'slide-img'); ?></b>
				<br><?php if ($slideimg_options['img3'] != ""){?><br>
				<div><img style="max-width:300px;width:100%;border-radius:10px;border:2px solid #aaa" src="<?php echo $slideimg_options['img3']; ?>" /></div><?php } ?>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addimg; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[img3]" name="slideimg_settings[img3]" type="text" placeholder="https://..." value="<?php echo $slideimg_options['img3']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addtext; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[text3]" name="slideimg_settings[text3]" type="text" placeholder="<?php _e('Import text display', 'slide-img'); ?>" value="<?php echo $slideimg_options['text3']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addlink; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[link3]" name="slideimg_settings[link3]" type="text" placeholder="URL" value="<?php echo $slideimg_options['link3']; ?>"/>
			    <br><br>
				<input id="slideimg_settings[open3]" type="checkbox" name="slideimg_settings[open3]" value="1" <?php checked('1', $slideimg_options['open3']); ?> />
                <label style="font-size:14px;"><?php echo $slideimg_open; ?></label>
				</div>
				
				<div style="margin-top:20px;padding:20px;border:2px dashed #999;border-radius:5px;">
				<b><?php _e('Add image 4', 'slide-img'); ?></b>
				<br><?php if ($slideimg_options['img4'] != ""){?><br>
				<div><img style="max-width:300px;width:100%;border-radius:10px;border:2px solid #aaa" src="<?php echo $slideimg_options['img4']; ?>" /></div><?php } ?>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addimg; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[img4]" name="slideimg_settings[img4]" type="text" placeholder="https://..." value="<?php echo $slideimg_options['img4']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addtext; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[text4]" name="slideimg_settings[text4]" type="text" placeholder="<?php _e('Import text display', 'slide-img'); ?>" value="<?php echo $slideimg_options['text4']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addlink; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[link4]" name="slideimg_settings[link4]" type="text" placeholder="URL" value="<?php echo $slideimg_options['link4']; ?>"/>
			    <br><br>
				<input id="slideimg_settings[open4]" type="checkbox" name="slideimg_settings[open4]" value="1" <?php checked('1', $slideimg_options['open4']); ?> />
                <label style="font-size:14px;"><?php echo $slideimg_open; ?></label>
				</div>
				
				<div style="margin-top:20px;padding:20px;border:2px dashed #999;border-radius:5px;">
				<b><?php _e('Add image 5', 'slide-img'); ?></b>
				<br><?php if ($slideimg_options['img5'] != ""){?><br>
				<div><img style="max-width:300px;width:100%;border-radius:10px;border:2px solid #aaa" src="<?php echo $slideimg_options['img5']; ?>" /></div><?php } ?>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addimg; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[img5]" name="slideimg_settings[img5]" type="text" placeholder="https://..." value="<?php echo $slideimg_options['img5']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addtext; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[text5]" name="slideimg_settings[text5]" type="text" placeholder="<?php _e('Import text display', 'slide-img'); ?>" value="<?php echo $slideimg_options['text5']; ?>"/>
				<p><label class="description" for="slideimg_settings[title-name]"><?php echo $slideimg_addlink; ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#e0fff5;padding:5px;max-width:700px;width:100%;" id="slideimg_settings[link5]" name="slideimg_settings[link5]" type="text" placeholder="URL" value="<?php echo $slideimg_options['link5']; ?>"/>
			    <br><br>
				<input id="slideimg_settings[open5]" type="checkbox" name="slideimg_settings[open5]" value="1" <?php checked('1', $slideimg_options['open5']); ?> />
                <label style="font-size:14px;"><?php echo $slideimg_open; ?></label>
				</div>			
			</div>
			<div style="margin-top:20px;background:#fff;padding:20px;border-radius:10px;box-shadow:0px 0px 4px #999">
				<div style="font-size:23px;margin-bottom:7px;"><b><?php _e('Shortcode', 'slide-img'); ?></b></div>
				<?php _e('Use Shortcodes to display a photo slide show in the location you want', 'slide-img'); ?><p />
				<p><label class="description"><?php _e('Shortcode at content', 'slide-img'); ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#fffed5;padding:5px;max-width:700px;width:100%;" id="slideimg" name="slideimg" type="text"  value="[slideimg]"/>
				<p><label class="description"><?php _e('Shortcode at PHP', 'slide-img'); ?></label></p>
				<input style="border:1px solid #aaa;border-radius:10px;background:#fffed5;padding:5px;max-width:700px;width:100%;" id="slideimg" name="slideimg" type="text"  value="&lt;?php echo do_shortcode(&#39;[slideimg]&#39;); ?&gt;"/>
			</div>
						
		   <div class="submit"><input style="background:#444;color:#fff;padding: 2px 30px 2px 30px;border:none;font-size:18px;border-radius:10px" type="submit" class="button-primary" value="<?php _e('Save settings', 'slide-img'); ?>" /></div>
		</form>
	<div style="font-size:14px;"><?php _e('Thank you for using our plugin', 'slide-img'); ?> | <?php _e('by', 'slide-img'); ?> <a href="https://caodem.com">caodem.com</a></div>
	</div>
	<?php
	echo ob_get_clean();
}
// add muc luc menu admin
function Slide_img_add_options_link() {
	add_options_page('Slide IMG', 'Slide IMG', 'manage_options', 'slideimg-options', 'slide_img_options_page');
}
add_action('admin_menu', 'Slide_img_add_options_link');
// add thong tin vao database
function Slide_img_register_settings() {
	register_setting('slideimg_settings_group', 'slideimg_settings');
}
add_action('admin_init', 'Slide_img_register_settings');