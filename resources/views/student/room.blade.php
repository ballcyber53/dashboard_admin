@extends('layouts.student')


@section('title')
Rooms
@endsection


@section('content')


<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Rooms & Maps</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>#</th>
                    <th>Room Number</th>
                    <th>Building</th>
                    <th>Maps</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Dakota Rice</td>
                      <td>Niger</td>
                      <td>Oud-Turnhout</td>
                      <td>$36,738</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>




@endsection

@section('scripts')

@endsection
