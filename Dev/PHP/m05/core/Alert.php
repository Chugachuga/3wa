<?php
class Alert
{
  static function set($message, $type = 'success')
  {
    $html = '<div class="alert alert-' . $type . '">' . $message . '</div>';
    Session::set('alert', $html);
  }
  static function get()
  {
    if(!empty(Session::get('alert')))
    {
      echo Session::get('alert');
      Session::remove('alert');
    }
  }
}
