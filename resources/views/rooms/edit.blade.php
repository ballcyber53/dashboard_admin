@extends('layouts.app')


@section('title')
Registered Roles
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Room</h2>
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

<form action="{{ route('rooms.update',$room->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room ID:</strong>
                    <input type="text" name="room_id" value="{{ $room->room_id }}" class="form-control" placeholder="Room ID">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Building</strong>
                    <input type="text" name="building_name" value="{{ $room->building_name }}" class="form-control" placeholder="Building Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location:</strong>
                    <input type="text" name="location" value="{{ $room->location }}" class="form-control" placeholder="Link location">
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div></div>
    </div>

</form>

@endsection

@section('scripts')


@endsection
