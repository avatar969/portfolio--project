<?php
//sitekey="6Lc0n40mAAAAAECs8_IY2TpqCPNNa57PBcC4A1qV"
//$secretKey = "6Lc0n40mAAAAAMAoPr9sAsv_hL15Mg5IEtdazucZ"; 


//6Lc6-LcmAAAAABB6_HoHfmav9tOh24vf0KLJkrzE  //site
//6Lc6-LcmAAAAAEMMRgTXV28Wks7b_Y8KZFvx70F1  //secret

  //https://www.google.com/recaptcha/admin/

//https://www.google.com/recaptcha/admin/create


      if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
      }

 

        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }


        $secretKey = "6Lex-UknAAAAAIbZOvtaIZAF36IhXsHpgpKBUAnv";
 

        $ip = $_SERVER['REMOTE_ADDR'];
 

        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);

 

        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);

 

        // should return JSON with success as true
        if($responseKeys["success"]) {
                echo '<h2>Thanks for posting comment!</h2>';
        } else {
                echo '<h2>reCaptcha verification failed.</h2>';
        }


?>
