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
      <th width = "300px">classId</th>
      <th>className</th>
      <th width = "180px">Action</th>
    </tr>

    @foreach ($classentrys as $classentry)
      <tr>
        <td><b>{{++$i}}.<b/></td>
        <td>{{$classentry->classId}}</td>
        <td>{{$classentry->className}}</td>
        <td>
          <form class="" action="{{ route('classentry.destroy', $classentry->id) }}" method="post">
            <a class="btn btn-sm btn-success" href="{{ route('classentry.show', $classentry->id) }}">Show</a>
            <a class="btn btn-sm btn-warning" href="{{ route('classentry.edit', $classentry->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
  {!! $classentrys->links() !!}
</div>
@endsection
