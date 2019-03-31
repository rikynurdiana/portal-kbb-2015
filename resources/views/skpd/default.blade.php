@extends('skpd.master')

@section('title')
    <title>Profile SKPD - </title>
@endsection

@section('css')
@endsection

@section('left-panel')
    <section id="left-contact" class="page-left dark">
        <div class="row">
            <article class="promo promo-contact span12 align-center add-top-main">
                <h2 class="title-sub">aura/<span class="title">contac</span><span class="title-highlight">t</span></h2>
                <h1 class="main-heading">let's talk about goodness</h1>
                <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p>
            </article>
        </div>
    </section>
    <section id="left-blog" class="page-left dark">
        <div class="row">
            <article class="promo promo-blog span12 align-center add-top-main">
                <h2 class="title-sub">aura/<span class="title">blo</span><span class="title-highlight">g</span></h2>
                <h1 class="main-heading">the thoughts at aura</h1>
                <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p>
            </article>
        </div>
    </section>
    <section id="left-team" class="page-left dark">
        <div class="row">
            <article class="promo promo-team span12 align-center add-top-main">
                <h2 class="title-sub">aura/<span class="title">tea</span><span class="title-highlight">m</span></h2>
                <h1 class="main-heading">our squad of talents</h1>
                <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p>
            </article>
        </div>
    </section>
    <section id="left-services" class="page-left dark">
        <div class="row">
            <article class="promo promo-services span12 align-center add-top-main">
                <h2 class="title-sub">aura/<span class="title">service</span><span class="title-highlight">s</span></h2>
                <h1 class="main-heading">The best we can offer</h1>
                <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p>
            </article>
        </div>
    </section>
    <section id="left-portfolio" class="page-left dark">
        <div class="row">
            <article class="promo promo-portfolio span12 align-center add-top-main">
                <h2 class="title-sub">aura/<span class="title">portfoli</span><span class="title-highlight">o</span></h2>
                <h1 class="main-heading">The best we have done.</h1>
                <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p>
            </article>
        </div>
    </section>
    <section id="left-about" class="page-left dark">
        <div class="row">
            <article class="promo promo-about span12 align-center add-top-main">
                <h2 class="title-sub">aura/<span class="title">abou</span><span class="title-highlight">t</span></h2>
                <h1 class="main-heading">A story of awesomeness!</h1>
                <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p>
            </article>
        </div>
    </section>
    <section id="left-home" class="page-left dark">
        <div class="row">
            <article class="promo promo-home span12 align-center ">
                <h2 class="title add-top-main-alt">aur<span class="title-highlight">a</span></h2>
                <h1 class="main-heading">Creative Digital Agency</h1>
                <p class="add-top main-heading">We are aura, the creative agency that stands out from the crowd. Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor.</p><p class="copyright">Copyright &copy; 2012 Designova.</p>
            </article>
        </div>
    </section>
    <section class="page-left dark">
        <div class="row">
            <article class="promo promo-home span12 align-center ">
                <p class="add-top main-heading">&nbsp;</p>
            </article>
        </div>
    </section>
@endsection

