<!doctype html>
<html lang="en">

@include('pages.partials.header')

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container">
        @include('pages.partials.nav')

        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/aircraft.jpg') }}" width="100%" height="100%"
                            alt="" srcset="">

                        <div class="container">
                            <div class="carousel-caption text-start">

                                <p>Join as a member and you can contribute to building a sustainable, prosperous future for Transport and a better future for yourself</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/train.jpg') }}" width="100%" height="100%" alt=""
                            srcset="">

                        <div class="container">
                            <div class="carousel-caption">

                                <p>Explore the issues that matter in the industry, network with fellow professionals and drive your career forward.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/ship.jpg') }}" width="100%" height="100%" alt=""
                            srcset="">

                        <div class="container">
                            <div class="carousel-caption text-end">

                                <p>Join as a member and you can contribute to building a sustainable, prosperous future for Transport and a better future for yourself</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/truck.jpg') }}" width="100%" height="100%" alt=""
                            srcset="">

                        <div class="container">
                            <div class="carousel-caption text-end">

                                <p>Explore the issues that matter in the industry, network with fellow professionals and drive your career forward.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



        </main>

        @include('pages.partials.footer')
    </div>



</body>

</html>
