<?php
/**
 * @file om_maximenu_submenu.tpl.php
 * Default theme implementation of om maximenu with submenu blocks
 *
 * Available variables:
 * - $maximenu_name: Menu name given on configuration
 * - $disabled: Set links to be disabled when viewing the page of its path
 * - $links: All menu items which also contents each link property
 *
 * Helper variables:
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $user: (object) user properties
 * - $code: unique id given in the system
 * - $total: number of links
 *
 * @see template_preprocess_om_maximenu_submenu()
 * @see template_preprocess_om_maximenu_submenu_links()
 * @see template_preprocess_om_maximenu_submenu_content()
 *
 */
?>  

<div id="om-menu-<?php print $maximenu_name; ?>-ul-wrapper" class="om-menu-ul-wrapper">
  <ul id="om-menu-<?php print $maximenu_name; ?>" class="om-menu">
    <?php foreach ($links['links'] as $key => $content): ?>
      <?php $count++; ?>
      <?php print theme('om_maximenu_submenu_links', array('content' => $content, 'maximenu_name' => $maximenu_name, 'skin' => $skin, 'disabled' => $disabled, 'key' => $key, 'code' => $code, 'count' => $count, 'total' => $total)); ?>          
    <?php endforeach; ?>
  </ul><!-- /.om-menu -->    
</div><!-- /.om-menu-ul-wrapper -->   



