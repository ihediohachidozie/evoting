<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>



    <div class="container py-3">
        @include('pages.partials.nav')

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
                    <form class="needs-validation" novalidate method="POST" action="{{route('candidates.store')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="member" class="form-label">Member' Name</label>
                                <select class="form-select" id="member" name="member_id" required>
                                    <option value="">Choose...</option>
                                    @foreach ($members as $key => $value)
                                        <option value="{{$key}}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select your Member Name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="office" class="form-label">Office</label>
                                <select class="form-select" id="office" name="office_id" required>
                                    <option value="">Choose...</option>
                                    @foreach ($offices as $key => $value)
                                        <option value="{{$key}}">{{ strtoupper($value) }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Office.
                                </div>
                            </div>


                        </div>

                        <div class="mb-3 mt-3">
                            <label for="formFile" class="form-label">Upload Normination file (pdf format must be less than 600kb)</label>
                            <input class="form-control" type="file" id="norminationform" name="norminationform">
                            <div class="invalid-feedback">
                                Please upload the normination form.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Passport photograph (png, jpeg, jpg or gif format must be less than 300kb)</label>
                            <input class="form-control" type="file" id="image" name="image">
                            <div class="invalid-feedback">
                                Please upload the photograph.
                            </div>
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
