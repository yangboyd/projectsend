<?php
/**
 * Requirements of basic system files.
 *
 * @package ProjectSend
 * @subpackage Core
 */

define('ROOT_DIR', dirname(__FILE__));

/** PhpPass */
require_once(ROOT_DIR.'/includes/phpass/PasswordHash.php');

/** Basic system constants */
require_once(ROOT_DIR.'/sys.vars.php');

/** Load the database class */
require_once(ROOT_DIR.'/includes/classes/database.php');

/** Load the site options */
if ( !defined( 'IS_MAKE_CONFIG' ) ) {
	require_once(ROOT_DIR.'/includes/site.options.php');
}

/** Load the language class and translation file */
require_once(ROOT_DIR.'/includes/language.php');

/** Text strings used on various files */
require_once(ROOT_DIR.'/includes/vars.php');

/** Basic functions to be accessed from anywhere */
require_once(ROOT_DIR.'/includes/functions.php');

/** Require the updates functions */
require_once(ROOT_DIR.'/includes/updates.functions.php');

/** Contains the session and cookies validation functions */
require_once(ROOT_DIR.'/includes/userlevel_check.php');

/** Template list generator */
require_once(ROOT_DIR.'/includes/templates.php');

/** Contains the current session information */
if ( !defined( 'IS_INSTALL' ) ) {
	require_once(ROOT_DIR.'/includes/active.session.php');
}

/** Recreate the function if it doesn't exist. By Alan Reiblein */
require_once(ROOT_DIR.'/includes/timezone_identifiers_list.php');

/**
 * Always require this classes to avoid repetition of code
 * on other files.
 *
 */
require_once(ROOT_DIR.'/includes/classes/actions-clients.php');
require_once(ROOT_DIR.'/includes/classes/actions-files.php');
require_once(ROOT_DIR.'/includes/classes/actions-groups.php');
require_once(ROOT_DIR.'/includes/classes/actions-log.php');
require_once(ROOT_DIR.'/includes/classes/actions-users.php');
require_once(ROOT_DIR.'/includes/classes/file-upload.php');
require_once(ROOT_DIR.'/includes/classes/form-validation.php');
require_once(ROOT_DIR.'/includes/classes/send-email.php');

/**
 * Google Login
 */
require_once(ROOT_DIR.'/includes/google-api-php-client/vendor/autoload.php');
