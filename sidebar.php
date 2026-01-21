<?php
/**
 * Sidebar Template
 *
 * @package Estate_Theme
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="blog-sidebar widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
