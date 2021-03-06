<?php
// $Id: xoops_version.php,v 1.2 2002/09/05 18:41:11 half-dead Exp $
// ------------------------------------------------------------------------- //
//               E-Xoops: Content Management for the Masses                  //
//                       < http://www.e-xoops.com >                          //
// ------------------------------------------------------------------------- //
// Original Author: alphalogic
// Author Website : http://www.alphalogic-network.de
//
// Ported/Modified by Nicholas Petreley
// www.varlinux.org
// ------------------------------------------------------------------------- //

$modversion['name'] = _MI_STOCKBOX_NAME;
$modversion['version'] = 0.1;
$modversion['description'] = _MI_STOCKBOX_DESC;
$modversion['credits'] = "The XOOPS Project";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "stockbox.png";
$modversion['dirname'] = "stockquotes";
$modversion['author'] = 'N. Petreley';

// Admin things
$modversion['hasAdmin'] = 0;

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "ustocks";

// Blocks
$modversion['blocks'][1]['file'] = "stockbox.php";
$modversion['blocks'][1]['name'] = _MI_STOCKBOX_NAME;
$modversion['blocks'][1]['description'] = _MI_STOCKBOX_DESC;
$modversion['blocks'][1]['show_func'] = "b_stockbox_show";
$modversion['blocks'][1]['edit_func'] = "b_stockbox_edit";
$modversion['blocks'][1]['options'] = "SCOX MSFT IBM RHAT|160|170|10|3000|5";
$modversion['blocks'][1]['template'] = 'stockbox_iframe.html';

// Menu
$modversion['hasMain'] = 1;

?>
