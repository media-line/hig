<?php

  if ($categories_arr) { ?>
	  <div class="joomshopping_menu_name">
	  	<?php $category = JTable::getInstance('category', 'jshop');        
		$category->load(JRequest::getInt('category_id')); 
		echo $category->{"name_ru-RU"};?>
	  </div>
	  <div class="joomshopping_menu_list">
		  <?php foreach($categories_arr as $curr){
			  $class = "jshop_menu_level_".$curr->level;
			  if ($categories_id[$curr->level]==$curr->category_id) $class = $class."_a";      
			  ?>
			  <div class = "<?php print $class?>">
					<a href = "<?php print $curr->category_link?>"><?php print $curr->name?>
						<?php if ($show_image && $curr->category_image){?>
							<img align = "absmiddle" src = "<?php print $jshopConfig->image_category_live_path."/".$curr->category_image?>" alt = "<?php print $curr->name?>" />
						<?php } ?>
					</a>
			  </div>
		  <?php
		  } ?>
	  </div>
	  
	  <a href="/produktsiya" class="joomshopping_menu_link"><div class="joomshopping_menu_back_tr"></div><div class="joomshopping_menu_back">Вернуться к списку</div></a>
  <?php }
?>