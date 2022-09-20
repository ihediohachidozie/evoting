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
            <form method="POST" action="{{ route('votes.store') }}">
                @csrf
                <input type="hidden" name="voter_id" value="{{$voter_id}}">
                @foreach ($candidates as $candidate)
                    @foreach ($offices as $office)
                        @if ($candidate->office_id == $office->id)
                            <div class="text-center">
                                <h3>{{ strtoupper($office->name) }}</h3>
                                <hr class="my-4">
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $candidate->image) }}" class="card-img-top"
                                            alt="..." width="440" height="250">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="{{ str_replace(' ', '', $candidate->office_id) }}"
                                                    id="{{ str_replace(' ', '', $candidate->office_id) }}"
                                                    value="{{ $candidate->member->id }}">
                                                <label class="form-check-label" for="{{ $candidate->office->name }}">
                                                    {{ $candidate->member->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
                <button class="w-100 btn btn-primary btn-lg my-4" type="submit">Vote</button>
            </form>
        </main>
        @include('pages.partials.footer')
    </div>

</body>

</html>
