@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Members</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Members
            <a class="btn btn-primary float-end" href="{{route('members.create')}}">Add Member</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">VEN</th>
                        <th class="text-center">CILT No</th>
                        <th class="text-center">Membership Status</th>
                        <th class="text-center">Vote Eligibility</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>VEN</th>
                        <th>CILT No</th>
                        <th>Membership Status</th>
                        <th>Vote Eligibility</th>
                        <th colspan="2">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($members as $member)
                    <tr>
                        <td>{{$member->name}}</td>
                        <td>{{$member->email}}</td>
                        <td class="text-center">{{$member->phone}}</td>
                        <td class="text-center">{{$member->pin}}</td>
                        <td class="text-center">{{$member->ciltno}}</td>
                        <td class="text-center">{{$member->membershipstatus}}</td>
                        <td class="text-center">{{$member->canvote == 1 ? 'Yes' : 'No'}}</td>
                        <td class="d-flex align-items-center justify-content-between px-4">
                            <a href="{{route('members.edit', $member)}}"><i class="fa-solid fa-pen-to-square "></i></a>
                            <form action="{{route('members.destroy', $member)}}" method="post">
                                @csrf
                                @method('delete')

                                <button class="btn" type="submit"><i class="fa-solid fa-trash-can" style="color:red"></i></button>
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
