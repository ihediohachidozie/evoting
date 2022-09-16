<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>



    <div class="container py-3">
        @include('pages.partials.nav')

        <main>
            <div class="py-2 text-center">

                <h2>Candidate Normination Form</h2>
                <p class="lead">Fill the form below with your details correctly.</p>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="needs-validation" novalidate method="POST" action="{{ route('candidates.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="member" class="form-label">Member' Name</label>
                        <select class="form-select" id="member" name="member_id" required>

                                <option value="{{ $norminated[0]->member['id'] }}">
                                    {{ strtoupper($norminated[0]->member['name']) }}</option>

                        </select>
                        <div class="invalid-feedback">
                            Please select your Member Name.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="office" class="form-label">Offices Norminated</label>
                        <select class="form-select" id="office" name="office_id" required>
                            <option value="">Choose...</option>
                            @for ($i = 0; $i < count($norminated); $i++)
                                <option value="{{ $norminated[$i]->office['id'] }}">
                                    {{ strtoupper($norminated[$i]->office['name']) }}</option>
                            @endfor
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid Office.
                        </div>
                    </div>


                </div>

                <div class="mb-3 mt-3">
                    <label for="formFile" class="form-label">Upload Normination file (pdf format must be less than
                        600kb)</label>
                    <input class="form-control" type="file" id="norminationform" name="norminationform">
                    <div class="invalid-feedback">
                        Please upload the normination form.
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="formFile" class="form-label">Upload your CV (pdf format must be less than
                        600kb)</label>
                    <input class="form-control" type="file" id="resume" name="resume">
                    <div class="invalid-feedback">
                        Please upload the normination form.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Passport photograph (png, jpeg, jpg or gif format
                        must be less than 300kb)</label>
                    <input class="form-control" type="file" id="image" name="image">
                    <div class="invalid-feedback">
                        Please upload the photograph.
                    </div>
                </div>


                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
            </form>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block my-4">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </main>

        @include('pages.partials.footer')
    </div>

    @include('pages.partials.scripts')

</body>

</html>
