@extends('layouts.master')


@section('title')
Registered Roles
@endsection



@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Room</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('rooms.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room ID:</strong>
                <input type="text" name="room_id" class="form-control" placeholder="Room ID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Building</strong>
                <input type="text" name="building_name" class="form-control" placeholder="Building Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Location:</strong>

            <div class="form-group">

                <input type="text" name="location" class="form-control" placeholder="Link of Location">
            </div>

        {{-- <select class="browser-default custom-select form-control" name="location">

            <option selected>select location</option>
            @foreach ($rooms as $row)
            <option value="{{$row->location}}">{{$row->building_name}}</option>
            @endforeach
        </select> --}}

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection

@section('scripts')


@endsection