@section('home')
    <section id="home" class="page-right">
        <div class="row">
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">
                <div class="row pad-top-extra">
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">we are <span class="color-dark">aur</span>a.</span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom color-dark">
                        A creative digital agency from Paris. We create beautiful websites, elgant themes and stunning visual designs.
                        </h3>
                        <a class="scrollme btn btn-aura-dark" href="#about">More About Us</a>
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">our latest <span class="color-dark">work</span>s.</span>
                        </h1>
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/bg/01.jpg') }}"/>
                                <h5>Lorem Ipsum</h5>
                                <p class="small-para">Dolor siter amet lorem ipsum dolor siter amet</p>
                                </a>
                            </article>
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/bg/02.jpg') }}"/>
                                <h5>Lorem Ipsum</h5>
                                <p class="small-para">Dolor siter amet lorem ipsum dolor siter amet</p>
                                </a>
                            </article>
                            <article class="span4 home-inner-block thumbnail">
                                <a class="scrollme" href="#works">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/bg/03.jpg') }}"/>
                                <h5>Lorem Ipsum</h5>
                                <p class="small-para">Dolor siter amet lorem ipsum dolor siter amet</p>
                                </a>
                            </article>
                        </div>
                        <a class="scrollme btn btn-aura-dark" href="#portfolio">View All Works</a>
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">our featured <span class="color-dark">post</span>s.</span>
                        </h1>
                        <div class="row pad-left-medium pad-top-half add-bottom-half remove-pad-on-phone">
                            <div class="row pad-left-medium add-bottom remove-pad-on-phone">
                                <article class="span12 home-inner-block thumbnail">
                                    <a class="scrollme" href="#works">
                                    <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                    <h5>Featured Post Heading Goes Here</h5>
                                    <p class="small-para">Dolor siter amet lorem ipsum dolor siter amet siter amet lorem ipsum dolor siter amet lorem ipsum dolor siter amet siter amet lorem ipsum dolor siter amet lorem ipsum dolor siter amet siter amet lorem ipsum dolor siter amet</p>
                                    </a>
                                </article>
                            </div>
                            <div class="row pad-left-medium remove-pad-on-phone">
                                <article class="span12 home-inner-block thumbnail add-bottom">
                                    <a class="scrollme" href="#works">
                                    <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/03.jpg') }}"/>
                                    <h5>Featured Post Heading Goes Here</h5>
                                    <p class="small-para">Dolor siter amet lorem ipsum dolor siter amet siter amet lorem ipsum dolor siter amet lorem ipsum dolor siter amet siter amet lorem ipsum dolor siter amet lorem ipsum dolor siter amet siter amet lorem ipsum dolor siter amet</p>
                                    </a>
                                </article>
                                <a class="scrollme btn btn-aura-dark" href="#blog">View All Posts</a>
                            </div>
                        </div>
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </section>
@endsection

@section('about')
    <section id="about" class="page-right">
        <div class="row">
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">
                <div class="row pad-top-extra">
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">story of <span class="color-dark">aur</span>a.</span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        We are a creative digital agency from Paris. We create beautiful websites, elgant themes and stunning visual designs. We are creative people without having any limitation to our thoughts. We freak out, we dance, we jump in the air and sometimes we never sleep! We are that much awesome so you can never miss a project with us.
                        </h3>
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">our best <span class="color-dark">feature</span>s.</span>
                        </h1>
                        <div class="row pad-left-medium pad-top-half remove-pad-on-phone">
                            <article class="span6 add-top-half">
                                <i class="icon-flag features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Responsive</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                            </article>
                            <article class="span6 add-top-half">
                                <i class="icon-leaf features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Innovative</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                            </article>
                        </div>
                        <div class="row pad-left-medium pad-top-half remove-pad-on-phone">
                            <article class="span6 add-top-half">
                                <i class="icon-th-large features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Bootstrap</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                            </article>
                            <article class="span6 add-top-half">
                                <i class="icon-cloud features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Split</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                            </article>
                        </div>
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <article class="span6 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Modern</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                            </article>
                            <article class="span6 add-top-half">
                                <i class="icon-eye-open features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Uniqueness</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                            </article>
                        </div>
                    </article>
                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">
                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </section>
@endsection

