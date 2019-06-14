@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10">
      <h3>
        List Class Entry
      </h3>
    </div>
    <div class="col-sm-2">
      <a class="btn btn-sm btn-success" href="{{ route('classentry.create') }}">Create new Class Entry</a>
    </div>
  </div>

  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{$message}}</p>
  </div>
  @endif

  <table class="table table-hover table-sm">
    <tr>
      <th width = "50px">bug<b>No.</b></th>
      <th width = "300px">Test Name Andre</th>
      <th>Testing, Not Sure</th>
      <th width = "180px">Action</th>
    </tr>

  </table>
</div>
