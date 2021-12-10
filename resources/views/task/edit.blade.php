@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ url("/task/{$data->id}") }}" method="POST">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input name="user" type="text" class="form-control" value="{{ $data->user }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea name="task" class="form-control" id="" rows="3">{{ $data->task }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection