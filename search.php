<?php
  $word = $_POST['words'];
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $change = '<span style="color:red">$0</span>';
  $t = preg_split('/("[^"]*")|\h+/', $word, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
  foreach ($t as $key => $value) {
    $value = preg_replace("/[^a-zA-Z0-9\s]+/", "", $value);
    if(strpos($text, $value) !== false) {
      $text = preg_replace('/'.$value.'/', $change, $text);
    }
  }
  echo $text;
?>
