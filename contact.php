<!--contact-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta-charset="utf-8">
	<meta name="description" content="Illustrations, drawings, and paintings from the desk of Maren Burck">
	<meta name="keywords" content="art, illustration, painting, drawings, notes">
    <title>contact</title>
	<link rel="stylesheet" type="text/css" href="styles/marenstyle.css" media="screen">
    <link rel="stylesheet" type="text/css" href="styles/skeleton.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive-nav.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <script type="text/javascript" src="js/responsive-nav.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
	<body id='contact' class='container'>
       <div id="contact_form"> 
        <form id='contact' class='sixteen columns' name='contact' action="" method=''>
            <legend>Contact</legend>
                <label id="name_label">Name
                    <input type='text' id='name' name="name">
                </label><br>
                <label class="error" for='name' id='name_error'>This field is required</label>
                
                <label id='email_label'>e-mail
                    <input id="email" type='email' name="email">
                </label><br>
                <label class='error' for='email' id='email_error'>This field is required</label>
                
                <label id='comment_label'>Comments or Questions
                    <textarea id='comments' type='text' name='message'></textarea>
                </label>
                <label class='error' for='comments' id='comments_error'>This field is required</label>
                <br><input id='submit' name="submit" value="submit" type='submit'>
                <img id='birds' class='sixteen columns' src="img/nativebird.png" alt='bird design'>
        </form>
    </div>

        <footer class='sixteen columns'>
            <h1 id='name' class='sixteen columns'><a href='index.html'>M&auml;ren Burck</a></h1>
            <nav id='navMain'>
                <ul class='sixteen columns'>
                    <li><a href='bio.html'>bio</a></li>
                    <li><a href='portfolio.html'>portfolio</a></li>
                    <li><a href='contact.php'>contact</a></li>
                    <li><a href='featured.html'>featured</a></li>
                </ul>
            </nav>
            <div id='navMod'>
            <nav id='nav' class='nav-collapse'>
                <ul>
                    <li><a href='bio.html'>bio</a></li>
                    <li><a href='portfolio.html'>portfolio</a></li>
                    <li><a href='contact.php'>contact</a></li>
                    <li><a href='featured.html'>featured</a></li>
                </ul>
            </nav>
            </div>
            <a href="#" class="nav-toggle"></a>
        </footer>

        <!--responsive nav -->
    <script>
      var navigation = responsiveNav("#nav");
    </script>


<!--done-->

     </body>

</html>