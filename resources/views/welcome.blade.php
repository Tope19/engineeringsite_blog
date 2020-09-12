@extends('web.layouts.app')
@section('title')
Home
@endsection
@section('content')
    <section class="section section-about">
        <div class="container">
            <div class="banner-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="banner-box__content">
                            <div class="row">
                                <div class="col-lg-2"><img src="web/svg/schedule.svg" alt="icons"></div>
                                <div class="col-lg-10">
                                    <h3>Work flow</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto
                                        dolorum fugiat doloribus dolores cum aliquid</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-box__content">
                            <div class="row">
                                <div class="col-lg-2"><img src="web/svg/brainstorming.svg" alt="icons"></div>
                                <div class="col-lg-10">
                                    <h3>Collaboration</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto
                                        dolorum fugiat doloribus dolores cum aliquid</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-box__content">
                            <div class="row">
                                <div class="col-lg-2"><img src="web/svg/security.svg" alt="icons"></div>
                                <div class="col-lg-10">
                                    <h3>Secure</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto
                                        dolorum fugiat doloribus dolores cum aliquid</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Reversing boostrap columns "flex-column-reverse flex-lg-row" -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="bg__content">
                        <h1>Who <br> we are?</h1>
                        <span>All about us</span>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        </p>
                        <a href="#" class="btn btn--padding btn--gradient">Join us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg"></div>
                    <img src="web/images/homepage/construct-1.png" alt="construct-1">
                </div>
            </div>
        </div>
    </section>

    <section class="section section-services">
        <div class="container-fluid">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-7">
                    <div class="container">
                        <div class="services__box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="web/svg/analysis-1.svg" alt="icon">
                                    <h3>Quantitave Research</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament tore
                                    </p>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament
                                        tore</span>
                                    <a href="" class="btn btn--gradient">Read more <i
                                            class="fal fa-arrow-right"></i></a>
                                </div>
                                <div class="col-lg-6">
                                    <img src="web/svg/tools.svg" alt="icon">
                                    <h3>Construction</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament tore
                                    </p>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament
                                        tore</span>
                                    <a href="" class="btn btn--gradient">Read more <i
                                            class="fal fa-arrow-right"></i></a>
                                </div>

                                <div class="col-lg-6">
                                    <img src="web/svg/design-tool.svg" alt="icon">
                                    <h3>Civil & Architecture</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament tore
                                    </p>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament
                                        tore</span>
                                    <a href="" class="btn btn--gradient">Read more <i
                                            class="fal fa-arrow-right"></i></a>
                                </div>
                                <div class="col-lg-6">
                                    <img src="web/svg/compass.svg" alt="icon">
                                    <h3>Construction</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament tore
                                    </p>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit eooos elai ament
                                        tore</span>
                                    <a href="" class="btn btn--gradient">Read more <i
                                            class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg__content">
                        <h1>Our<br> Services</h1>
                        <span>The Best Construction <br> Company</span>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-about section-about--2">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <div class="bg bg--2"></div>
                    <img src="web/images/homepage/construct-2.png" alt="bg" class="bg--img">
                </div>
                <div class="col-lg-6">
                    <div class="bg__content">
                        <h1>Our <br>Vision</h1>
                        <span>The Best Construction <br> Company</span>
                        <p><img src="web/svg/analysis.svg" alt="text-bg"> Sed ut perspiciatis unde omnis iste natus
                            error sit
                            voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                        <p><img src="web/svg/chronometer.svg" alt="text-bg">Sed ut perspiciatis unde omnis iste natus
                            error sit
                            voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"><span>300</span>
                        <h1>Years of <br> Experience</h1>
                    </div>
                    <div class="col-lg-3"><span>1,500</span>
                        <h1>Projects <br> Successful</h1>
                    </div>
                    <div class="col-lg-3"><span>100</span>
                        <h1>Professional <br> Experts</h1>
                    </div>
                    <div class="col-lg-3"><span>300</span>
                        <h1>Happy<br> Custormers</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg__content">
                        <h1>Our<br> Projects</h1>
                        <span>All about us</span>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="web/images/homepage/contruct-1-home.jpg" alt="work-bg">
                            <div class="pj__content">
                                <a href="works.html">
                                    <h3>Buildings Construction</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum molestias
                                        temporibus, voluptate minima </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="web/images/homepage/contruct-2-home.jpg" alt="work-bg">
                            <div class="pj__content">
                                <a href="works.html">
                                    <h3>Road <br> Construction</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum molestias
                                        temporibus, voluptate minima </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="web/images/homepage/contruct-3-home.jpg" alt="work-bg">
                            <div class="pj__content">
                                <a href="works.html">
                                    <h3>Bridges Construction</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum molestias
                                        temporibus, voluptate minima </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <img src="web/images/homepage/contruct-4-home.jpg" alt="work-bg">
                            <div class="pj__content">
                                <a href="works.html">
                                    <h3>Steel & metallic <br> works <br></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum molestias
                                        temporibus, voluptate minima </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="web/images/homepage/contruct-5-home.jpg" alt="work-bg">
                            <div class="pj__content">
                                <a href="works.html">
                                    <h3>Excavation & <br> demolision</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum molestias
                                        temporibus, voluptate minima </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="web/images/homepage/contruct-6-home.jpg" alt="work-bg">
                            <div class="pj__content">
                                <a href="works.html">
                                    <h3>Brick laying <br> works</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum molestias
                                        temporibus, voluptate minima </p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="btn btn--black">View our works <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-parallax parallax-window" data-parallax="scroll" data-image-src="../web/images/bg1.jpg">
        <div class="section-parallax__content">
            <h2>Lets Build Your Dream Together</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nihil ipsum cumque. Iste harum
                delectus
                quaerat maxime, </p>
            <a href="" class="btn btn--gradient">Know more about us</a>
        </div>
    </section>

    <section class="section-team">
        <div class="container">
            <div class="bg__content">
                <h1>Meet the team</h1>
                <span>Renonced workers</span>
            </div>
            <div class="row">
                <div class="float-bg"></div>
                <div class="float-bg float-bg--2"></div>

                <div class="col-lg-3">
                    <div class="section-team__item">
                        <img src="web/images/team/CEO-1.jpg" alt="ceo">
                        <h2>James Anderson</h2>
                        <p>CEO</p>
                        <div class="social-icons">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="section-team__item">
                        <img src="web/images/team/CEO-2.jpg" alt="ceo">
                        <h2>Raymond Phil</h2>
                        <p>Managing Director</p>
                        <div class="social-icons">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="section-team__item">
                        <img src="web/images/team/CEO-1.jpg" alt="ceo">
                        <h2>James Anderson</h2>
                        <p>CEO</p>
                        <div class="social-icons">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="section-team__item">
                        <img src="web/images/team/CEO-2.jpg" alt="ceo">
                        <h2>Andry Fidel</h2>
                        <p>Ass. Managing Director</p>
                        <div class="social-icons">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection    