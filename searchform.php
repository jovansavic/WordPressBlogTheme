<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

        <input type="search" class="search-field"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />


    <button value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="material-icons">search</i></button>
</form>