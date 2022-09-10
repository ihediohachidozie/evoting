<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>



    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom ">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="{{ asset('assets/img/cilt-logo.png') }}" width=25% height=15%>

                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Features</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Enterprise</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
                    <a class="py-2 text-dark text-decoration-none" href="#">Pricing</a>
                </nav>
            </div>


        </header>

        <main>
            <div class="py-5 text-center">

                <h2>Candidate Normination</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required
                    form group has a validation state that can be triggered by attempting to submit the form without
                    completing it.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3"></h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Choose...</option>
                                    @foreach ($members as $key => $value)
                                        <option>{{ $value }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select your name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Choose...</option>
                                    @foreach ($offices as $key => $value)
                                        <option>{{ strtoupper($value) }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>


                        </div>

                        <div class="mb-3 mt-3">
                            <label for="formFile" class="form-label">Upload Normination file</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Passport photograph</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>


                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>

        @include('pages.partials.footer')
    </div>

    @include('pages.partials.scripts')

</body>

</html>
