@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Election Results</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                All Elected Candidates

            </div>
            <div class="card-body">
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Office</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col" class="text-center">Votes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr>
                            <th scope="row">{{$members[$d->Member]}}</th>
                            <td>{{strtoupper($offices[$d->Office])}}</td>
                            <td class="w-25 text-center">
                                @if (isset($candidates[$d->Member]->image))
                                      <a href="{{asset('storage/'.$candidates[$d->Member]->image ?? '#')}}" target="blank">

                                    <img src="{{asset('storage/'.$candidates[$d->Member]->image ?? 'NA')}}" class="img-fluid img-thumbnail" style="width: 25%"  alt="Sheep">
                                </a>
                                @else

                                {{$candidates[$d->Member]->image ?? 'NA'}}
                                @endif
                               {{--  <a href="{{asset('storage/'.$candidates[$d->Member]->image ?? '#')}}" target="blank">

                                    <img src="{{asset('storage/'.$candidates[$d->Member]->image ?? 'NA')}}" class="img-fluid img-thumbnail" style="width: 25%"  alt="Sheep">
                                </a> --}}



                            </td>
                            <td class="text-center">{{$d->Votes}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
