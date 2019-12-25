@extends('layouts.master')


@section('title')
Registered Room
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Room ID</th>
            <th>Building Name</th>
            <th>Location</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$room->room_id}}</td>
            <td>{{ $room->building_name }}</td>
            <td><a class="btn btn-warning" href="{{ $room->location }}">Maps</a></td>


            <td>
                    <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                        <!-- Basic dropdown -->
                    <button class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Actions</button>

                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('rooms.show',$room->id) }}">Show</a>
                      <a class="dropdown-item" href="{{ route('rooms.edit',$room->id) }}">Edit</a>

                    </div>
                    <!-- Basic dropdown -->


                    {{-- <a class="btn btn-info" href="{{ route('rooms.show',$room->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a> --}}

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $rooms->links() !!}


@endsection

@section('scripts')

@endsection
