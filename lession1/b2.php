<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Tinh tong 0->N</title>
  </head>
  <body>
    <?php
      function Sum($n){
        if ($n==1) {
          return 1;
        }else {
          return $n + Sum($n-1);
        }
      }
      $n = rand(1, 100);
      echo "So ngau nhien: ".$n;
      echo "<br>";
      echo "Tong cac so tu 1 den ".$n." la: ".Sum($n);

     ?>
  </body>
</html>