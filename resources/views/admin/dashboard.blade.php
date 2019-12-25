@extends('layouts.master')


@section('title')
Dashboard
@endsection


@section('content')

<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Users Details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                      <th>#</th>
                      <th>E-Passport</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>User Type</th>
                  </thead>
                  <tbody>
                        @foreach ($users as $row)

                    <tr>
                      <td>{{$row->id}}</td>
                      <td>{{ $row->std_id }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->phone }}</td>
                      <td>{{ $row->email }}</td>
                      <td>{{ $row->usertype }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Rooms Details</h4>
                </div>
                <div class="card-body">

                            {{-- @foreach ($users as $row)
                            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">

                            <h5 class="card-title">
                       {{$row->id}}
                         {{ $row->name }}</h5>
                         <p class="card-text">  {{ $row->phone }}</p>
                          {{ $row->email }}
                          {{ $row->usertype }}

                  </div> --}}


                  




                  </div>
                </div>
              </div>
            </div>

        </div>

      @endsection

@section('scripts')

@endsection
