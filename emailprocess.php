<html>
 <head>
  <title>Say My Name</title>
 </head>
 <body>
<?php

$error = array();

        $mail = isset($_POST['mail']) ?
            trim($_POST['mail']) : '';
        if (empty($mail)) {
            $error[] = urlencode('Please enter a mail.');
        }
        

        if (empty($error)) {
          echo '<h1>' . $_POST['mail'] . '</h1>';
        } else {
          header('Location:emailform.php?action=add' .
              '&error=' . join($error, urlencode('<br/>')));
        }
?>

 </body>
</html>