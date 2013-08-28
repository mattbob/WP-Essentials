<?php
/**
 * Move the functions below to your wp-config file,
 * after the line "That's all, stop editing! Happy blogging."
 */

define('WP_CACHE', true); // Enable native caching mechanism
define('WP_POST_REVISIONS', 10); // Limit post revisions to 10
define('EMPTY_TRASH_DAYS', 21); // Empty trash every three weeks
define('DISALLOW_FILE_EDIT', true); // Disable the native theme editor
?>