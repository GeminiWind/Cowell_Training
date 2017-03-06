
<!DOCTYPE html>
<html lang="en">
 	<?php
include dirname(__FILE__) . '/includes/head.php';
?>

  <body>
    <?php
include dirname(__FILE__) . '/includes/header.php';
?>
  <?php
    if(isset($msg)) {
      $MSG->display();
    }
  ?>
    <div class="container-fluid">
      <div class="row">
       <?php
include dirname(__FILE__) . '/includes/sidebar.php';
?>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        
    <?php require_once dirname(__FILE__) . '/../../../routes.php';?>
        </main>
      </div>
    </div>
	<?php
include dirname(__FILE__) . '/includes/script.php';
?>

  </body>
</html>
