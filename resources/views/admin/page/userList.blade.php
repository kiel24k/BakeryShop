@extends('admin.index')
@section('admin')

    <a href="{{ route('content') }}" class="nav-link">
    <button class="btn btn-info">Home</button></a>

<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Place</th>
            <th>Contact Number</th>
            <th>Block</th>
            <th>Lot</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->middle_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->place }}</td>
            <td>{{ $user->contact_number }}</td>
            <td>{{ $user->block }}</td>
            <td>{{ $user->lot }}</td>

            <td>

                <button class="btn btn-info">Update</button>
               <a href="{{ route('user.delete',$user->id) }}">
                <button class="btn btn-danger">Delete</button>
               </a>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
{{ $users->links() }}
@endsection
