<html>
<head>
  <title>reCAPTCHA demo: Simple page</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form action="test.php" method="post" enctype="multipart/form-data">
  <input name="sender_name" placeholder="Your Name..."/>
  <input name="sender_email" placeholder="Your email..."/>
  <textarea placeholder="Your Message..." name="sender_message"></textarea>
        <div class="captcha_wrapper">
    <div class="g-recaptcha" data-callback="makeaction" data-sitekey="6LcmUF4UAAAAAJhn_cAruyf0fjA8QqN0iiEl33NJ"></div>
  </div>
  <button type="submit" id="send_message" disabled="">Send Message!</button>
</form>
  <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
  <script>
    //$(function(){
      // alert('hello');
    //});

    function makeaction(){
      $('#send_message').removeAttr('disabled');
    }
  </script>  
</body>
</html>