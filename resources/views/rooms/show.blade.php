@extends('layouts.master')


@section('title')
Registered Room
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Room</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Room ID:</strong>
            {{ $room->room_id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Building Name:</strong>
            {{ $room->building_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            {{ $room->location }}
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
