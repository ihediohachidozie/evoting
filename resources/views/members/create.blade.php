@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Members</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Add Member
                <a class="btn btn-primary float-end" href="{{ route('members.index') }}">Back</a>
            </div>
            <div class="card-body">
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
                <form action="{{ route('members.store') }}" method="POST">
                    @csrf
                    @include('members.form')
                    <button class="w-100 btn btn-primary btn-lg mt-4" type="submit">Save</button>
                </form>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block my-4">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
