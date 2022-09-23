<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom ">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="{{ asset('assets/img/cilt-logo.png') }}" width=25% height=15%>

            <h6 class="px-2">CRS Branch</h6>
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('accreditation.form')}}">Vote</a>

            <a class="py-2 text-dark text-decoration-none" href="{{route('statistics')}}">Election Statistics</a>
        </nav>
    </div>


</header>
