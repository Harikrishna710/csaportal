<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!--<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>-->
<!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
      <link rel="stylesheet" href="/css/loginstyle.css">
      <link rel="stylesheet" href="/css/loginmin.css">


</head>

<body>
  <div class="login">
  <header class="header">
    <span class="text">Teacher LOGIN</span>
    <span class="loader"></span>
  </header>
  <form class="form" method="post">
      {{ csrf_field() }}
    <input class="input" type="email" style="font-size:20px;" placeholder="Username" name="email">
    <input class="input" type="password" style="font-size:20px;" placeholder="Password" name="password">
    <button class="btn" type="submit"></button>
  </form>
</div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <script src="js/min.js"></script>

</body>
</html>
