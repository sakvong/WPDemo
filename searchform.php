<form class="search" action="<?php echo home_url(); ?>/" method="get">
    <div class="heading">
    <h4><?php _e('Search', 'newave_theme') ?></h4>
    </div>
    <input name="s" type="text" id="search" size="30"  onfocus="if(this.value == '<?php _e('Search', 'newave_theme') ?>...') { this.value = ''; }" onblur="if(this.value == '') { this.value = '<?php _e('Search', 'newave_theme') ?>...'; }" value="<?php _e('Search', 'newave_theme') ?>..." >
    <input type="submit" value="Search" id="searchsubmit" class="hidden" />
</form>