@extends("app")

@section("content")

    {{--menampilkan error validasi--}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <h3>Form Person</h3>
    <form method="POST" action="/person/addProcess">
        {{csrf_field() }}
        <div class="form-group">
            <label for="person_name">Nama</label>
            <input type="text" class="form-control" name="person_name" placeholder="Input Nama Anda">
        </div>
        <div class="form-group">
            <label for="person_email">Email</label>
            <input type="email" class="form-control" name="person_name" placeholder="Input Email Anda">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
@stop
