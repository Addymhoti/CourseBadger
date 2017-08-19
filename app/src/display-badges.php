<?php 
			
	foreach($courses as $course){
		echo '<div class="badge_area">';
		echo '<img src="' . $course["badge"] .'"/>';
		echo '<br>';
		echo '<a href="' . $course["url"]  .'">' . $course['title'] . '</a>';
		echo '</div>';
	}	
	?>