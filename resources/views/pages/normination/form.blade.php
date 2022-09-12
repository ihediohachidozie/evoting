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

                <h2>Members' Normination</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required
                    form group has a validation state that can be triggered by attempting to submit the form without
                    completing it.</p>
            </div>
            <form method="POST" accept="normination.store">
                @csrf
                <input type="hidden" name="norminaing_id" value="{{$id}}">

                <div class="row">
                    <div class="col">
                        <label for="member" class="form-label">Member' Name</label>
                        <select class="form-select" id="member" name="candidate_id" required>
                            <option value="">Choose...</option>
                            @foreach ($members as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="office" class="form-label">Office</label>
                        <select class="form-select" id="office" name="office_id" required>
                            <option value="">Choose...</option>
                            @foreach ($offices as $key => $value)
                                <option value="{{ $key }}">{{ strtoupper($value) }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <button class="w-100 btn btn-primary btn-lg my-4" type="submit">Norminate</button>
            </form>
            <hr class="my-4">
            <h2 class="display-6 text-center my-4">Compare plans</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Candidate</th>
                            <th style="width: 22%;">Office</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($norminations as $normination)

                        <tr>
                            <td>
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg>
                            </td>
                            <td>
                                {{$normination->member->name}}
                            </td>
                            <td>
                                {{$normination->office->name}}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </main>

        @include('pages.partials.footer')
    </div>



</body>

</html>
