<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1 , shrink-to-fit=no">
    <title>Main Page</title>

    <?php
    include_once("./incl/header.php");
    ?>

</head>

<body>


    <!-- Upper Bar -->

    <div class="upper-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-globe"></i> Select Language
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item disabled" href="#">Arabic (soon)</a></li>
                        <li><a class="dropdown-item disabled" href="#">Dutch (soon)</a></li>
                        <li><a class="dropdown-item disabled" href="#">Chinese (soon)</a></li>
                    </ul>
                </div>
                <div class="col-sm" id="btn-upper-bar">
                    <div class="btn-group">
                        <a href="./login.php"><button class=" btn col-sm ">Log In</button></a>
                        <a href="./register.php"><button class="btn col-sm">Register</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("./incl/navbar.php") ?>

    <!-- First Box -->

    <div class="first-box " id="Home">
        <div class="text ">
            <h1 class="fuze ">Fuze Tournaments</h1>
            <h1>Your competition, your rules</h1>
        </div>
        <a href="register.php"><button type="button" class="btn">Join Us</button></a>

        <div class=container-fluid>
            <div class="row ">
                <div class="col ">
                    <i class="fab fa-youtube "></i> <span>YouTube</span>
                </div>
                <div class="col ">
                    <i class="fab fa-twitter-square "></i> <span>Twitter</span>
                </div>
                <div class="col ">
                    <i class="fab fa-twitch "></i> <span>Twitch</span>
                </div>
                <div class="col ">
                    <i class="fab fa-discord "></i> <span>Discord</span>
                </div>
            </div>

        </div>
    </div>

    <!-- Slider -->

    <div id="Top-Streamed" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators ">
            <button type="button " data-bs-target="#Top-Streamed" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button " data-bs-target="#Top-Streamed" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button " data-bs-target="#Top-Streamed" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button " data-bs-target="#Top-Streamed" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button " data-bs-target="#Top-Streamed" data-bs-slide-to="4" aria-label="Slide 3"></button>
        </div>
        <p class="title-slider "><i class="fas fa-grip-lines-vertical "></i> Top Streamed Games</p>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="./assests/images/csgo.png" class="d-block w-100" alt="csgo">
                <div class="carousel-caption d-none d-md-block">
                    <p>CS:GO</p>
                    <p><span class="number ">20.5k</span> Viewers <span class="number ">4k</span> Videos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assests/images/valorant.jpg" class="d-block w-100" alt="valorant">
                <div class="carousel-caption d-none d-md-block">
                    <p>Valorant</p>
                    <p><span class="number ">14.3k</span> Viewers <span class="number ">2.3k</span> Videos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assests/images/apex.jpg" class="d-block w-100" alt="apex">
                <div class="carousel-caption d-none d-md-block">
                    <p>Apex Legends</p>
                    <p><span class="number ">11k</span> Viewers <span class="number ">3k</span> Videos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assests/images/pubg.jpg" class="d-block w-100" alt="pubg">
                <div class="carousel-caption d-none d-md-block">
                    <p>PUBG</p>
                    <p><span class="number ">8k</span> Viewers <span class="number ">2k</span> Videos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assests/images/rust.jpg" class="d-block" alt="rust">
                <div class="carousel-caption d-none d-md-block">
                    <p>Rust</p>
                    <p><span class="number ">5k</span> Viewers <span class="number ">1.9k</span> Videos</p>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#Top-Streamed" role="button" data-slide="prev" onclick="$('#Top-Streamed').carousel('prev')">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#Top-Streamed" role="button" data-slide="next" onclick="$('#Top-Streamed').carousel('next')">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Second Box -->

    <div class="container container-1 " id="Featured-Streams ">
        <p><i class="fas fa-grip-lines-vertical "></i> Featured Games Stream</p>
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row ">
            <div class="col-md-8 "><img src="./assests/images/thumb-1.jpg " alt="csgo-thumb "></div>
            <div class="col-6 col-md-4 "><img src="./assests/images/thumb-4.jpeg " alt="Minecraft-thumb "></div>
        </div>

        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row ">
            <div class="col-8 "><img src="./assests/images/thumb-8.jpg " alt="pubg-thumb "></div>
            <div class="col-4 "><img src="./assests/images/thumb-7.png " alt="streaming-thumb "></div>
        </div>

        <div class="row ">
            <div class="col-6 "><img src="./assests/images/thumb-6.jpg " alt="register-thumb "></div>
            <div class="col-6 "><img src="./assests/images/thumb-3.jpg " alt="fortnite-thumb "></div>
        </div>
    </div>

    <!-- Third Box -->

    <div class="container container-3" id="Blogs">
        <p class="title "><i class="fas fa-grip-lines-vertical"></i> Latest Blog Posts</p>
        <div class="card-group ">
            <div class="card ">
                <img src="./assests/images/card-1.jpg " class="card-img-top " alt="Csgo-tournament ">
                <div class="card-body ">
                    <h5 class="card-title ">The Most Anticipated CS:GO Upcoming Tournaments</h5>
                    <p class="card-text ">Location: Online <br>PrizePool: $500,000 - European, $250,000 - American <br> Participant Teams: 8 - European, 4 - American</p>

                </div>
                <button type="button " class="btn btn-primary ">More Details!</button>
                <div class="card-footer ">
                    <small class="text-muted ">Published : <b>May 19, 2020</b></small>
                </div>
            </div>
            <div class="card ">
                <img src="./assests/images/card-2.jpg " class="card-img-top " alt="Rust-update ">
                <div class="card-body ">
                    <h5 class="card-title ">Rust 2021 BIG Update !</h5>
                    <p class="card-text ">Fishing, Submarines, and more! <br> Voice Props DLC <br> Fixed invisible wire bug on electricity cables </p>

                </div>
                <button type="button " class="btn btn-primary ">More Details!</button>

                <div class="card-footer ">
                    <small class="text-muted ">Published : <b>May 6, 2021</b></small>
                </div>
            </div>
            <div class="card ">
                <img src="./assests/images/card-3.jpg " class="card-img-top " alt="gtav-news ">
                <div class="card-body ">
                    <h5 class="card-title ">GTA Online Summer Update</h5>
                    <p class="card-text ">The incoming car-themed summer update for GTA Online will feature new cars and robberies for players. The update seems to be focussing on racing, specifically underground racing.</p>

                </div>
                <button type="button " class="btn btn-primary ">More Details!</button>

                <div class="card-footer ">
                    <small class="text-muted ">Published : <b>July 8, 2021</b></small>
                </div>
            </div>
        </div>
    </div>

    <!-- Forth Box -->

    <div class="container container-4 " id="Events ">
        <p class="title "><i class="fas fa-grip-lines-vertical "></i> Next Events</p>

        <div class="row ">
            <div class="col-6 ">
                <h3>Esports Live Stream CS:GO</h3>
            </div>
            <div class="col-2 "><i class="far fa-calendar "></i> 8/5/2021</div>
            <div class="col-2 "><i class="far fa-clock "></i> 9:00 PM</div>
            <div class="col-2 "><i class="fas fa-money-bill-wave "></i> FREE</div>
        </div>

        <div class="row ">
            <div class="col-6 ">
                <h3>Semi-finals Valorant Tournament</h3>
            </div>
            <div class="col-2 "><i class="far fa-calendar "></i> 8/26/2021</div>
            <div class="col-2 "><i class="far fa-clock "></i> 8:00 PM</div>
            <div class="col-2 "><i class="fas fa-money-bill-wave "></i> $20</div>
        </div>
        <div class="row ">
            <div class="col-6 ">
                <h3>PlayStation State of Play</h3>
            </div>
            <div class="col-2 "><i class="far fa-calendar "></i> 10/5/2021</div>
            <div class="col-2 "><i class="far fa-clock "></i> 10:00 PM</div>
            <div class="col-2 "><i class="fas fa-money-bill-wave "></i> $7</div>
        </div>
        <div class="row ">
            <div class="col-6 ">
                <h3>Semi-finals Valorant Tournament</h3>
            </div>
            <div class="col-2 "><i class="far fa-calendar "></i> 11/19/2021</div>
            <div class="col-2 "><i class="far fa-clock "></i> 6:00 PM</div>
            <div class="col-2 "><i class="fas fa-money-bill-wave "></i> $10</div>
        </div>
    </div>

    <!-- Fifth Box -->

    <div class="container container-5 " id="Feeds ">
        <p class="title "><i class="fas fa-grip-lines-vertical "></i> Twitter Feed</p>
        <div class="row ">
            <div class="col-4 ">
                <img src="./assests/images/circle-1.jpg " alt="gtav-news ">
                <p class="feed-name ">Legita</p>
                <p class="feed-username ">@legita34</p>
                <p class="feed-text ">Reminder, This sunday there is huge tournament in CS:GO, and $10,000 grand prize</p>
            </div>
            <div class="col-4 ">
                <img src="./assests/images/circle-2.png " alt="gtav-news ">
                <p class="feed-name ">Leo</p>
                <p class="feed-username ">@leonardo1</p>
                <p class="feed-text ">we're removing some Products on August 3rd, working on some new stuff <br><br>we're sorry or you're welcome</p>
            </div>
            <div class="col-4 ">
                <img src="./assests/images/circle-3.png " alt="gtav-news ">
                <p class="feed-name ">Gemin</p>
                <p class="feed-username ">@geminnn</p>
                <p class="feed-text ">Students across the nation have developed their own games! Experience them during the Intel Game University Showcase.<br><br>Alarm clock Today at 3PM PT</p>
            </div>

        </div>
        <a href="# "><button class="btn col-sm "><i class="fab fa-twitter "></i> Follow Us !</button></a>
    </div>

    <!-- Scroll Spy -->

    <div class="container-fluid container-6 ">
        <div class="col ">
            <p><a href="#Home"><i class="fas fa-grip-lines "></i> Home / 1</a></p>
            <p><a href="#Top-Streamed"><i class="fas fa-grip-lines "></i> Top Streamed Games / 2</a></p>
            <p><a href="#Featured-Streams"><i class="fas fa-grip-lines "></i> Featured Streams / 3</a></p>
            <p><a href="#Blogs"><i class="fas fa-grip-lines "></i> Blogs / 4</a></p>
            <p><a href="#Events"><i class="fas fa-grip-lines "></i> Events / 5</a></p>
            <p><a href="#Feeds"><i class="fas fa-grip-lines "></i> Feeds / 6</a></p>
        </div>

    </div>

    <!-- Go Up -->

    <span class="go-up "><a href="# "><i class="fas fa-arrow-alt-circle-up "></i>
            <p> Go Up</p>
        </a></span>

</body>

<?php include_once("./incl/footer.php"); ?>
<script language="JavaScript" type="text/javascript">
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 2000
        })
    });
</script>

</html>