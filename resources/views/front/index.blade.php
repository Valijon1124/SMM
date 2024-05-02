@extends('front.master')
@section('content')
    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner"
            style="background-image: url(images/img_bg_4.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-mt-15em">
                <div class="col-md-12 mt-text text-center animate-box" data-animate-effect="fadeInUp">
                    <h1>We Build <strong>Branded Platforms</strong></h1>
                </div>
            </div>
        </div>
    </header>

    <div class="overflow-hid" id="services">
        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Services</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="#" class="gtco-card-item">
                                <figure>
                                    <div class="overlay"><i class="ti-plus"></i></div>
                                    <img src="{{asset('img/service/' . $item->img)}}" alt="Image"
                                         class="img-responsive">
                                </figure>
                                <div class="gtco-text">
                                    <h2>{{ $item->title }}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit($item->description) }}</p>
                                    <p><span class="btn btn-primary">Learn more</span></p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Networks</h2>
                </div>
            </div>

            <div class="row">
                @foreach($networks as $item)
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="feature-center">
                            <span class="counter js-counter" data-from="0" data-to="{{ $item->count }}" data-speed="{{ $item->count / 10 }}"
                                  data-refresh-interval="50">1</span>
                            <span class="counter-label">{{ $item->name }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="gtco-section gtco-gray-bg" id="contact">
        <div class="gtco-container">
            <div class="row">

                <div class="col-md-12">
                    <div class="col-md-6 animate-box">
                        <h3>Get In Touch</h3>
                        <form action="{{ route('messages.store') }}" method="post">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Your firstname">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Your email address">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="subject">Subject</label>
                                    <input type="text" name="title" id="subject" class="form-control"
                                           placeholder="Your subject of this message">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                              placeholder="Write us something"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                    <div class="col-md-5 col-md-push-1 animate-box">

                        <div class="gtco-contact-info">
                            <h3>Contact Information</h3>
                            <ul>
                                <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                                <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                                <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li class="url"><a href="http://GetTemplates.co">GetTemplates.co</a></li>
                            </ul>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
