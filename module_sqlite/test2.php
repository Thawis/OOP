<html>
  <head>
    <title>reCAPTCHA demo: Explicit render after an onload callback</title>
    
  </head>
  <body>
    <form action="" method="POST">
      <div class="g-recaptcha" data-callback="makeaction" data-sitekey="6Ldxt1MUAAAAAA4qwSd2nu-teoeMzVyCfKtxzI8T"></div>
      <br>
      <input type="submit" id="btn_submit" name="btn_submit" value="Submit" disabled="">
    </form>
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
    <script src='plugins/jquery/jquery-2.2.3.min.js'></script>
    <script>
      $(function(){

      }); 

      function makeaction(){
        $('#btn_submit').removeAttr('disabled');
      }
    </script>
  </body>
</html>