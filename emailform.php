<html>
 <head>
  <title>Say My Name</title>
  <style type="text/css">
<!--
#error { background-color: #600; border: 1px solid #FF0; color: #FFF;
 text-align: center; margin: 10px; padding: 10px; }
-->
  </style>
 </head>
 <body>
<?php
	if (isset($_GET['error']) && $_GET['error'] != '') {
	    echo '<div id="error">' . $_GET['error'] . '</div>';
	}
?>
  <form action="emailprocess.php" method="post">
   <table>
    <tr>
     <td>Email</td>
     <td><input type="email" name="mail"
      value=""/>  </td>
    </tr><tr>
     <td colspan="2" style="text-align: center;">
      <input type="submit" name="submit" value="Submit" /></td>
    </tr>
   </table>
  </form>
 </body>
</html>
