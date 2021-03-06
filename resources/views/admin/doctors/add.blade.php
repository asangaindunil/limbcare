@extends('admin.layouts.admin')

@section('title',"Add a Doctor", "Doctor")

@section('content')
    <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <form action="cal" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>

            </div>
            <div class="form-group">
                <label for="inputAddress">Doctor Name</label>
                <input type="text" name="name" class="form-control" id="inputAddress" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="inputAddress">Hospital</label>
                <input type="text" name="hospital" class="form-control" id="inputAddress" value="{{ old('hospital') }}" >
            </div>
            <div class="form-group">
                <label for="inputAddress">E-mail</label>
                <input type="text" name="email" class="form-control" id="inputAddress" value="{{ old('email') }}" >
            </div>
            <div class="form-group">
                <label for="inputAddress">Password</label>
                <input type="password" name="password" class="form-control" id="inputAddress"  >
            </div>
            <div class="form-group">
                <label for="inputAddress">Comfirm Password</label>
                <input type="password" name="comfirm-password" class="form-control" id="inputAddress" value="{{ old('username') }}" >
            </div>
            <div class="form-group">
                <label for="inputAddress">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="inputAddress" value="{{ old('mobile') }}" >
            </div>
            <div class="form-group">
                <label for="it_pic">Profile Photo</label>
                <input type="file" class="form-control" name="doc_pic" id="doc_pic" >
            </div>





            <button type="" class="btn btn-primary">Clear</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection