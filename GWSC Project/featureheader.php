<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 Million Dance Studio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
header{
    height: 60px;
    width: 100%;
    position: absolute;
    top: 0;
      z-index: 2;
}
    #logo{
    line-height: 60px;
    margin-left: 40px;
    display: inline-block;
    cursor: pointer;
    font-size: 30px;
    font-weight: bold;
    color: #00a7ff; /* blue */
}
#logo:hover{
    color: #eef9ff; /* white */
}
#logo-s{
    color: #eef9ff; /* white */
    margin-left: 5px;
}
#logo:hover #logo-s{
    color: #00a7ff; /* blue */
}
    nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;    
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 13px;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: Block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
   width: 100%;
}
/*-----------About Us page---------*/
.sub-header{
    height: 50vh;
    width: 100%;
    background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(photo/h7.jpg);
    background-position: center;
    background-size: cover;
    text-align: center;
    color:#fff;
}
.sub-header h1{
    color: #fff;
    margin-top: 100px;
}
.about-us{
    width: 80%;
    margin: auto;
    padding-top: 80px;
    padding-bottom: 50px;
}
.about-col{
    flex-basis: 48%;
    padding: 30px 2px;
}
.about-col img{
    width: 100%;
}
.about-col h1{
    padding-top: 0;
}
.about-col p{
    padding: 15px 0 25px;
}
.red-btn{
    border: 1px solid #f44336;
    background: transparent;
    color:#f44336;
}
.red-btn:hover{
    color: #fff;
}
</style>
<body>
    <section class="sub-header">
       <nav>
        <div id="logo"><span id="logo-s">GWSC</span></div>
        <div class="nav-links" id="navlinks">
            <ul>
                 <li><a href="index.php">HOME</a></li>
                 <li><a href="pitchlist.php">INFORMATION</a></li>
                 <li><a href="contactform.php">CONTACT US</a></li>
                 <!-- <li><a href="aboutus.php">ABOUT</a></li> -->
                 <li><a href="login.php">LOGIN</a></li>
                 <li><a href="login.php">LOGOUT</a></li>
            </ul>
        </div>
       </nav> 
       <h1>- FEATURES -</h1>
    </section>
</body>
</html>