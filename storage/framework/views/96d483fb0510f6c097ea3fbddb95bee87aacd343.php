<!-- Replace your-device-ID-goes-here with your actual device ID
and replace your-access-token-goes-here with your actual access token
<!DOCTYPE>
<html>

<body>
  <center>
    <br>
    <br>
    <br>
    <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
      method="POST">
      Send a drink to AutoServe<br>
      <br> ENTER DATA: Alcohol#~Alc_Ammount~Mix#~Mix_Ammount
      <br>
      <input type="text" name="arg" value="1~1~1~1">
      <br>
      <br>
      <input type="submit" value="SEND">
    </form>
  </center>
</body>

</html>

-->

<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AutoServe</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">

</head>

<body>
  <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title m-b-md">
        AutoServe
      </div>

      <div class="links m-b-md">
        <a href="<?php echo e(url('/')); ?>">Home</a>
        <a href="<?php echo e(url('/about_us')); ?>">About Us</a>
        <a href="<?php echo e(url('/about_us')); ?>">About Project</a>
        <a href="<?php echo e(url('/about_us')); ?>">Gallery</a>
        <a href="<?php echo e(url('/about_us')); ?>">Contact Us</a>
        <a href="<?php echo e(url('/serve')); ?>">Serve</a>
      </div>

      <div class="title-60 m-b-md">
        Serve
      </div>

      <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
        method="POST">
        Send a drink to AutoServe<br>
        <br>Alcohol type: 0-3</br>
        <br>Alcohol Amount: 0-3</br>
        <br>Mix: 0-2</br>
        <br>Mix Amount: 0-15</br>
        <br>Example: 2~2~1~8</br>
        <br>
        <br>

        <input type="text" name="arg" value="1~1~1~1">
        <br>
        <br>
        <input type="submit" value="SEND">
      </form>

    </div>
  </div>
</body>

</html>