@extends('admin.index')
@section('admin')
<div class="update">
<div class="update-form">
    <form action="{{ route('update.submit') }}" method="POST">
        @csrf
        <input type="text" name="id" value="{{ $users->id }}">
        <input type="text" name="firstName" placeholder="First Name" class="form-control" value="{{ $users->first_name }}">
        <input type="text" name="middleName" placeholder="Middle Name" class="form-control"  value="{{ $users->middle_name }}">
        <input type="text" name="lastName"  placeholder="Last Name" class="form-control"  value="{{ $users->last_name }}">
       <label for="">Place</label>
        <input type="text" name="contactNumber"  placeholder="Contact Number" class="form-control"  value="{{ $users->contact_number }}">
        <input type="text" name="block"  placeholder="Block" class="form-control"  value="{{ $users->block }}">
        <input type="text" name="lot"  placeholder="Lot" class="form-control"  value="{{ $users->lot }}">
        <select name="place" id="place">
            <option value="Solar Homes">Solar Homes</option>
            <option value="City Homes">City Homes</option>
           </select>
        <button class="btn btn-success">Update</button>
    </form>
</div>
</div>

@endsection
