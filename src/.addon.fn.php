<?php
require_once \dirname(__DIR__) . "/.constant.php";
require_once \dirname(__DIR__) . "/.var.php";

function html_style (string $style_name) {
  return WHOST . "/assets/css/" . $style_name;
}
function html_script (string $script_name) {
  return WHOST . "/assets/js/" . $script_name;
}
function asset_img (string $filename) {
  return WHOST . "/assets/img/{$filename}";
}
function inc_file (string $filename) {
  return PRJ_ROOT . "/src/{$filename}";
}

function require_login (bool $redirect = true) {
  global $session;
  if (!$session->isLoggedIn() ) {
    if ($redirect) {
      \TymFrontiers\HTTP\Header::redirect(\TymFrontiers\Generic::setGet(WHOST . '/user/login',['rdt'=>THIS_PAGE]));
    } else {
      \TymFrontiers\HTTP\Header::unauthorized(false,'',["Message"=>"Login is required for requested resource!"]);
    }
  }
}
function email_temp (string $message, string $decoration='',string $unsubscribe=''){
  if (!\defined('PRJ_INC_EMAIL_TEMP')) {
    throw new \Exception ("'PRJ_INC_EMAIL_TEMP' not defined.",1);
  }
  global $email_decorations;
  include PRJ_INC_EMAIL_TEMP;
  $message = $template;
  return $message;
}
