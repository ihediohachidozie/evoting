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
            <div class="py-2 text-center">

                <h1>Thank You for Voting!</h1>

                @if (session('status'))
                    <div class="alert alert-primary text-center">
                        {{ session('status') }}
                    </div>
                @endif

                <a class="w-100 btn btn-primary btn-lg" href="/">Home</a>

            </div>


        </main>

        @include('pages.partials.footer')
    </div>



</body>

</html>