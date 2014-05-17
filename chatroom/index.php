<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */
 
session_start();
//The following line of code was added by Andrew Monaghan to ensure that this chat room is only accessible by users logged into the studybettertogether website
if (!(isset ( $_SESSION ['username'] ))) 
{ 
require_once '../includes/functionality/protectfiles.php'; 
} 



// Suppress errors.
error_reporting(0);

// Path to the chat directory:
define('AJAX_CHAT_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');

// Include custom libraries and initialization code:
require(AJAX_CHAT_PATH.'lib/custom.php');

// Include Class libraries:
require(AJAX_CHAT_PATH.'lib/classes.php');

// Initialize the chat:
$ajaxChat = new CustomAJAXChat();

?>