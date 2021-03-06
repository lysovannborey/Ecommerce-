<?php
/**
 * tpl_box_default_right.php
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * Altered by rbarbour (ZCAdditions.com), Responsive DIY Template Default for 1.5.x (65)
 */

// choose box images based on box position
  if ($title_link) {
    $title = '<a href="' . zen_href_link($title_link) . '">' . $title . BOX_HEADING_LINKS . '</a>';
  }
//
?>

<!--// bof: <?php echo $box_id; ?> //-->
<?php if (COLUMN_WIDTH == '0'){ ?>
<div class="rightBoxContainer" id="<?php echo str_replace('_', '-', $box_id ); ?>" style="width: <?php echo $column_width; ?>">
<?php }else{ ?>
<div class="rightBoxContainer <?php echo $minWidthHide; ?>" id="<?php echo str_replace('_', '-', $box_id ); ?>">
<?php } ?>

<div class="ribbon2">
<h3 class="rightBoxHeading ribbon2-content" id="<?php echo str_replace('_', '-', $box_id) . 'Heading'; ?>"><?php echo $title; ?></h3>
</div>

<?php echo $content; ?>
</div>
<!--// eof: <?php echo $box_id; ?> //-->

