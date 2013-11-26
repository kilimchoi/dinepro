<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>DinePro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link href="css/codiqa.ext.min.css" rel="stylesheet">
  <link href="css/jquery.mobile-1.3.1.min.css" rel="stylesheet">

  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/jquery.mobile-1.3.1.min.js"></script>
  <script src="js/codiqa.ext.min.js"></script>
  <script src="js/dinepro.js"></script>
  <script src="js/simpleCart.js"></script>
</head>
  <body>
  
  <div data-role="page" data-control-title="Home" id="page1">
      <div data-theme="b" data-role="header">
          <h3>
              DinePro
          </h3>
      </div>
      <div data-role="content">
          alertConfirmation();
      </div>
  </div>

  <?php
  $to = 'kjszubzda@gmail.com';
  $subject = 'Your DinePro Order';
  $content = $_POST;
  $body = '';
  for($i=1; $i < $content['itemCount'] + 1; $i++) {
      $name = 'item_name_'.$i;
      $quantity =  'item_quantity_'.$i;
      $price = 'item_price_'.$i;
      $body .= 'item #'.$i.': ';
      $body .= $content[$name].' '.$content[$quantity].' '.$content[$price];
      $body .= '<br>';
  }
  $headers = 'From: kjszubzda@gmail.com' . "\r\n" .
             'Reply-To: kjszubzda@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  mail($to, $subject, $body, $headers);
  Header('Location: thankyou.php');
  ?>

  </body>
</html>
<script>
  function alertConfirmation() { 
    alert("Your order will be ready in 15 minutes");
  }
</script>