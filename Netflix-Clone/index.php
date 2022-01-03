<?php
    require_once('./includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mobile-device.css">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Netflix Clone</title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
    </script>
</head>
<body style="background-color: black;">
    <div class="header" style="background: url('./assets/img/netflix-background.jpg') no-repeat center fixed">
    <div class="option-block">
        <span><a class="login" href="login.php">Sign In</a></span>
        <form class="language" action="">
            <select name="" id="">
                <option value="">English</option>
                <option value="">Русский</option>
                <option value="">Deutsch</option>
            </select>
        </form>
    </div>
        <span class="iconify" data-icon="logos:netflix"></span>
        <div class="center-block">
            <form action="">
                <h1 style="font-size: 40px;">Unlimited Movies, TV Shows and More</h1><br>
                <div class="form-container">
                <h4>Ready to watch? Enter your email to register</h4><br>
                <h5>Ready to watch? Enter your email to create or restart your membership.</h5><br>
                <input type="email" class="email" placeholder=" ">
                <label for="email">Your Email Address</label>
                <input type="submit" class="btn btn-danger btn-lg" value="Get Started">
            </form>
        </div>
    </div>
    </div>
    <hr>
    <div class="block">
        <div class="container">
        <h1 style="padding: 12px;">Enjoy on your TV</h1>
            <div class="block">
                <div class="heading">
                    <h3>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, blu ray players and more</h3>
                </div>
                <video class="netflix-vid" autoplay="">
                    <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v" type="video/mp4">
                </video>
                <img class="tv" src="./assets/img/tv.png" alt="">
            </div>
        </div>
    </div>
    <hr>
    <div class="container-phone">
        <div class="phone-block">
            <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg" alt="">
            <div class="download">
                <div class="story">
                    <img style="margin-top: 15px;" src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/boxshot.png" alt="">
                    <div class="loading">
                        <h4 style="margin-top: 30px;">Stranger Things</h4>
                        <p style="color: #2d63a1;">Downloading...</p>
                    </div>
                    <img style="height: 50px; margin-left: 4rem;" src="./assets/videos/download-icon.gif" alt="">
                </div>
            </div>
        </div>
        <div class="description-phone-block">
            <h1>Download your shows to watch offline</h1><br>
            <h3>Save your favorites easily and always have something to watch.</h3>
        </div>
    </div>
    <hr>
    <div class="computer-container">
        <div class="heading">
            <h1>Watch everywhere.</h1>
            <h2>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV without paying more.</h2>
        </div>
       
        <div class="computer-story">
            <video class="stranger-things" autoplay="">
                <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices.m4v" type="video/mp4">
            </video>
            <img src="./assets/img/device-pile.png" alt="">
        </div>
    </div>
    <hr>
    <div class="kids-container">
        <div class="img-block">
            <img width="500px" alt="" class="our-story-card-img" src="https://occ-0-4515-38.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABdFTpLmANuJpYneLq8L5m7CunMCi8e8Nl4y7xaPVWzG3IeoDoq17egTQAthApKg_4sdRWdwuR8KadWu1frjL3JQImpwq.png?r=fcd" data-uia="our-story-card-img">        
        </div>
        <div class="heading">
            <h1>Create profiles for kids</h1>
            <h2>Send kids on adventures with their favorite characters in a space made just for them—free with your membership.</h2>
        </div>
    </div>
    <hr>
    <div class="dropdown-block">
        <h1 style="text-align: center;">Frequently Asked Questions</h1> <br>
        <!-- Question 1 -->
        <button id="question1" type="button">What is Netflix?
                    <span class="plus" style="color: white;">&#43;</span> 

        </button>
        <div id="answer1" class="answer1">
            <p>Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.
                <br><br>
                You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!</p>

        </div>
        <!-- Question 1 -->
        <button id="question2" type="button">
            How much does Netflix cost?
            <span class="plus" style="color: white;">&#43;</span> 

        </button>
        <div id="answer2" class="answer2">
            <p>
                Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from EUR7.99 to EUR11.99 a month. No extra costs, no contracts.
            </p>
        </div>
        <!-- Question 3 -->
        <button id="question3" type="button">
            How much does Netflix cost?
            <span class="plus" style="color: white;">&#43;</span> 

        </button>
        <div id="answer3" class="answer3">
            <p>
                Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from EUR7.99 to EUR11.99 a month. No extra costs, no contracts.
            </p>
        </div>
        <!-- Question 4 -->
        <button id="question4" type="button">
            Where can I watch?
            <span class="plus" style="color: white;">&#43;</span> 

        </button>
        <div id="answer4" class="answer4">
            <p>
                Watch anywhere, anytime. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.
                <br><br>
                You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Netflix with you anywhere.            </p>
        </div>
        <!-- Question 5 -->
        <button id="question5" type="button">
            How do I cancel?
            <span class="plus" style="color: white;">&#43;</span> 

        </button>
        <div id="answer5" class="answer5">
            <p>
                Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.            </p>
        </div>
    </div>
    <div class="center-block">
            <form action="">
                <div class="form-container">
                <h5 style="color: white; margin-bottom: 10px;">Ready to watch? Enter your email to create or restart your membership.</h5>
                <input type="email" class="email" placeholder=" ">
                <label for="email">Your Email Address</label>
                <input type="submit" class="btn btn-danger btn-lg" value="Get Started">
            </form>
        </div>
    </div>
<hr>
<div class="footer-block">
    <div class="footer">
        <p>
            <a href="">Questions? Contact Us.</a>
        </p>
        <ul class="footer-links">
            <li>FAQ</li>
            <li>Help Center</li>
            <li>Account</li>
            <li>Media Center</li>
        </ul>
        <ul class="footer-links">
            <li>Investor Relations</li>
            <li>Jobs</li>
            <li>Ways to watch</li>
            <li>Terms of use</li>
        </ul>
        <ul class="footer-links">
            <li>Privacy</li>
            <li>Cookie Preferences</li>
            <li>Corporate Information</li>
            <li>Contact us</li>
        </ul>
        <ul class="footer-links">
            <li>Speed Test</li>
            <li>Legal Notices</li>
            <li>Only on Netflix</li>
        </ul>
    </div>
    <form action="">
        <select name="" id="">
            <option value="">English</option>
            <option value="">Deutsch</option>
            <option value="">Russian</option>
        </select>
    </form>
    <p>Netflix Kazakhstan</p>
</div>

    <script src="./assets/js/index.js"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</body>
</html>