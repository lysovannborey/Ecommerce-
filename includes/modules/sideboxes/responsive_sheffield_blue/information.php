<?php
/**
 * information sidebox - displays list of general info links, as defined in this file
 *
 * @package templateSystem
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sun Feb 17 23:22:33 2013 -0500 Modified in v1.5.2 $
 *
 * BetterCategoriesEzInfo v1.3.5 added  2006-09-19  gilby
 */

  $pointer = '<i class="fa fa-caret-right"></i>';
  // uncomment next line to add 1 space between image & text
  // $pointer .= '&nbsp;';

  unset($information);

 if (DEFINE_ABOUT_US_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_ABOUT_US) . '">' . $pointer . BOX_INFORMATION_ABOUT_US . '</a>';
 }
  if (DEFINE_SHIPPINGINFO_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_SHIPPING) . '">' . $pointer . BOX_INFORMATION_SHIPPING . '</a>';
  }
  if (DEFINE_PRIVACY_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_PRIVACY) . '">' . $pointer . BOX_INFORMATION_PRIVACY . '</a>';
  }
  if (DEFINE_CONDITIONS_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_CONDITIONS) . '">' . $pointer . BOX_INFORMATION_CONDITIONS . '</a>';
  }
  if (DEFINE_CONTACT_US_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_CONTACT_US) . '">' . $pointer . BOX_INFORMATION_CONTACT . '</a>';
  }

// Forum (phpBB) link:
  if ( (isset($phpBB->phpBB['db_installed_config']) && $phpBB->phpBB['db_installed_config']) && (isset($phpBB->phpBB['files_installed']) && $phpBB->phpBB['files_installed'])  && (PHPBB_LINKS_ENABLED=='true')) {
    $information[] = '<a href="' . zen_href_link($phpBB->phpBB['phpbb_url'] . FILENAME_BB_INDEX, '', 'NONSSL', false, '', true) . '" target="_blank">' . $pointer . BOX_BBINDEX . '</a>';
// or: $phpBB->phpBB['phpbb_url'] . FILENAME_BB_INDEX
// or: str_replace(str_replace(DIR_WS_CATALOG, '', DIR_FS_CATALOG), '', DIR_WS_PHPBB)
  }

  if (DEFINE_SITE_MAP_STATUS <= 1) {
    $information[] = '<a href="' . zen_href_link(FILENAME_SITE_MAP) . '">' . $pointer . BOX_INFORMATION_SITE_MAP . '</a>';
  }

  // only show GV FAQ when installed
  if (MODULE_ORDER_TOTAL_GV_STATUS == 'true') {
    $information[] = '<a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . $pointer . BOX_INFORMATION_GV . '</a>';
  }
  // only show Discount Coupon FAQ when installed
  if (DEFINE_DISCOUNT_COUPON_STATUS <= 1 && MODULE_ORDER_TOTAL_COUPON_STATUS == 'true') {
    $information[] = '<a href="' . zen_href_link(FILENAME_DISCOUNT_COUPON) . '">' . $pointer . BOX_INFORMATION_DISCOUNT_COUPONS . '</a>';
  }

  if (SHOW_NEWSLETTER_UNSUBSCRIBE_LINK == 'true') {
    $information[] = '<a href="' . zen_href_link(FILENAME_UNSUBSCRIBE) . '">' . $pointer . BOX_INFORMATION_UNSUBSCRIBE . '</a>';
  }

  require($template->get_template_dir('tpl_information.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_information.php');

  $title =  BOX_HEADING_INFORMATION;
  $title_link = false;

  require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);

