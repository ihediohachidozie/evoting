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
            <div class="py-5 text-center">

                <h2>Members' Accreditation</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required
                    form group has a validation state that can be triggered by attempting to submit the form without
                    completing it.</p>
            </div>

            <form class="needs-validation my-4" action="{{ route('accreditation.accredit') }}" method="POST">
                @csrf
                <div class="text-center">
                    <input class="form-control my-4" placeholder="Enter your pin" type="text" name="pin"
                        id="pin">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Accreditate</button>
                </div>
            </form>
            @if (session('status'))
                <div class="alert alert-danger text-center">
                    {{ session('status') }}
                </div>
            @endif


        </main>

        @include('pages.partials.footer')
    </div>



</body>

</html>
