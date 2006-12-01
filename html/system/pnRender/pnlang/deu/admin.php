<?php
/**
 * $Id: admin.php 19260 2006-06-12 13:08:15Z markwest $
 *
 * * pnRender *
 *
 * PostNuke wrapper class for Smarty
 *
 * * License *
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU GENERAL PUBLIC LICENSE (GPL)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY -- without even the implied warranty -- of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * @author      PostNuke development team
 * @version     .7/.8
 * @link        http://www.post-nuke.net              PostNuke home page
 * @link        http://smarty.php.net                 Smarty home page
 * @license      http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @package     PostNuke_System_Modules
 * @subpackage  pnRender
 */

define('_PNRENDER_ADMIN',                'pnRender administration');
define('_PNRENDER_SMARTYVERSION',        'Smarty Version');

define('_PNRENDER_COMPILE_SETTINGS',     'Compile settings');
define('_PNRENDER_COMPILE_CHECK',        'Compile check');
define('_PNRENDER_FORCE_COMPILE',        'Force compilation');
define('_PNRENDER_CLEAR_COMPILED',       'Delete compiled templates');
define('_PNRENDER_COMPILED_CLEARED',     'Compiled templates deleted');
define('_PNRENDER_COMPILE_DIR',          'Compiled templates directory');

define('_PNRENDER_CACHE_SETTINGS',       'Cache settings');
define('_PNRENDER_CACHE_ENABLE',         'Enable caching');
define('_PNRENDER_CACHE_LIFETIME',       'Lifetime for cached pages');
define('_PNRENDER_CLEAR_CACHED',         'Delete cached pages');
define('_PNRENDER_CACHE_CLEARED',        'Cache cleared');
define('_PNRENDER_CACHE_DIR',            'Cached templates directory');
define('_PNRENDER_CACHETIMENOTE1',       'A cache lifetime of 0 will set to cache to always regenerate - equivalent to no caching.');
define('_PNRENDER_CACHETIMENOTE2',       'A cache lifetime of -1 will never expire the cached output'); 

define('_PNRENDER_DEBUG_SETTINGS',       'Debug settings');
define('_PNRENDER_EXPOSE_TEMPLATE',      'Expose template information in comments');

?>