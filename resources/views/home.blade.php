@extends('layouts.home')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Total Members</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="text-white stretched-link" href="{{ route('members.index') }}">{{ $membership }}</a>
                        <div class="text-white"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Members Norminated</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="text-white stretched-link" href="#">{{ $norminated_members }}</a>
                        <div class="text-white"><i class="fas fa-user"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Total Norminations</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="text-white stretched-link" href="#">{{ $total_norminations }}</a>
                        <div class="text-white"><i class="fas fa-user-plus"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Members Norminations
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Candidates Norminated
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Office</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>

                            <th>Office</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($candidates as $c)
                            <tr>
                                <td>{{ $c->member->name }}</td>
                                <td>{{ strtoupper($c->office->name) }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
