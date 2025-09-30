<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
     section{
  padding: 40px 15%;
}
.cont{
  background: #fff;
  height: 100%;
  width:100%;
  min-height: 100vh;
  display: grid;
  grid-template-columns: repeat(2,2fr);
  align-items: center;
  grid-gap: 6rem;
}
.contact-img img{
  max-width: 100%;
  width: 720px;
  height: auto;
  border-radius: 10px;
}
.contact-form h1{
    font-size: 80px;
    color: #964B00;
    margin-bottom: 20px;
}
.contact-form p{
    color: #FF7F50;
    letter-spacing: 1px;
    line-height: 26px;
    font-size: 1.1rem;
    margin-bottom: 3.8rem;
}
.contact-form form input, form textarea{
    width:100%;
    padding: 17px;
    border: none;
    outline: none;
    background: #FF9966;
    color: #fff;
    font-size: 1.1rem;
    margin-bottom: 0.7rem;
    border-radius: 10px;
}
.contact-form textarea{
    resize: none;
    height: 200px;
}
.contact-form form .button{
    display: inline-block;
    background: #ED9121;
    font-size: 1.1rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    border:2px solid: transparent;
    border-radius: 10px;
    width: 220px;
    transition: ease .20s;
    cursor: pointer;
}
.contact-form   form.button:hover{
    border:2px solid: #f9004d;
    background: transparent;
    transform: scale(1.1);
}
@media (max-width: 1570px){
    section{
        padding: 80px 3%;
        transition: .2s;
    }
    .contact-form h1{
        font-size:60px;
    }
    .contact-form p{
        margin-bottom: 3rem;
    }
}
@media (max-width: 1090px){
    .cont{
        grid-gap: 2rem;
        transition: .3s;
    }
}
@media (max-width: 1000px){
    .cont{
        grid-template-columns: 1fr;
    }
    .contact-form{
        order:2;
    }
    .contact-form img{
        max-width: 100%;
        width: 100%;
        height: auto;
        text-align: center;
        margin-bottom: 30px;
    }
}
</style>
<body>
<?php include("contactheader.php") ?>
<section class="cont">
<div class="contact-form">
<h1>Contact Us</h1>
<p>You can contact via this form</p>
<form action='contact_process.php' method='POST'>
    <input type="firstname" name="firstname" id="firstname" placeholder="First Name" required>
    <input type="lastname" name="lastname" id="lastname" placeholder="Last Name" required>
    <input type="email" name="email" id="email" placeholder="E-mail" required>
    <input type="phone" name="phno" id="phno" placeholder="Phone No." required>
    <textarea name="message" id="message" cols="" rows="" placeholder="Your Message" required></textarea>
    <input type="submit" name="" value="Submit" class="button">  <input type="submit" class="button" onclick="window.location.href='privacypolicy.php'" value="Privacy Policy" />
    <!-- <a class="bot" href='privacypolicy.php'>Privacy Policy</a> -->
    <!-- <input type="submit" class="button" onclick="window.location.href='privacypolicy.php'" value="Privacy Policy" /> -->
  </form>
</div>
<div class="contact-img">
    <img src="photo/img.jpg">
</div>
</section>
<?php include("footer.php") ?>
</body>
</html>
