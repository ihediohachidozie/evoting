<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        @include('pages.partials.nav')

        <main>
            <div class="text-center">

                <h3>Chairman</h3>
                <hr class="my-4">
            </div>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="chairman" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Chairman 1
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="chairman" id="exampleRadios2"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios2">
                                    Chairman 2
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="chairman" id="exampleRadios3"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios3">
                                    Chairman 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="my-4">
            <div class="text-center">

                <h3>Vice Chairman</h3>
                <hr class="my-4">
            </div>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vicechairman" id="vicechairman1"
                                    value="option1" checked>
                                <label class="form-check-label" for="vicechairman1">
                                    Vice Chairman 1
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vicechairman" id="vicechairman2"
                                    value="option1" checked>
                                <label class="form-check-label" for="vicechairman2">
                                    Vice Chairman 2
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/image.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vicechairman" id="vicechairman3"
                                    value="option1" checked>
                                <label class="form-check-label" for="vicechairman3">
                                    Vice Chairman 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="w-100 btn btn-primary btn-lg my-4" type="submit">Vote</button>

        </main>
        @include('pages.partials.footer')
    </div>







</body>

</html>
