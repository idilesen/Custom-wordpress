<div class="container">
	<header class="content-header">
		<div class="meta mb-3">
            <span class="date">P<?php the_date(); ?></span>

            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number();?></a></span>
        </div>
    </header>

<?php
    the_content();
?>

</div>  