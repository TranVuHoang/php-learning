<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>bài tập số 1 php</title>
</head>

<body>

      <style>
            span {
                  font-weight: bold;
            }
      </style>
      <?php
      $fullname = "Dương Hoàng Quân";
      $username = "HQTeamobi";
      $email = "hoangquankg@gmail.com"

      ?>


      <p>Họ và Tên: <span>

                  <?php echo "$fullname" ?>
            </span> </p>
      <p> Username :
            <span>

                  <?php echo "$username" ?>
            </span>
      </p>
      <p> Email :

            <span>

                  <?php
                  echo "$email";

                  ?>
            </span>
      </p>
</body>

</html>