<?php
//
// $errors = array();

class foo_mysqli extends mysqli {
  public function __construct($host, $user, $pass, $db) {
    parent::__construct($host, $user, $pass, $db);

    if (mysqli_connect_error()) {
      die('Computer says no... Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
    }
    else {
      echo '<br>';
    }
  }
}

$db = new foo_mysqli('sql31.mcb.webhuset.no', '113605_horsesforsale', 'vafroDRE994', '113605_horsesforsale');
// echo 'Success... Connected to ' . $db->host_info . "\n";
// echo '<br><br>';
// $db->close();

?>
