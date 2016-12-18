<?php
/**
 *
 * MyBB 1.8
 * portfolio.php
 * Tutorial by: vintagedaddyo
 * https://community.mybb.com/user-6029.html
 *
 */

define('IN_MYBB', 1);
define('THIS_SCRIPT', 'portfolio.php');

$templatelist = "portfolio";

require_once './global.php';
add_breadcrumb("Portfolio", "portfolio.php");
eval('$portfolio = "'.$templates->get('portfolio').'";');
output_page($portfolio);

?>