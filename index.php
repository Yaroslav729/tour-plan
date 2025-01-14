<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bast Tour Plan - Hotel Booking</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;700;800&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="sass/style.css">
    <script src="https://api-maps.yandex.ru/2.0-stable/?apikey=71043a32-b9c1-4836-a550-d1e4d015ce73&load=package.standard&lang=ru-RU"></script>
  </head>
  <body>
    <header class="navbar navbar--mobile_fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img src="img/horizontal-logo.svg" alt="logo: Best Tour Plan" class="logo__imag">
          </a>
          <form action="#" class="search navbar__search navbar__search--mobile_hidden">
            <label>
              <input type="text" class="search__input" placeholder="Search Location">
            </label>
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: search">
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile_hidden">
            <img src="img/user-avatar.jpg" alt="Avatar: Nathan" class="user__avatar">
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile_visible">
              <a href="#" class="user navbar__user navbar__user--mobile_visible">
                <img src="img/user-avatar.jpg" alt="Avatar: Nathan" class="user__avatar">
                <span class="user__name user__name--light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile_visible ">
              <form action="#" class="search navbar__search navbar__search--mobile_visible">
                <label>
                  <input type="text" class="search__input" placeholder="Search Location">
                </label>
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search">
                </button>
              </form>
            </li>
            <li class="navbar-menu__item hvr-float-shadow"><a href="#" class="navbar-menu__link">All Deals</a></li>
            <li class="navbar-menu__item hvr-float-shadow"><a href="#" class="navbar-menu__link">Hotels</a></li>
            <li class="navbar-menu__item hvr-float-shadow"><a href="#" class="navbar-menu__link">Activities</a></li>
            <li class="navbar-menu__item hvr-float-shadow"><a href="#" class="navbar-menu__link">Hotel Day Packages</a></li>
            <li class="navbar-menu__item hvr-float-shadow"><a href="#" class="navbar-menu__link">Restaurants</a></li>
            <li class="navbar-menu__item hvr-float-shadow"><a href="#" class="navbar-menu__link">Events</a></li>
            <li class="navbar-menu__item hvr-float-shadow"><a href="#" class="navbar-menu__link">Rodrigues</a></li>
          </ul>
        </div>
        <!-- /.container -->
      </div>
    </header>

    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">
            Grand Hilton Hotel
          </li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img class="stars__hotel" src="img/star.svg" alt="star">
                <img class="stars__hotel" src="img/star.svg" alt="star">
                <img class="stars__hotel" src="img/star.svg" alt="star">
                <img class="stars__hotel" src="img/star.svg" alt="star">
                <img class="stars__hotel" src="img/star.svg" alt="star">
              </div>
              <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
              <div class="offer hotel-info__offer">Flash Offer</div>
            </div>
            <p class="hotel-description hotel-info__description">Half-<span class="hotel-description hotel-info__space">Board</span>/
              All Inclusive + Complimentary <span class="hotel-description hotel-info__transfer">Activities + Child Stays Free</span>
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/ <span class="rating__small"> 5</span></span>
          </div>
          <!-- /.hotel-info__rating -->
        </div>
        <div class="hotel__grid">
          <!-- Slider main container -->
          <div class="swiper-container hotel-slider hotel__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__slide">
                <img src="img/hotel_img/slide.jpg" alt="slide" class="hotel-slider__img">
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img src="img/hotel_img/slide_2.jpg" alt="slide_2" class="hotel-slider__img">
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img src="img/hotel_img/slide_3.jpg" alt="slide_3" class="hotel-slider__img">
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img src="img/hotel_img/slide_4.jpg" alt="slide_4" class="hotel-slider__img">
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img src="img/hotel_img/slide_5.jpg" alt="slide_5" class="hotel-slider__img">
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img src="img/hotel_img/slide_6.jpg" alt="slide_6" class="hotel-slider__img">
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img src="img/hotel_img/slide_7.jpg" alt="slide_7" class="hotel-slider__img">
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="hotel-slider__button hotel-slider__button--prev"></div>
            <div class="hotel-slider__button hotel-slider__button--next"></div>
          </div>
          <div class="hotel-right">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!--  /.booking__price-->
                <div class="booking__room">
                  <div class="booking__text">
                    <img src="img/user.svg" alt="Icon: user" class="booking__icon">
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <div class="booking__text">
                    <img src="img/home.svg" alt="Icon: home" class="booking__icon">
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a href="tel:12100" class="booking__number">
                  <img src="img/phone-call.svg" alt="Icon: phone">
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle='modal' data-href="#booking-modal" class="button booking__button" type="submit">View
                Other Options
              </button>
            </div>
            <!-- /.booking -->
            <div class="map">
              <div id="map" style="width: 100%; height: 100%"></div>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-right -->
        </div>
        <!-- /.hotel__grid -->
      </div>
    </section>
    <section class="newsletter parallax-window">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title">
          subscribe to our
          <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form action="send.php" class="subscribe newsletter__subscribe form" method="post">
            <input type="email" class="input subscribe__input" placeholder="Your email address" name="email" required="">
          <button class="subscribe__button" type="submit">Send</button>
          <!-- <input type="email" class="subscribe__input" placeholder="Your email address" name="email" required />
