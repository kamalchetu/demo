<?php

/**
 * @author Kamal S
 */
//trigger exception in a "try" block
$log = 'kamal' . PHP_EOL;

file_put_contents('log_' . date("j.n.Y") . '.txt', $log);

$radius = -2;
try {
    echo "Circle Radius: $radius => Circle Area: ";
} catch (Exception $e) {
    
}
echo "Another line";
?>
<script>
    function format(pattern, ...params) {
    return {pattern, params};
    }
    console.log(format(1, 2));
            
</script>


<form action="" method="post">
    <input type="text" name="a" value=""> 
    <input type="text" name="b" value=""> 
    <input type="submit" name="submit" value="Save"> 
</form>

<?php

/* <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
  <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
  </div>
  <ul class="nav navbar-top-links navbar-right">
  <!--Header-->
  <?php include('client-header.php'); ?>
  <!--Header END-->
  </ul>
  </nav>

  line 42

  <!--Header-->
  <?php include('client-header.php'); ?>
  <!--Header END-->


  Hi [~mario],

  We have worked on to tested  client control panel and found some UI changes on *"usermanager.php"* file and we have modified this page on the top search section to make a common UI like as other page.
 * We have following this sequence to change : Home >> Management >>  New Sub User Account*

 * We have made some changes on line no. 42 of "usermanager.php" file*. We have replaced -

  {code}
  <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
  <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
  </a>
  </div>
  <ul class="nav navbar-top-links navbar-right">
  <!--Header-->
  <?php include('client-header.php'); ?>
  <!--Header END-->
  </ul>
  </nav>
  {code}
  To
  {code}
  <!--Header-->
  <?php include('client-header.php'); ?>
  <!--Header END-->
  {code}.

  Currently working on to testing / verifying further functionalities for client control panel.

  Thanks */
?>
 
