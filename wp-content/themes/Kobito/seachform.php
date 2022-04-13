<form action="<?php echo home_url('/');?>" method="get">
    <label for="search">検索:</label>
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
		<input type="submit" value="Search"/>
</form>