
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ZippyReg 2</title>
    <meta name="description" content="" />
    <meta content="" name="description" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="width=device-width" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="icon.png" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
</head>

<body>
<main class="main">
    @include('layouts.nav')

    <section class="home__hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7  home__hero-image-section">

                    <img
                            class="home__hero-bg wow fadeInRight"
                            src="/img/bg.png"
                            width="800"
                    />
                </div>
                <div
                        class="col-12 col-md-5  home__hero-text-section  align-self-end wow fadeInUp"
                        data-wow-delay="1.5s"
                >
                    <h1>Registration in a zip.</h1>
                    <p class="mt-4 mb-4">
                        ZippyReg is a comprehensive online registration platform.
                        Our roots go back over 15 years to 2003, when we launched
                        online registration for our own running races, and eventually
                        grew to provide registration services for the contracted
                        events across the country
                    </p>
                    <a href="#about" class="btn btn-secondary btn-lg">See how easy it is to get started.</a>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works" id="about">
        <div class="container">
            <div class="row">
                <!-- SINGLE ITEM -->
                <div
                        data-wow-delay="0.6s"
                        class="wow fadeInRight how-it-works__item col-12 col-md-6 col-lg-3 mb-3"
                >
                    <div
                            class="how-it-works__item-bg d-flex flex-column align-items-center text-center"
                    >
                        <span class="how-it-works__item-number">1</span>
                        <i class="fas fa-sign-in-alt"></i>
                        <h4 class="mt-4 mb-4">Sign up with ZippyReg.</h4>

                        <p>
                            To start creating events, register for an event manager account on ZippyReg</a>
                        </p>
                    </div>
                </div>
                <!-- / SINGLE ITEM -->
                <!-- SINGLE ITEM -->
                <div
                        data-wow-delay="0.4s"
                        class="wow fadeInRight how-it-works__item col-12 col-md-6 col-lg-3 mb-3"
                >
                    <div
                            class="how-it-works__item-bg d-flex flex-column align-items-center text-center"
                    >
                        <span class="how-it-works__item-number">2</span>
                        <i class="fas fa-calendar-plus"></i>
                        <h4 class="mt-4 mb-4">Create an event.</h4>
                        <p>
                            As a coordinator, you can see your events, create new events, and do much more!
                        </p>
                    </div>
                </div>
                <!-- / SINGLE ITEM -->
                <!-- SINGLE ITEM -->
                <div
                        data-wow-delay="0.2s"
                        class="wow fadeInRight how-it-works__item col-12 col-md-6 col-lg-3 mb-3"
                >
                    <div
                            data-wow-delay="0.4s"
                            class="how-it-works__item-bg d-flex flex-column align-items-center text-center"
                    >
                        <span class="how-it-works__item-number">3</span>
                        <i class="fas fa-toggle-on"></i>
                        <h4 class="mt-4 mb-4">Enable registation.</h4>

                        <p>
                            Simply turn on registration, and people will be able to register for your event.
                        </p>
                    </div>
                </div>
                <!-- / SINGLE ITEM -->
                <!-- SINGLE ITEM -->
                <div
                        class="wow fadeInRight how-it-works__item col-12 col-md-6 col-lg-3 mb-3"
                >
                    <div
                            class="how-it-works__item-bg d-flex flex-column align-items-center text-center"
                    >
                        <span class="how-it-works__item-number">4</span>
                        <i class="fas fa-chart-line"></i>
                        <h4 class="mt-4 mb-4">View data and insights.</h4>

                        <p>
                            You can use your dashboard to view all sorts data about your event.
                        </p>
                    </div>
                </div>
                <!-- / SINGLE ITEM -->
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <img
                src="img/bg.png"
                class="features__logo wow fadeInLeft"
                alt="background element"
        />
        <div class="container">
            <div class="row features__item">
                <div
                        class=" wow fadeInRight col-lg-4 col-md-8 col-sm-12 d-flex flex-column align-self-center"
                >
                    <span class="info-text">You plan the event.</span>
                    <h3 class="mt-4 mb-4">Let us handle<br> the registration.</h3>
                    <p>
                        We want you to plan the best possible event you can. We don't think
                        you should be stressing over event registration. You do your thing,
                        let us take care of the rest.
                    </p>
                    <p>Here's a peek at what we offer!</p>
                    <ul class="features__item-list">

                        <li>
                            <i class="fas fa-arrow-circle-right"></i>
                            <h4>Seamless event creation and management.</h4>
                        </li>

                        <li>
                            <i class="fas fa-arrow-circle-right"></i>
                            <h4>Best in class customer support.</h4>
                        </li>

                        <li>
                            <i class="fas fa-arrow-circle-right"></i>
                            <h4>PCI compliant payment processing.</h4>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="jumbotron">
                        <i class="fas fa-running wow fadeInDown"></i>
                        <h1 class="mb-5 wow fadeInUp" data-wow-delay="0.3s">
                            Quick, painless, event<br />
                            registration.
                        </h1>
                        <p class="lead mb-5 wow fadeInDown" data-wow-delay="0.5s">
                            With ZippyReg.
                        </p>

                        <p class="lead">
                            <a
                                    class="btn btn-primary btn-lg wow fadeInUp"
                                    href="#plans"
                                    role="button"
                            >View our Plans</a
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing section" id="plans">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5  wow fadeIn" data-wow-delay="0.3s">
                    <h2 class="text-center">Our plans</h2>
                    <p class="text-center info-text">We have different plans for organizations of all sizes.</p>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInLeft">
                    <div class="pricing-box shadow text-center mb-3">
                        <span class="icon ti-announcement"></span>
                        <h3>free</h3>
                        <span class="pricing-box-price">
                $0.00 <span class="pricing-box-price-small">per month</span>
              </span>
                        <ul>
                            <li>3 <em>free</em> events</li>
                            <li>Excellent support</li>
                            <li>free hosting</li>
                        </ul>
                        <a href="#" class="btn btn-margin btn-default"
                        >select <span class="ti-arrow-right"></span
                            ></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInLeft">
                    <div class="pricing-box shadow text-center mb-3">
                        <span class="icon ti-announcement"></span>
                        <h3>basic</h3>
                        <span class="pricing-box-price">
                $13.00 <span class="pricing-box-price-small">per month</span>
              </span>
                        <ul>
                            <li>Personal use</li>
                            <li>Unlimited projects</li>
                            <li>24/7 support</li>
                            <li>3 email address</li>
                            <li>free hosting</li>
                        </ul>
                        <a href="#" class="btn btn-margin btn-default"
                        >select <span class="ti-arrow-right"></span
                            ></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div
                            class="pricing-box pricing-box-featured shadow text-center wow fadeInUp mb-3"
                    >
                        <span class="icon ti-announcement"></span>
                        <h3>standard</h3>
                        <span class="pricing-box-price">
                $20.00 <span class="pricing-box-price-small">per month</span>
              </span>
                        <ul>
                            <li>Personal use</li>
                            <li>Unlimited projects</li>
                            <li>24/7 support</li>
                            <li>3 email address</li>
                            <li>free hosting</li>
                        </ul>
                        <a href="#" class="btn btn-margin btn-default"
                        >select <span class="ti-arrow-right"></span
                            ></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInRight">
                    <div class="pricing-box shadow text-center mb-3">
                        <span class="icon ti-announcement"></span>
                        <h3>premium</h3>
                        <span class="pricing-box-price">
                $30.00 <span class="pricing-box-price-small">per month</span>
              </span>
                        <ul>
                            <li>Personal use</li>
                            <li>Unlimited projects</li>
                            <li>24/7 support</li>
                            <li>3 email address</li>
                            <li>free hosting</li>
                        </ul>
                        <a href="#" class="btn btn-margin btn-default"
                        >select <span class="ti-arrow-right"></span
                            ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lead-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5  wow fadeIn" data-wow-delay="0.3s">
                    <h2 class="text-center">request a demo</h2>
                    <p class="text-center info-text text-light">
                        Lorem ipsum dolor sit amet
                    </p>
                </div>

                <div class="col-12 col-md-8 offset-md-2">
                    <!-- CONTACT FORM -->

                    <form class=" wow fadeInLeft">
                        <div class="form-group">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Name"
                                    required
                            />
                        </div>

                        <div class="form-group">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="contact-email"
                                    name="contact-email"
                                    placeholder="Email"
                                    required
                            />
                        </div>

                        <div class="form-group">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="mobile"
                                    name="mobile"
                                    placeholder="Mobile Number"
                                    required
                            />
                        </div>

                        <div class="form-group">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="subject"
                                    name="subject"
                                    placeholder="Organization name"
                                    required
                            />
                        </div>
                        <button type="button" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <img class="lead-form__bg wow fadeInRight" src="img/bg.png" />
    </section>

    <section class="team" id="team">
        <div class="container">
            <row>
                <div class="col-md-12 mb-5 mt-5  wow fadeIn" data-wow-delay="0.3s">
                    <h2 class="text-center">our team of experts</h2>
                    <p class="text-center info-text text-light">
                        Lorem ipsum dolor sit amet
                    </p>
                </div>
            </row>

            <div class="row">
                <!-- SINGLE ITEM -->
                <div class="col-12 col-md-4">
                    <div class="text-center team__item">
                        <img
                                class="u-box-shadow-lg img-fluid img-thumbnail rounded-circle mb-4"
                                src="img/user-01.jpg"
                                width="180"
                        />
                        <h4>Jonatan Doea</h4>
                        <span class="team__item-role mb-4">Blokchain specialist</span>
                        <p class="pb-32">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Numquam harum voluptatibus dignissimos. Repellendus quibusdam
                            facilis eum natus porro. Debitis, earum nisi labore eligendi
                            neque exercitationem vel similique expedita aliquam tempore!
                        </p>
                        <div class="team__item-contact row mt-4">
                            <button
                                    class="btn btn-link btn-block  btn-lg col-6"
                                    data-toggle="tooltip"
                                    data-original-title="audio call"
                            >
                                <span class="ti-mobile"></span>
                            </button>
                            <button
                                    class="btn btn-link btn-lg btn-block col-6"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    data-original-title="video call"
                            >
                                <span class="ti-video-camera"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- / SINGLE ITEM -->

                <!-- SINGLE ITEM -->
                <div class="col-12 col-md-4">
                    <div class="text-center team__item">
                        <img
                                class="u-box-shadow-lg img-fluid img-thumbnail rounded-circle mb-4"
                                src="img/user-02.jpg"
                                width="180"
                        />
                        <h4>Jonatan Doea</h4>
                        <span class="team__item-role mb-4">Blokchain specialist</span>
                        <p class="pb-32">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Numquam harum voluptatibus dignissimos. Repellendus quibusdam
                            facilis eum natus porro. Debitis, earum nisi labore eligendi
                            neque exercitationem vel similique expedita aliquam tempore!
                        </p>
                        <div class="team__item-contact row mt-4">
                            <button
                                    class="btn btn-link btn-block  btn-lg col-6"
                                    data-toggle="tooltip"
                                    data-original-title="audio call"
                            >
                                <span class="ti-mobile"></span>
                            </button>
                            <button
                                    class="btn btn-link btn-lg btn-block col-6"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    data-original-title="video call"
                            >
                                <span class="ti-video-camera"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- / SINGLE ITEM -->
                <!-- SINGLE ITEM -->
                <div class="col-12 col-md-4">
                    <div class="text-center team__item">
                        <img
                                class="u-box-shadow-lg img-fluid img-thumbnail rounded-circle mb-4"
                                src="img/user-03.jpg"
                                width="180"
                        />
                        <h4>Jonatan Doea</h4>
                        <span class="team__item-role mb-4">Blokchain specialist</span>
                        <p class="pb-32">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Numquam harum voluptatibus dignissimos. Repellendus quibusdam
                            facilis eum natus porro. Debitis, earum nisi labore eligendi
                            neque exercitationem vel similique expedita aliquam tempore!
                        </p>
                        <div class="team__item-contact row mt-4">
                            <button
                                    class="btn btn-link btn-block  btn-lg col-6"
                                    data-toggle="tooltip"
                                    data-original-title="audio call"
                            >
                                <span class="ti-mobile"></span>
                            </button>
                            <button
                                    class="btn btn-link btn-lg btn-block col-6"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    data-original-title="video call"
                            >
                                <span class="ti-video-camera"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- / SINGLE ITEM -->
            </div>
        </div>
    </section>

    <section id="faq" class="faq">
        <div class="container">
            <row>
                <div class="col-md-12 mb-5  wow fadeIn" data-wow-delay="0.3s">
                    <h2 class="text-center">frequently asked questions</h2>
                    <p class="text-center info-text">Lorem ipsum dolor sit amet</p>
                </div>
            </row>
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button
                                            class="pl-0 btn btn-link btn-block text-left"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseOne"
                                            aria-expanded="true"
                                            aria-controls="collapseOne"
                                    >
                                        Collapsible Group Item #1
                                    </button>
                                </h5>
                            </div>

                            <div
                                    id="collapseOne"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#accordionExample"
                            >
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee
                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button
                                            class="pl-0 btn btn-link btn-block text-left"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo"
                                    >
                                        Collapsible Group Item #2
                                    </button>
                                </h5>
                            </div>
                            <div
                                    id="collapseTwo"
                                    class="collapse"
                                    aria-labelledby="headingTwo"
                                    data-parent="#accordionExample"
                            >
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee
                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button
                                            class="pl-0 btn btn-link btn-block text-left"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree"
                                    >
                                        Collapsible Group Item #3
                                    </button>
                                </h5>
                            </div>
                            <div
                                    id="collapseThree"
                                    class="collapse"
                                    aria-labelledby="headingThree"
                                    data-parent="#accordionExample"
                            >
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee
                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button
                                            class="pl-0 btn btn-link btn-block text-left"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseFour"
                                    >
                                        Collapsible Group Item #3
                                    </button>
                                </h5>
                            </div>
                            <div
                                    id="collapseFour"
                                    class="collapse"
                                    aria-labelledby="headingFour"
                                    data-parent="#accordionExample"
                            >
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia
                                    aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt aliqua put a bird on it squid single-origin coffee
                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <footer class="footer">
            <img class="footer__image" src="img/bg.png" alt="image background" />
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <img src="img/logo-white.png" width="200" alt="landingo sign" />
                    </div>
                    <div class="col-12">
                        <ul class="footer__social d-flex justify-content-center">
                            <li>
                                <a href="#"><span class="ti-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="ti-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="ti-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="ti-google"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="ti-pinterest"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-5">
                        <h5 class="mb-4">Some links</h5>
                        <ul>
                            <li><a href="#"> Anim pariatur</a></li>
                            <li><a href="#"> cliche reprehenderit</a></li>
                            <li><a href="#"> high life accusamus </a></li>
                            <li><a href="#"> terry richardson </a></li>
                            <li><a href="#"> Brunch 3 wolf</a></li>
                            <li><a href="#"> moon tempor sunt</a></li>
                            <li><a href="#"> aliqua put a bird </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-5">
                        <h5 class="mb-4">Some links</h5>
                        <ul>
                            <li><a href="#"> Anim pariatur</a></li>
                            <li><a href="#"> cliche reprehenderit</a></li>
                            <li><a href="#"> high life accusamus </a></li>
                            <li><a href="#"> terry richardson </a></li>
                            <li><a href="#"> Brunch 3 wolf</a></li>
                            <li><a href="#"> moon tempor sunt</a></li>
                            <li><a href="#"> aliqua put a bird </a></li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3 mb-5">
                        <h5 class="mb-4">Some links</h5>
                        <ul>
                            <li><a href="#"> Anim pariatur</a></li>
                            <li><a href="#"> cliche reprehenderit</a></li>
                            <li><a href="#"> high life accusamus </a></li>
                            <li><a href="#"> terry richardson </a></li>
                            <li><a href="#"> Brunch 3 wolf</a></li>
                            <li><a href="#"> moon tempor sunt</a></li>
                            <li><a href="#"> aliqua put a bird </a></li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3 mb-5">
                        <div class="row">
                            <div class="col-12 ">
                                <h5 class="mb-4">Opening Hours</h5>
                                <p class="contact-small-text">
                                    <span class="ti-alarm-clock"></span> Mon - Tue
                                    <span class="float-right"> Closed</span>
                                </p>
                                <p class="contact-small-text">
                                    <span class="ti-alarm-clock"></span> Wed - Thu
                                    <span class="float-right">6:00 - 10:00 Pm</span>
                                </p>
                                <p class="contact-small-text">
                                    <span class="ti-alarm-clock"></span> Fri - Sun
                                    <span class="float-right"> 5:30 - 10:00 Pm</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</main>


<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"
></script>
<script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"
></script>
<script src="/js/wow.js"></script>
<script src="/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("send", "pageview");
</script>
<script
        src="https://www.google-analytics.com/analytics.js"
        async
        defer
></script>
</body>
</html>
