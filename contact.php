<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Jintao's Portfotio</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
   <header>
        <nav class="navbar">
            <div id="header-logo">
                <a href="#"><img src="images/home/pro-logo-3.svg" alt="header-logo"></a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.html">HOME</a></li>
                <li><a href="project_list.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
            <a href="#" id="ham-menu"><img src="images/home/ham-menu.png" alt="hamburger-menu"></a>
        </nav>
    </header>

   <main>
        <div class="grid-con" id="connect-box">
            <h1 class="col-span-full m-col-start-2 m-col-end-12">Let’s Connect</h1>
            <p class="col-span-full m-col-start-3 m-col-end-8">I’ll do my best</p>
        </div>

        <div>
            <form class="grid-con" id="form" method="post" action="sendmail.php">
                <!--name-->
                <label class="m-col-start-3 m-col-end-5" for="name">Name</label>
                <div class="col-start-2 col-end-5 m-col-start-5 m-col-end-12">
                    <input type="text" name="name">
                </div>
                
                <!--email-->
                <label class="m-col-start-3 m-col-end-5" for="email">Email</label>
                <div class="col-start-2 col-end-5 m-col-start-5 m-col-end-12">
                    <input type="email" name="email">
                </div>

                 <!--subject-->
                 <label class="m-col-start-3 m-col-end-5" for="subject">Subject</label>
                 <div class="col-start-2 col-end-5 m-col-start-5 m-col-end-12">
                     <input type="text" name="subject">
                 </div>
                
                 <label class="m-col-start-3 m-col-end-5"  for="comments">Message</label>
                 <div class="col-start-2 col-end-5 m-col-start-5 m-col-end-12">
                     <textarea name="message"></textarea>
                 </div>
                 <input type="submit" value="Send" class="submit col-start-2 col-end-5 m-col-start-5 l-col-end-12">
              </form>
             
        </div>
   </main>
<footer>
    <div class="grid-con" id="main-footer">
        <div id="footer-logo" class="col-start-2 col-end-4 m-col-start-6 m-col-end-8">
            <a href=""><img src="images/home/pro-logo-3.svg" alt="footer-logo"></a>
        </div>

        <!--social media-->
        <section class="col-start-1 col-end-2 m-col-start-5 m-col-end-6 social-media-icon">
            <a href="#"><img src="images/home/icons8-whatsapp-144.png" alt="whatsapp"></a>
        </section>
        <section class="col-start-2 col-end-3 m-col-start-6 m-col-end-7 social-media-icon">
            <a href="#"><img src="images/home/icons8-facebook-144(1).png" alt="facebook"></a>
        </section>
        <section class="col-start-3 col-end-4 m-col-start-7 m-col-end-8 social-media-icon">
            <a href="https://www.linkedin.com/feed/update/urn:li:activity:7130401143062466561/"><img
                    src="images/home/icons8-linkedin-144.png" alt="linkden"></a>
        </section>
        <section class="col-start-4 col-end-5 m-col-start-8 m-col-end-9 social-media-icon">
            <a href="https://instagram.com/j_ax_d?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><img
                    src="images/home/icons8-instagram-144(2).png" alt="instagram"></a>
        </section>
    </div>
</footer>
       
    <script src="js/main.js"></script>
</body>

</html>