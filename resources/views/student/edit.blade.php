@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('student/' .$student->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
                <label>Name</label>
                <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
                <label>Address</label>
                <input type="text" name="address" id="address" value="{{$student->address}}" class="form-control"></br>
                <label>Mobile</label>
                <input type="text" name="mobile" id="mobile" value="{{$student->mobile}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@stop
