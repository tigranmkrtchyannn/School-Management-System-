@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('teacher/' .$teacher->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$teacher->id}}" id="id" />
                <label>Name</label>
                <input type="text" name="name" id="name" value="{{$teacher->name}}" class="form-control"></br>
                <label>Address</label>
                <input type="text" name="address" id="address" value="{{$teacher->address}}" class="form-control"></br>
                <label>Mobile</label>
                <input type="text" name="mobile" id="mobile" value="{{$teacher->mobile}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@stop
