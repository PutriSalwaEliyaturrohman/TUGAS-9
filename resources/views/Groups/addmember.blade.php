@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<form action ="/groups/addmember/{{$group->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name Friends</label>
    <select class="form-select" aria-label="Default select example" name="friend_id">
      <option selected>choose a friend to add to the groups</option>
      @foreach ($friend as $f)
        <option value="{{$f->id}}">{{$f->nama}}</option>
      @endforeach
      
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection