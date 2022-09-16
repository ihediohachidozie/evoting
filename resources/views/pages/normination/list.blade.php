@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Norminated Members</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                All Norminations

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Office</th>
                            <th scope="col">Norminated By</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Office</th>
                            <th scope="col" class="text-center">Norminated By</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($norminations as $normination)
                            <tr>
                                <th scope="row">{{ $normination->member->name }}</th>
                                <td>{{ strtoupper($normination->office->name) }}</td>
                                <td>@include('pages.normination.getname')</td>

                                <td class="text-center">
                                    <form action="{{ route('normination.destroy', $normination) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button class="btn" type="submit"><i class="fa-solid fa-trash-can"
                                                style="color:red"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
