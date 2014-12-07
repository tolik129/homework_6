<?php
/**
 * Plugin Name: arzamath_17th
 * Author: Boyko Anatoliy
 * Description: Перший плагін AJAX
 */
function aad_admin_page(){
   $aad_settings = add_options_page(__('Admin Ajax Demo', 'aa'), __('Admin Ajax', 'add'), 'manage_options', 'admin-ajax-demo', 'aad_render_admin');
}
add_action('admin_menu', 'aad_admin_page');
function aad_render_admin() {
    ?>
<div class="wrap">
    <h2><?php _e('Admin Ajax Demo', 'aad'); ?></h2>

</div>

    <?php
}