@section('portfolio')
    <section id="portfolio" class="page-right">
        <div class="row">
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">
                <div class="row pad-top-extra">
                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">our nice <span class="color-dark">portfoli</span>o.</span>
                        </h1>

                    </article>
                    <!--block : ends-->



                    <div class="row pad-left-medium remove-pad-on-phone">
                        <div class="group">
                            <ul class="filter group">
                                <li class="current all"><a href="#">All</a></li>
                                <li class="web"><a href="#">Web</a></li>
                                <li class="print"><a href="#">Print</a></li>
                                <li class="brand"><a href="#">Brand</a></li>
                                <li class="digital"><a href="#">Digital</a></li>
                            </ul>
                        </div>
                        <!-- Portfolio Items -->
                        <ul class="portfolio group">
                            <li class="item" data-id="id-1" data-type="all brand">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/01.jpg') }}" width="173" height="173" alt="Portfolio Image 1" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-2" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/02.jpg') }}" width="173" height="173" alt="Portfolio Image 2" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-3" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/03.jpg') }}" width="173" height="173" alt="Portfolio Image 3" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-4" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/04.jpg') }}" width="173" height="173" alt="Portfolio Image 4" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-5" data-type="all brand">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/05.jpg') }}" width="173" height="173" alt="Portfolio Image 5" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-6" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/06.jpg') }}" width="173" height="173" alt="Portfolio Image 6" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-7" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/07.jpg') }}" width="173" height="173" alt="Portfolio Image 7" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-8" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/08.jpg') }}" width="173" height="173" alt="Portfolio Image 8" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-9" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/09.jpg') }}" width="173" height="173" alt="Portfolio Image 9" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-10" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/10.jpg') }}" width="173" height="173" alt="Portfolio Image 10" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-7" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/11.jpg') }}" width="173" height="173" alt="Portfolio Image 7" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-8" data-type="all brand">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/12.jpg') }}" width="173" height="173" alt="Portfolio Image 8" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-9" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/13.jpg') }}" width="173" height="173" alt="Portfolio Image 9" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-10" data-type="all digital">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/14.jpg') }}" width="173" height="173" alt="Portfolio Image 10" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-9" data-type="all print">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/15.jpg') }}" width="173" height="173" alt="Portfolio Image 9" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>
                            <li class="item" data-id="id-10" data-type="all web">
                                <a href="{{ asset('images/portfolio/full.jpg') }}" data-gal="prettyPhoto[portfolio]">
                                <div class="overlay-block"></div>
                                <img src="{{ asset('images/portfolio/16.jpg') }}" width="173" height="173" alt="Portfolio Image 10" />
                                <h5>Work Item Title</h5>
                                <p class="caption">A abstract project description given here</p>
                                </a>
                            </li>

                        </ul>
                        <div class="clear-float"></div>

                    </div>

                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>

                        </div>
                    </article>
                    <!--block : ends-->


                </div>
                <!--outer row : ends-->

            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('services')
    <section id="services" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">

                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">best we can <span class="color-dark">offe</span>r.</span>
                        </h1>
                        <div class="row pad-left-medium pad-top remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-flag features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Web Design</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                                <img  alt="aura" title="aura by designova" class="border-bottom-high" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                <button type="button" class="btn btn-aura-high notifier pull-top" data-toggle="collapse" data-target="#collapse-one">
                                +
                                </button>
                                <div id="collapse-one" class="collapse out pull-top-medium">
                                    <ul class="collapse-inner">
                                        <li>Responsive HTML5 based front-end Development</li>
                                        <li>Multi layout websites with Twitter Bootstrap Framework</li>
                                        <li>CSS3 Animations with Transitions and Transforms</li>
                                        <li>Interactive websites powered by jQuery</li>
                                    </ul>
                                </div>
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-th-large features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Branding &amp; Logo</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                                <img  alt="aura" title="aura by designova" class="border-bottom-high" src="{{ asset('images/img/posts/02.jpg') }}"/>
                                <button type="button" class="btn btn-aura-high notifier pull-top" data-toggle="collapse" data-target="#collapse-two">
                                +
                                </button>
                                <div id="collapse-two" class="collapse out pull-top-medium">
                                    <ul class="collapse-inner">
                                        <li>Stunning Designs with Professional Illustrations</li>
                                        <li>Perfectly on standards of International Branding</li>
                                        <li>Served more than 250 happy customers world wide</li>
                                    </ul>
                                </div>
                            </article>

                        </div>

                        <div class="row pad-left-medium pad-top add-bottom remove-pad-on-phone">

                            <article class="span12 add-top-half">
                                <i class="icon-heart features-thumb pull-left add-right-half"></i>
                                <h3 class="text-shadow-off common-subheading color-dark icon-heading">Digital Print</h3>
                                <p class="text-shadow-off pad-right add-top small-para">It has survived not only five centuries,
                                but also the leap into electronic typesetting. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem.</p>
                                <img  alt="aura" title="aura by designova" class="border-bottom-high" src="{{ asset('images/img/posts/03.jpg') }}"/>
                                <button type="button" class="btn btn-aura-high notifier pull-top" data-toggle="collapse" data-target="#collapse-three">
                                +
                                </button>
                                <div id="collapse-three" class="collapse out pull-top-medium">
                                    <ul class="collapse-inner">
                                        <li>Stunning Designs with Professional Illustrations</li>
                                        <li>Perfectly on standards of International Branding</li>
                                        <li>Served more than 250 happy customers world wide</li>
                                    </ul>
                                </div>
                            </article>

                        </div>
                    </article>
                    <!--block : ends-->



                    <!--block : starts-->
                    <article class="align-left block add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>

                        </div>
                    </article>
                    <!--block : ends-->

                </div>
                <!--outer row : ends-->

            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('team')
    <section id="team" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">

                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-medium">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">our team of <span class="color-dark">rocker</span>s.</span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        We are creative people without having any limitation to our thoughts. We freak out, we dance, we jump in the air and sometimes we never sleep! We are that much awesome so you can never miss a project with us.
                        </h3>
                    </article>
                    <!--block : ends-->

                    <!--block : starts-->
                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">

                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/01.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">Mark Spencer</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Senior Developer</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center">
                                    <div class="team-img-wrap">
                                        <img title="aura by designova" alt="aura" src="{{ asset('images/img/team/02.jpg') }}">
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">Tara Vivienne</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Business Head</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>


                        <div class="span4">

                            <!--team-block : starts-->
                            <div class="team-block">

                                <div class="align-center team-block-in">
                                    <div class="team-img-wrap">
                                        <img src="{{ asset('images/img/team/03.jpg') }}" title="aura by designova" alt="aura"/>
                                    </div>
                                    <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">Edgar Santos</h3>
                                    <h4 class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">Senior Designer</h4>
                                </div>

                                <p class="text-shadow-off team-margin add-bottom-half">Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl..</p>
                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#"><i class="icon-envelope-alt"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </nav>

                            </div>
                            <!--team-block : ends-->

                        </div>

                    </div>


                    <!--block : starts-->
                    <article class="align-left block add-top add-bottom-extra">
                        <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                            <nav class="promo-social pad-top-half align-left">
                                <a href="#"><i class="icon-facebook-sign"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-linkedin"></i></a>
                                <a href="#"><i class="icon-pinterest"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </nav>

                        </div>
                    </article>
                    <!--block : ends-->

                </div>
                <!--outer row : ends-->

            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('blog')
    <section id="blog" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">


                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-medium">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">sharing our <span class="color-dark">thought</span>s.</span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        We are open for a new project. Lorem ipsum dolor siter amet lorem ipsum dolor siter amet ipsum dolor siter ametipsum dolor siter amet ipsum dolor siter amet.
                        </h3>
                    </article>
                    <!--block : ends-->

                    <!--block : starts-->
                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">


                        <div class="span12">

                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">An awesome blog title</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Read Full</a>
                                    <br class="blog-clear"/>
                                </div>
                                <div class="blog-stats">
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 02/10/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                                        <li><i class="icon-tags"></i> <a href="#">web design</a>, <a href="#">tutorials</a>, <a href="#">resources</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->
                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/02.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">An awesome blog title</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Read Full</a>
                                    <br class="blog-clear"/>
                                </div>
                                <div class="blog-stats">
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 09/05/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                                        <li><i class="icon-tags"></i> <a href="#">web design</a>, <a href="#">tutorials</a>, <a href="#">resources</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->
                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/03.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">An awesome blog title</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Read Full</a>
                                    <br class="blog-clear"/>
                                </div>
                                <div class="blog-stats">
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 03/04/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                                        <li><i class="icon-tags"></i> <a href="#">web design</a>, <a href="#">tutorials</a>, <a href="#">resources</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->
                            <!--blog-block : starts-->
                            <article class="blog-block add-bottom">
                                <img  alt="aura" title="aura by designova" src="{{ asset('images/img/posts/01.jpg') }}"/>
                                <div class="blog-post-heading">
                                    <h3 class="blog-title">An awesome blog title</h3>
                                    <a class="blog-button btn btn-aura-dark" href="#">Read Full</a>
                                    <br class="blog-clear"/>
                                    <div class="blog-stats">
                                    </div>
                                    <ul class="post-data">
                                        <li><i class="icon-calendar"></i> 21/01/12</li>
                                        <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                                        <li><i class="icon-tags"></i> <a href="#">web design</a>, <a href="#">tutorials</a>, <a href="#">resources</a></li>
                                    </ul>
                                </div>
                            </article>
                            <!--blog-block : ends-->

                        </div>
                        <!--span12 : ends-->

                    </div>
                    <!--block : ends-->


                </div>
                <!--outer row : ends-->


            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('contact')
    <section id="contact" class="page-right">
        <div class="row">
            <!--span12 starts-->
            <article class="span10 align-center pad-top offset2 remove-offset-on-phone">


                <!--outer row : starts-->
                <div class="row pad-top-extra">

                    <!--block : starts-->
                    <article class="align-left block add-bottom-medium">
                        <h1 class="in-main-heading color-high text-shadow-white">
                        <span class="iconize color-high">/</span>
                        <span class="iconize color-dark">/</span>
                        <span class="big-one add-left-half">love to be in <span class="color-dark">touc</span>h.</span>
                        </h1>
                        <h3 class="in-sub-heading add-top add-bottom-half color-dark">
                        We are open for a new project. Lorem ipsum dolor siter amet lorem ipsum dolor siter amet ipsum dolor siter ametipsum dolor siter amet ipsum dolor siter amet.
                        </h3>
                    </article>
                    <!--block : ends-->

                    <!--block : starts-->
                    <div class="row pad-left-medium pad-top-medium remove-pad-on-phone">


                        <div class="span12">

                            <!--contact-block : starts-->
                            <div class="contact-block">


                                <!--contact-block-in : starts-->
                                <div class="align-center contact-block-in">


                                    <!--contactform : starts-->
                                    <div class="contactform pad-top pad-bottom-half add-bottom align-left pad-left">


                                        <form method="post" enctype="multipart/form-data" action="sendcontact.php" id="contactForm" name="myform">

                                            <article>
                                                Name
                                                <span class="error" id="fname" style="display: none;">Please enter your Name</span>
                                                <br>
                                                <input type="text" required id="name" name="name">
                                            </article>

                                            <article>
                                                Email
                                                <span class="error" id="fmail" style="display: none;">Please enter a valid Email</span>
                                                <br>
                                                <input type="email" required id="email" name="email">
                                            </article>


                                            <article>
                                                Message
                                                <span class="error" id="fmsg" style="display: none;">Please enter your Message</span>
                                                <br>
                                                <textarea id="msg" required name="message"></textarea>
                                            </article>

                                            <article>
                                                <button id="submit" name="submit" type="submit" class="btn btn-large btn-aura-dark">Send message</button>
                                            </article>
                                        </form>


                                    </div>
                                    <!--contactform : ends-->


                                </div>
                                <!--contact-block-in : ends-->

                            </div>
                            <!--contact-block : ends-->
                            <!--contact-block : starts-->
                            <div class="contact-block address-panel">


                                <h3 class="text-shadow-off promo-smallheading-alt-small color-dark team-margin">Contact Address</h3>
                                <p class="team-title text-shadow-off promo-smallheading-alt-small-inner color-dark pad-bottom-half team-margin">
                                Aura Inc.<br/>
                                #21 B, Paradise-M<br/>
                                Designers Avenue<br/>
                                Stockholm, Sweden - 12<br/><br/>
                                Phone: +012-345678<br/>
                                Fax: +012-345678<br/>
                                </p>

                                <nav class="team-social pad-top-half align-left border-top pad-bottom-half">
                                    <a href="#" title="email@domain.tld"> <i class="icon-envelope-alt"></i></a>
                                    <a href="#" title="+123-4546789"><i class="icon-phone"></i></a>
                                    <a href="#" title="skype username"><i class="icon-cloud"></i></a>
                                </nav>

                            </div>
                            <!--contact-block : ends-->


                            <!--block : starts-->
                            <article class="align-left block add-top add-bottom-extra">
                                <div class="row pad-left-medium pad-top-half add-bottom remove-pad-on-phone">

                                    <nav class="promo-social pad-top-half align-left">
                                        <a href="#"><i class="icon-facebook-sign"></i></a>
                                        <a href="#"><i class="icon-twitter"></i></a>
                                        <a href="#"><i class="icon-linkedin"></i></a>
                                        <a href="#"><i class="icon-pinterest"></i></a>
                                        <a href="#"><i class="icon-google-plus"></i></a>
                                    </nav>

                                </div>
                            </article>
                            <!--block : ends-->


                        </div>
                        <!--span12 : ends-->

                    </div>
                    <!--block : ends-->


                </div>
                <!--outer row : ends-->


            </article>
            <!--span12 ends-->
        </div>
    </section>
@endsection

@section('js')
@endsection
