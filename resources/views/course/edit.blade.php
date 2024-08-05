@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('course/' .$course->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$course->id}}" id="id" />
                <label>Name</label>
                <input type="text" name="name" id="name" value="{{$course->name}}" class="form-control"></br>
                <label>Syllabus</label>
                <input type="text" name="address" id="address" value="{{$course->syllabus}}" class="form-control"></br>
                <label>Duration</label>
                <input type="text" name="mobile" id="mobile" value="{{$course->duration}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@stop
