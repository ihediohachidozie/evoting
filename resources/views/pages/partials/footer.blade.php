<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="{{asset('assets\img\cilt-favicon.png')}}"
                alt="" width="24" height="19">
            <small class="d-block mb-3 text-muted">&copy; {{ date('Y') }}</small>
        </div>
        <div class="col-6 col-md">
            <h5>Admin</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
{{--             <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a>
                </li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource
                        name</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another
                        resource</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final
                        resource</a></li>
            </ul> --}}
        </div>
        <div class="col-6 col-md">
{{--             <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a>
                </li>
                <li class="mb-1"><a class="link-secondary text-decoration-none"
                        href="#">Locations</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a>
                </li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a>
                </li>
            </ul> --}}
        </div>
    </div>
</footer>
