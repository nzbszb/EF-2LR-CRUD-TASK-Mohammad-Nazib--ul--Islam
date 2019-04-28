@extends('layouts.app')
@section('title')
Admin Panel
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
            @include('posts.form_master')
            {{ form::close() }}
        </div>
    </div>
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>Blogs</h2>
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
      <th with="80px">No</th>
      <th>Title</th>
      <th>Description</th>
      <th with="140px" class="text-center">
          Action
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->title }}</td>
        <td>{{ $value->body }}</td>
        <td class="text-center">
          <a class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
@endsection
