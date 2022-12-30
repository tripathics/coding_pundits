<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coding Club, NIT Arunachal Pradesh</title>
    <link rel="icon" href="../assets/img/resources/codingclubLogo.jpg">
    <link href="../assets/css/page.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
        <div class="container">
            <div class="navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
            </div>
            <section class="navbar-mobile">
                <nav class="nav nav-navbar ml-auto">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="resources.html">Resources</a>
                    <a class="nav-link" href="documentation.html">Documentation</a>
                    <a class="nav-link" href="event.html">Events</a>
                    <a class="nav-link" href="teams.html">Our Team</a>
                    <a class="nav-link" href="alumni.html">Alumni</a>
                    <a class="nav-link" href="https://forms.gle/u5PGoH7bS4RwSLUm7" target="blank">Register</a>
                </nav>
            </section>
        </div>
    </nav>
    <header class="header text-white h-fullscreen p-0 overflow-hidden" data-overlay="7">
        <video class="bg-video" src="" poster="../assets/img/resources/pic.jfif" autoplay loop></video>
        <div class="container text-center">
            <div class="row h-100">
                <div class="col-lg-8 mx-auto align-self-center pt-10">
                    <div class="col-lg-8 d-none d-md-inline-block d-lg-inline-block" style="display: inline-block">
                        <img src="../assets/img/resources/logo.png" alt="img" height="225" width="225" style="-webkit-filter: drop-shadow(3px 3px 15px #232323); filter: drop-shadow(3px 3px 15px #232323);">
                    </div>
                    <h1 class="display-2 fw-500">Coding Pundits</h1>
                    <p class="lead-2 mt-2 mb-8">Fix the cause, not the symptom</p>
                </div>
            </div>
        </div>
    </header>
    <header class="header" id="Aboutus">
        <div class="container">
            <div class="row align-items-center h-100">
                <div class="col-md-10 mx-auto">
                    <h1 class="display-3 fw-400" style="text-align: center ;margin-bottom: 20px; color: black; font-family: Montserrat, sans-serif;">About us</h1><br>
                    <p class="lead-2" style="color: black; font-family: Montserrat, sans-serif;"><b>"Whether you want to uncover the secrets of the universe, or you just want to pursue a career in the 21st century, basic computer programming is an essential skill to learn." - Stephen Hawking</b></p>
                    <p class="lead-2" style="color: black; font-family: Montserrat, sans-serif;">We are an enthusiastic group of coders from National Institute of Technology, Arunachal Pradesh. We want to replace code fear with inspiration and motivation to learn. We believe that coding can be really fun and also understand the importance of quantitative skills for professional development.<br>Coding Club is for everyone, regardless of their stream or current level of knowledge. Coding club is a place that brings people together, regardless of their gender or background. We all have the right to learn, and we believe learning is more fun and efficient when we help each other along the way.</p>
                </div>
            </div>
        </div>
    </header>
    <header id="Aboutus">
        <div class="container">
            <div class="row align-items-center h-100">
                <div class="col-md-100 mx-auto" style="color: black;">
                    <p style="text-align: center; font-size: 200%;">Have any query? Feel free to ask.</p>
<form name="contactform" method="post" action="send_form_email.php">
        <table width="450px" style="margin-bottom: 50px;" cellpadding="5px">
            <tr>
                <td valign="top">
                    <label for="first_name"><b>First Name</label>
                </td>
                <td valign="top">
                    <input type="text" name="first_name" maxlength="50" size="30" placeholder="Enter your First Name">
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <label for="last_name"><b>Last Name</label>
                </td>
                <td valign="top">
                    <input type="text" name="last_name" maxlength="50" size="30" placeholder="Enter your Last Name">
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <label for="email"><b>Email Address</label>
                </td>
                <td valign="top">
                    <input type="text" name="email" maxlength="50" size="30" placeholder="Enter your email">
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <label for="telephone"><b>Phone Number</label>
                </td>
                <td valign="top">
                    <input type="text" name="telephone" maxlength="50" size="30" placeholder="Enter your mobile no.">
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <label for="comments"><b>Comments</label>
                </td>
                <td valign="top">
                    <textarea name="comments" maxlength="1000" cols="30" rows="2" placeholder="Write here!"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" value="Submit">
                    
                </td>
            </tr>
        </table>
    </form>
                </div>
            </div>
        </div>
    </header>
    <?php 
$handle = fopen("counter.txt", "r");
if(!$handle){
 echo "could not open the file" ;
}
else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ;
	echo "<p style='font-size: 20px; font-family: Montserrat, sans-serif; color: #7E685A; text-align: right; margin-right: 50px;'> Total number of visitors: ".  $counter . "</p>" ;
$handle =  fopen("counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
?>
    <!--<div class="row align-items-center h-100">

    <form role="form" action="submit.php" method="post">
<input name="name" required="required" type="text" placeholder="Enter Your Name" /><br/>
<input name="email" required="required" type="email" placeholder="Email ID"/><br/>
<input name="mobile" required="required" type="text" placeholder="Enter Mobile No"/><br/>
<textarea name="message" placeholder="Enter Any Message"></textarea><br/>
<input name="submit" type="submit" value="Send a Mail" /></form></div>-->
    <script src="../assets/js/page.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        function hideLoader() {
            $('#loading').hide();
        }
        $(window).ready(hideLoader);
        preloaderFadeOutTime = 500;
        var preloader = $('.spinner-wrapper');
        preloader.fadeOut(preloaderFadeOutTime);
        setTimeout(hideLoader, 20 * 1000);
    </script>
    <footer class="footer  bg-dark ">
            <p style="text-align: center;"><font size="2px">Developed by: <a href="https://www.linkedin.com/in/aniketkagarwal" data-tooltip="LinkedIn" data-tooltip-location="right" target="blank" style="text-decoration: none; color: white;">Aniket Agarwal</a></font></p>
        </footer>
</body>
</html>