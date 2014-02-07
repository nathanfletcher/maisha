<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Ashesi"?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="images/logo.ico">
    <script>
        function displayDate()
        {
            document.getElementById("facebookI").innerHTML = Date();
        }
    </script>
</head>
<body>
<div class="bodyArea" >
<div class="top" >
    <img src="images/Logo_Large.png"  alt="" style="float: left; width: 175px; height: 87px; "  >
    <table class="topCriteria" align="center" border='' cellspacing ="0" style="background-color: black; padding: 0 7px 0 0 ; float: right" >
        <tbody>
        <tr>
            <td style="padding-right: 5em;">
                <table class="topCriteria" align="center" border='' cellspacing ="0" style="/*background-color: black; margin: auto*/ float: right" >
                    <tbody>
                    <tr>
                        <td class="theBuzzBorder" style="width: 90px; height: 22px; text-align: center;">
                            <a href="theBuzz.php" class="theBuzz" id="theBuzzI">THE BUZZ</a>
                        </td>
                        <td class="catalogBorder" style="width: 90px; height: 22px; text-align: center;">
                            <a href="" class="catalog" id="catalogI" >CATALOG</a>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </td>
            <td>
                <table class="searchButton" id="searchButtonI" align="center" border='' cellspacing ="0">
                    <tbody>
                    <tr>
                        <td class="searchTD" style="width: 4em; text-align: right;" >
                            <form>
                                <input class="search" id="searchI"  >
                            </form>
                        </td>
                        <td>
                            <button class="searchMagnify" style=" " onclick="location.href = 'index.php'">

                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td style="width: 15em; text-align: right;">
                <div class="nav" style="float: right">
                    <ul>
                        <li><a href="" class="signIn" id="signInI"> SIGN IN </a>
                            <ul class="signInDropD">
                                <li><a href="#">username / email address
                                        <table class="usernameSignUp" align="center" border='' cellspacing ="0" >
                                            <tbody>
                                            <tr>
                                                <td class="username" style=" ">
                                                    <form>
                                                        <input class="usernameInput" id="usernameInputI"  >
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a></li>
                                <li><a href="#">password
                                        <table class="passwordSignUpArea" align="center" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
                                            <tbody>
                                            <tr>
                                                <td class="password" style=" ">
                                                    <form>
                                                        <input class="search" id="searchI"  >
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </li>
                                <li><a href="#">LOGIN with
                                        <table class="loginWith" align="center" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
                                            <tbody>
                                            <tr>
                                                <td class="facebook" style="width: 5em; height: 5em; text-align: center; ">
                                                    <img src="images/Facebook_Inactive.png"  alt="" style="width: 4em; height: 4em;  "  >
                                                </td>
                                                <td class="twitter" style="width: 5em; height: 5em; text-align: center;">
                                                    <img src="images/Twitter_inactive.png"  alt="" style="width: 4em; height: 4em; "  >
                                                </td>
                                                <td class="instagram" style="width: 5em; height: 5em; text-align: center;">
                                                    <img src="images/Instagram_Unselect.png"  alt="" style="width: 4em; height: 4em; "  >
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <table class="go" align="right" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
                                            <tbody>
                                            <tr>
                                                <td class="go" style="width: 2em; height: 2em; text-align: center; ">
                                                    GO<!--<img src="images/Facebook_Inactive.png"  alt="" style="width: 2em; height: 2em;  "  >-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="" class="signInSlash"> / </a></li>
                        <li><a href="" class="signUp" id="signUpI">SIGN UP</a>
                            <ul>
                                <li><a href="#">username
                                        <table class="usernameSignUp" align="center" border='' cellspacing ="0" >
                                            <tbody>
                                            <tr>
                                                <td class="username" style=" ">
                                                    <form>
                                                        <input class="search" id="searchI"  >
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a></li>
                                <li><a href="#">Create a password
                                        <table class="passwordSignUpArea" align="center" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
                                            <tbody>
                                            <tr>
                                                <td class="password" style=" ">
                                                    <form>
                                                        <input class="search" id="searchI"  >
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a></li>
                                <li><a href="#">Re-type your password
                                        <table class="passwordSignUpArea" align="center" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
                                            <tbody>
                                            <tr>
                                                <td class="password2" style=" ">
                                                    <form>
                                                        <input class="search" id="searchI"  >
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </li>
                                <li><a href="#">LOGIN with
                                        <table class="loginWith" align="center" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
                                            <tbody>
                                            <tr>
                                                <td class="facebook" id="facebookI" style="width: 5em; height: 5em; text-align: center; ">
                                                    <img src="images/Facebook_Inactive.png" onclick="" alt="" style="width: 4em; height: 4em;  "  >
                                                </td>
                                                <td class="twitter" id="twitterI" style="width: 5em; height: 5em; text-align: center;">
                                                    <img src="images/Twitter_inactive.png"  alt="" style="width: 4em; height: 4em; "  >
                                                </td>
                                                <td class="instagram" id="instagramI" style="width: 5em; height: 5em; text-align: center;">
                                                    <img src="images/Instagram_Unselect.png"  alt="" style="width: 4em; height: 4em; "  >
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <table class="go" align="right" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
                                            <tbody>
                                            <tr>
                                                <td class="go" style="width: 2em; height: 2em; text-align: center; ">
                                                    GO<!--<img src="images/Facebook_Inactive.png"  alt="" style="width: 2em; height: 2em;  "  >-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="center" style="padding-top: 19em; text-align: center">
    <h1 class="maisha" id="maishaI" style="color: #971A2E;">Maisha</h1>
    <h4 class="maisha" style="font-size: 1.5em">Inspiring African art, photography and literature  </h4>
    <br> <!--<p></p>-->
    <table class="topCriteria" align="center" border='' cellspacing ="0" style="/*background-color: black; margin: auto;*/" >
        <tbody>
        <tr>
            <td class="artUnsel" style="width: 6em; text-align: center; ">
                <img src="images/Art_Unselected.png"  alt="" style="width: 155px; height: 170px; "  >
            </td>
            <td class="booksUnsel" style="width: 6em; text-align: center;">
                <img src="images/Books_Unselected.png"  alt="" style="width: 155px; height: 170px; "  >
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="bottom">

</div>
</div>
<div class="footer">
    Made 14 Aug 2013<br>
    Powered by Kingston Coker
</div>

<?php