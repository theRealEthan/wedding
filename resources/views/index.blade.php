<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Courteney & Ethan Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <script src="{{ secure_asset('assets/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ secure_asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}">
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="lds-heart">
        <div></div>
    </div>
</div>
<!-- Main -->
<div id="oliven-page"> <a href="#" class="js-oliven-nav-toggle oliven-nav-toggle"><i></i></a>
    <!-- Sidebar Section -->
    <aside id="oliven-aside">
        <!-- Logo -->
        <div class="oliven-logo">
            <a href="/">
                <img src="assets/images/logo.png" alt="">
                <span>Courteney <small>&</small> Ethan</span>
                <h6>2025</h6>
            </a>
        </div>


        <!-- Menu -->
        <nav class="oliven-main-menu">
            <ul>
                <li><a href="/#home">Home</a></li>
                <li><a href="/#couple">Couple</a></li>
                <li><a href="/#story">Our Story</a></li>
                <li><a href="/#friends">Friends</a></li>
                <li><a href="/#organization">Organization</a></li>
                <li><a href="/#gallery">Gallery</a></li>
                <li><a href="/#whenwhere">When & Where</a></li>
                <li><a href="/#rsvp">R.S.V.P</a></li>
                <li><a href="/#gift">Gift Registry</a></li>
            </ul>
        </nav>
        <!-- Sidebar Footer -->
        <div class="footer1"> <span class="separator"></span>
            <p>Courteney & Ethan wedding<br /><?php echo date('F j, Y'). ' – GQ, ZA';?></p>
        </div>
    </aside>
    <!-- Content Section -->
    <div id="oliven-main">
        <!-- Header & Slider -->
        <header id="home" class="header valign bg-img parallaxie" data-background="assets/images/main.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center caption">
                        <h1 class="animate-box" data-animate-effect="fadeInUp">Courteney & Ethan</h1>
                        <h5 class="animate-box" data-animate-effect="fadeInUp">2025 – GQ</h5>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="arrow bounce text-center">
                            <a href="/#couple"> <i class="ti-heart"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Couple -->
        <div id="couple" class="bridegroom clear section-padding bg-pink">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-md-6">
                        <div class="item toright mb-30 animate-box" data-animate-effect="fadeInLeft">
                            <div class="img"> <img src="assets/images/bride.jpg" alt=""> </div>
                            <div class="info valign">
                                <div class="full-width">
                                    <h6>Courteney Jacobs <i class="ti-heart"></i></h6> <span>The Bride</span>
                                    <p>An international arms dealer wanted by Interpol is a fugitive accused of illegally trading weapons across borders, often evading law enforcement through a network of global contacts and sophisticated operations.</p>
                                    <div class="social">
                                        <div class="full-width">
                                            <a href="https://twitter.com/CourteneyJay" target="_blank" class="icon"> <i class="ti-twitter"></i> </a>
                                            <a href="https://www.instagram.com/courteneyjay/" target="_blank" class="icon"> <i class="ti-instagram"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item mb-30 animate-box" data-animate-effect="fadeInRight">
                            <div class="img"> <img src="assets/images/groom.jpg" alt=""> </div>
                            <div class="info valign">
                                <div class="full-width">
                                    <h6>Ethan Adams <i class="ti-heart"></i></h6> <span>The Groom</span>
                                    <p>A local community volunteer, recognized for their dedication to peace and safety, actively engages in grassroots initiatives, promoting non-violence and support within their neighborhood without any legal infractions.</p>
                                    <div class="social">
                                        <div class="full-width">
                                            <a href="https://twitter.com/ethandemic" target="_blank" class="icon"> <i class="ti-twitter"></i> </a>
                                            <a href="https://www.instagram.com/ethandemic/" target="_blank" class="icon"> <i class="ti-instagram"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h3 class="oliven-couple-title">Are getting married!</h3>
                        <h4 class="oliven-couple-subtitle">2025</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Countdown -->
        {{--<div id="countdown" class="section-padding bg-img bg-fixed" data-background="assets/images/banner-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12">
                        <h4>We will become a family in</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><span id="days"></span>Days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>--}}
        <!-- Our Story -->
        <div id="story" class="story section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mb-30">
                        <div class="story-img animate-box" data-animate-effect="fadeInLeft">
                            <div class="img"> <img src="assets/images/story.jpg" class="img-fluid" alt=""> </div>
{{--                            <div class="story-img-2 story-wedding" style="background-image: url(assets/images/logo-transparent.png);"></div>--}}
                        </div>
                    </div>
                    <div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
                        <h4 class="oliven-story-subtitle">Our love.</h4>
                        <h3 class="oliven-story-title">Our Story</h3>
                        <p>In a world where shadows trade in arms and daylight harbors hope, Courteney, an enigmatic arms dealer with a notorious reputation, finds her life entangled with Ethan, a dedicated volunteer whose heart beats for peace and community restoration. Their paths cross under the most extraordinary circumstances—a botched arms deal interrupted by a daring rescue mission led by Ethan. From this collision of worlds, an unlikely spark is ignited, challenging their beliefs and setting them on a collision course with destiny.</p>
                        <p>As Courteney witnesses Ethan's relentless pursuit of peace and his unwavering kindness, she begins to question the life she's led, intrigued by the possibility of redemption and a future she never dared to imagine. Ethan, equally captivated by Courteney's strength and the glimpses of vulnerability she unwittingly reveals, sees in her a soul yearning for change. Together, they embark on a perilous journey, navigating the treacherous waters of their pasts, with Courteney's dangerous associates looming as a constant threat to their burgeoning love.</p>
                        <p>The stakes were raised when, amidst the ruins of an ancient chapel bathed in the golden hues of sunset, Ethan proposed to Courteney. With a ring forged from the remnants of a dismantled firearm—a symbol of their commitment to forge a new path together—they pledged their lives to each other. This moment, a poignant turning point, marked their transition from solitude to solidarity, from chaos to harmony.</p>
                        <h4>Feb 10th, 2024, They Said Yes!</h4>
                        <p>Their engagement becomes the catalyst for a daring bid to dismantle Courteney's empire and turn it into a force for good. As they face their adversaries, armed with nothing but their courage and their love, Courteney and Ethan prove that even in a world steeped in darkness, love can illuminate the way to redemption and peace. Their story, a testament to the transformative power of love, promises to be a blockbuster tale of action, sacrifice, and the unyielding power of the human heart to overcome all odds.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Friends -->
        {{--<div id="friends" class="friends section-padding bg-pink">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <span class="oliven-title-meta">Our best friends ever</span>
                        <h2 class="oliven-title mb-30">Thanks for being there</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="img"> <img src="assets/images/friends/b1.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Eleanor Chris</h6><span>Bridesmaids</span>
                                        <p>Enstibulum eringilla dui athe elitene miss minibus viverra nectar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="assets/images/friends/w1.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Stefano Smiht</h6><span>Groomsmen</span>
                                        <p>Enstibulum eringilla dui athe elitene miss minibus viverra nectar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="assets/images/friends/b2.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Vanessa Brown</h6><span>Bridesmaids</span>
                                        <p>Enstibulum eringilla dui athe elitene miss minibus viverra nectar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="assets/images/friends/w2.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Matthew Brown</h6><span>Groomsmen</span>
                                        <p>Enstibulum eringilla dui athe elitene miss minibus viverra nectar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="assets/images/friends/b3.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Fredia Halle</h6><span>Bridesmaids</span>
                                        <p>Enstibulum eringilla dui athe elitene miss minibus viverra nectar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img"> <img src="assets/images/friends/w3.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Pablo Dante</h6><span>Groomsmen</span>
                                        <p>Enstibulum eringilla dui athe elitene miss minibus viverra nectar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <!-- See you -->
        <div id="seeyou" class="seeyou section-padding bg-img bg-fixed" data-background="assets/images/banner-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center">
                        <span><i class="ti-heart"></i></span>
                        <h4>Looking forward to see you!</h4>
{{--                        <h3>15.11.2023</h3>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Organization -->
        {{--<div id="organization" class="organization section-padding bg-pink">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <span class="oliven-title-meta">Wedding</span>
                        <h2 class="oliven-title">Organization</h2>
                    </div>
                </div>
                <div class="row bord-box bg-img" data-background="assets/images/main.jpg">
                    <div class="col-md-3 item-box">
                        <h2 class="custom-font numb">01</h2>
                        <h6 class="title">Ceremony</h6>
                        <p>Delta tristiu the jusone duise vitae diam neque nivami mis est augue artine aringilla the at elit finibus vivera.</p>
                    </div>
                    <div class="col-md-3 item-box">
                        <h2 class="custom-font numb">02</h2>
                        <h6 class="title">Lunch Time</h6>
                        <p>Delta tristiu the jusone duise vitae diam neque nivami mis est augue artine aringilla the at elit finibus vivera.</p>
                    </div>
                    <div class="col-md-3 item-box">
                        <h2 class="custom-font numb">03</h2>
                        <h6 class="title">Party</h6>
                        <p>Delta tristiu the jusone duise vitae diam neque nivami mis est augue artine aringilla the at elit finibus vivera.</p>
                    </div>
                    <div class="col-md-3 item-box">
                        <h2 class="custom-font numb">04</h2>
                        <h6 class="title">Cake Cutting</h6>
                        <p>Delta tristiu the jusone duise vitae diam neque nivami mis est augue artine aringilla the at elit finibus vivera.</p>
                    </div>
                </div>
            </div>
        </div>--}}
        <!-- Gallery -->
        <div id="gallery" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <span class="oliven-title-meta">Gallery</span>
                        <h2 class="oliven-title">Our Memories</h2>
                    </div>
                </div>
                <div class="row">
                    <ul class="col list-unstyled list-inline mb-0 gallery-menu" id="gallery-filter">
                        <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                        <li class="list-inline-item"><a class="" data-filter=".life">Life</a></li>
                        <li class="list-inline-item"><a class="" data-filter=".engagement">Engagement</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row gallery-filter mt-3">
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/1.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/1.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/1.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/1.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/2.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/2.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/2.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/2.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/3.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/3.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/3.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/3.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/4.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/4.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/4.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/5.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/5.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/5.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/5.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/6.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/6.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/6.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/6.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/7.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/7.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/7.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/7.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/8.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/8.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/8.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/8.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/9.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/9.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/9.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/9.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item life">
                        <a href="assets/images/gallery/life/10.jpeg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/life/10.jpeg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Life</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item engagement">
                        <a href="assets/images/gallery/engagement/10.jpg" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="assets/images/gallery/engagement/10.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail">
                                    <h4 class="mb-0">Engagement</h4> </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- When & Where -->
{{--        <div id="whenwhere" class="whenwhere section-padding bg-pink">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12 mb-30"> <span class="oliven-title-meta">Questions</span>--}}
{{--                        <h2 class="oliven-title">When & Where</h2> </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="owl-carousel owl-theme">--}}
{{--                            <div class="item">--}}
{{--                                <div class="whenwhere-img"> <img src="assets/images/whenwhere/3.jpg" alt=""></div>--}}
{{--                                <div class="content">--}}
{{--                                    <h5>Wedding Ceremony</h5>--}}
{{--                                    <p><i class="ti-location-pin"></i> 175 Broadway, Brooklyn, New York 11244, USA</p>--}}
{{--                                    <p><i class="ti-time"></i> <span>12:00am – 13:00pm</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="whenwhere-img"> <img src="assets/images/whenwhere/1.jpg" alt=""></div>--}}
{{--                                <div class="content">--}}
{{--                                    <h5>Weddding Party</h5>--}}
{{--                                    <p><i class="ti-location-pin"></i> Fortune Brooklyn restaurant, 149 Broadway, Brooklyn, NY, USA</p>--}}
{{--                                    <p><i class="ti-time"></i> <span>14:00pm</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="whenwhere-img"> <img src="assets/images/whenwhere/2.jpg" alt=""></div>--}}
{{--                                <div class="content">--}}
{{--                                    <h5>Accomodations</h5>--}}
{{--                                    <p><i class="ti-direction-alt"></i> Hotel and distance from wedding party restaurant:</p>--}}
{{--                                    <p><i class="ti-direction"></i> The William Vale (7 min)</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Confirmation -->
        <div id="rsvp" class="section-padding bg-img bg-fixed" data-background="assets/images/banner-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 bg-white p-40"> <span class="oliven-title-meta text-center">Will you attend?</span>
                        <h2 class="oliven-title text-center">R.S.V.P</h2>
                        <br>
                        <form class="contact__form" method="post" action="https://duruthemes.com/demo/html/Courteney-Ethan/demo1/mail.php">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- form element -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="guests" type="text" class="form-control" placeholder="Guests" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="submit" type="submit" class="btn buttono" value="SEND">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gift Registry -->
        <div id="gift" class="gift-section gift">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-30">
                        <br> <span class="oliven-title-meta">Gift</span>
                        <h2 class="oliven-title">Gift Registry</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="owl-carousel owl-theme">
                            <div class="client-logo">
                                <a href="#"><img src="assets/images/gift/1.jpg" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="assets/images/gift/2.jpg" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="assets/images/gift/3.jpg" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="assets/images/gift/4.jpg" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="assets/images/gift/5.jpg" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="assets/images/gift/6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer2">
            <div class="oliven-narrow-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>
                            <a href="/"><img src="assets/images/logo.png" alt=""><span>Courteney <small>&</small> Ethan</span></a>
                        </h2>
                        <p class="copyright">2025 – GQ, ZA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ secure_asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/sticky-kit.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/isotope.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/main.js') }}"></script>
</div>
</body>
</html>

