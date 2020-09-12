@extends('web.layouts.contactapp')
@section('title')
Contact Us 
@endsection
@section('content')
    <section class="section-contact">
        <div class="container">
            
                        @if (Session::has('flash_message_error'))
                            <h5><font color="red">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </font></h5>        
                        @endif
                        @if (Session::has('flash_message_success'))
                            <h5><font color-"green">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </font></h5>       
                        @endif
            <div class="row">
                <div class="col-lg-4">
                    <form action="{{route('submitcontact')}}" method="post"> {{csrf_field()}}
                        <input type="text" placeholder="Name" name="name" class="form__input" required/>
                        <input type="email" placeholder="Email"name="email" class="form__input" required/>
                        <input type="number" placeholder="Phone" name="phone" class="form__input" required/>
                        <input type="text" placeholder="Subject" name="subject" class="form__input" required/>
                        <textarea name="message" class="form__input form__input--2" placeholder="Your message.." required></textarea>
                        <input type="submit" value="Submit" class="btn btn--black btn--padding"/>
                    </form>
                </div>
                <div class="col-lg-8">
                    <div class="contact">
                        <h1 class="contact__header">24hrs Custormer System, <br> Just give us a call.</h1>
                        <div class="contact__content">
                            <h1>Address</h1>
                            <p>2384 Locust Street San Francisco , CA 49503</p>
                        </div>

                        <div class="contact__content">
                            <h1>Phone</h1>
                            <p>(+234) 888-353-3532, (+234) 888-353-3532, (+234) 888-353-3532</p>
                        </div>

                        <div class="contact__content">
                            <h1>Social networks</h1>
                            <div class="social-icons">
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-whatsapp"></i></a>
                                <a href=""><i class="fab fa-google-plus"></i></a>
                            </div>
                        </div>

                        <div class="contact__content">
                            <h1>Email</h1>
                            <p><a href="#">Adzulengines@gmail.com</a>, <a href="#">Adzulengines@outlook.com</a>, <a
                                    href="#">Adzulengines@linkedin.com</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-map">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe style="height: 100%;width: 100%" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Ebbaiyelo&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no"></iframe><a
                    href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/"></a>
            </div>
        </div>
    </section>
@endsection