<button class="subscribe__button" type="submit">Send</button> -->
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper-container reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar.jpg" alt="Megan Fox" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                  </div>
                  <!-- /.reviews-slider__rating-->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very
                  well. Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities
                  articles were in corner of gallery which were giving bad feeling. Breakfast was good and support of
                  the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the
                  popular places but self location in a narrow street is not good. Overall it was a good experience and
                  could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-2.jpg" alt="Jule" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Jule</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                  </div>
                  <!-- /.reviews-slider__rating-->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very
                  well. Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities
                  articles were in corner of gallery which were giving bad feeling. Breakfast was good and support of
                  the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the
                  popular places but self location in a narrow street is not good. Overall it was a good experience and
                  could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-3.jpg" alt="Sonya" class="reviews-slider__avatar">
                  <h3 class="reviews-slider__username">Sonya</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                    <img class="reviews__stars" src="img/star.svg" alt="star">
                  </div>
                  <!-- /.reviews-slider__rating-->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very
                  well. Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities
                  articles were in corner of gallery which were giving bad feeling. Breakfast was good and support of
                  the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the
                  popular places but self location in a narrow street is not good. Overall it was a good experience and
                  could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
          <button class="reviews-slider__button reviews-slider__button--prev"></button>
          <button class="reviews-slider__button reviews-slider__button--next"></button>
        </div>
        <!-- /.reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card amusement-corner" data-aos="fade-up" data-aos-duration="800">
            <img src="img/card/activity-1.jpg" alt="The curious corner of chamarel" class="card__image">
            <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card-->
          <div class="card activities__card amusement-golf" data-aos="fade-up" data-aos-duration="1600">
            <img src="img/card/activity-2.jpg" alt="Gymkhana club golf course" class="card__image">
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card-->
          <div class="card activities__card amusement-trip" data-aos="fade-up" data-aos-duration="2400">
            <img src="img/card/activity-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image">
            <h3 class="card__title">Tamarind falls hiking trip&nbsp;- full day</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <div class="card activities__card amusement-quest" data-aos="fade-up" data-aos-duration="3000">
            <img src="img/card/activity-4.jpg" alt="The blue marine discovery quest" class="card__image">
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card-->
        </div>
        <!-- /.activities-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <a href="index.php" class="logo footer__logo">
            <img src="img/vertical-logo.svg" alt="Logo: Best Tour Plan" data-aos="flip-left" data-aos-duration="1000">
          </a>
          <div class="footer__list footer__categories">
            <h3 class="footer__title">All categories</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">All Deals</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Hotels</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Activities</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Spa Packages</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Hotel Day Packages</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Restaurants</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Fitness</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Rodrigues</a></li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__list footer__additional">
            <h3 class="footer__title footer-additional">ADDITIONAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">About Us</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
              <li class="footer__item"><a href="#" class="footer__link">How does it work?</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Frequently Asked Questions</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Deals.mu loyalty program</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Promote your Business on BTP</a></li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="https://www.messenger.com/t/jack.malbon.3" target="_blank" class="footer__link-img hvr-grow"><img src="img/facebook.svg" alt="icon: facebook" class=""></a>
              <a href="https://youtube.com" target="_blank" class="footer__link-img hvr-grow"><img src="img/youtube.svg" alt="icon: youtube" class=""></a>
              <a href="https://instagram.com/armkhi/" target="_blank" class="footer__link-img hvr-grow"><img src="img/instagram.svg" alt="icon: instagram" class=""></a>
            </div>
            <!-- /.footer__social-links-->
          </div>
          <!-- /.footer__social-network -->
          <div class="footer__list footer__legal">
            <h3 class="footer__title">Legal information</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">Terms & Conditions</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Disclaimer</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Cancellation policy</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>
            </ul>
          </div>
          <!-- /.footer__list-->
          <div class="footer__contact-details">
            <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
            <p class="footer__text footer__text--mb">
              Feel free to contact us by phone, email or by our contact form
            </p>
            <ul class="footer__ul-text">
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/icon/map-marker.svg" alt="icon: map">
                </div>
                9748 Blossom Hill Rd undefined <br class="footer__br"> Lansing, Idaho 68545 United States
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/icon/phone-call.svg" alt="icon: phone call">
                </div>
                <div>
                  <a href="tel:+99999999999" class="footer__phone">Tel (business hours) : 269 1500</a><br>
                  <a href="tel:+99999999999" class="footer__phone">Tel (hotline) Monday - Saturday:
                    <br class="footer__br"> 52-56-61-38 (08:00
                    am – 20:00 pm)</a><br>
                  <a href="tel:+99999999999" class="footer__phone">Tel (hotline) Sunday:
                    52-56-61-38<br class="footer__br"> (08:00 am – 14:00 pm)</a>
                </div>
              </li>
              <li class="footer__item footer__item--mb-2">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/icon/email.svg" alt="icon: email">
                </div>
                <a href="mailto:company-rosstan@yandex.ru" class="footer__email">company-rosstan@yandex.ru</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__contact-details -->
          <div class="footer__contact-form">
            <h3 class="footer__title footer__title--mb-4">Send us a message</h3>
            <form action="send.php" method="post" class="footer__form form">

              <div class="footer__input-group">
                <input type="text" class="input footer__input" placeholder="Your Full Name*" name="name" required minlength="2">
              </div>
              <div class="footer__input-group">
                <input type="tel" class="input footer__input phone" placeholder="Phone Number*" name="phone" required minlength="18">
              </div>

              <textarea placeholder="Message" class="message footer__message" name="message"></textarea>

              <button class="button footer__button" type="submit">Send</button>
              <span class="footer__info">* Required Fields</span>
            </form>
          </div>
          <!-- /.footer__contact-form -->
          <div class="footer__information">
            <ul class="footer__ul footer__ul-information">
              <li class="footer__information-a"><a href="#" class="footer__link">Disclaimer</a></li>
              <li class="footer__information-a"><a href="#" class="footer__link">Conditions of use</a></li>
              <li class="footer__information-b"><a href="#" class="footer__link">Cancellation policy</a></li>
            </ul>
          </div>
          <div class="footer__company">
            <img src="img/disclaimer.svg" alt="" class="footer__company-icon">
          </div>
          <!-- /.footer__information-->
        </div>
        <!-- /.footer__social-network -->
        <!-- /.footer-wrapper -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <div class="modal" id="booking-modal">
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->
      <div class="modal__dialog">
        <a href="#" class="modal__close">
          <img src="img/close.svg" alt="icon: close">
        </a>
        <div class="modal__contact-form">
          <h3 class="modal__title">Booking</h3>
          <form action="send.php" method="post" class="modal__form form">

            <input type="text" class="input modal__input" placeholder="Your Full Name*" name="name" required="" minlength="2">
            <input type="tel" class="input modal__input phone" placeholder="Phone Number*" name="phone" required="" minlength="18">
            <input type="email" class="input modal__input" placeholder="Email*" name="email" required="">
            <textarea placeholder="Message" class="message modal__message" name="message"></textarea>

            <button class="button modal__button" type="submit">Send</button>
            <span class="modal__info">* Required Fields</span>
          </form>
        </div>
        <!-- /.modal__dialog -->
      </div>
      <!-- /.modal -->
    </div>
    <!-- /.modal -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/map.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>




















