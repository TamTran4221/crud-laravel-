@extends('app')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$student->name}}">
               
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="" value="0" {{$student->gender==0 ? 'checked': ''}}> Nữ
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="" value="1" {{$student->gender==1 ? 'checked': ''}}> Nam
                        </label>
                    </div>
                </div>
 
                <button type="submit" class="btn btn-primary">UPdate</button>
            </form>
            </div>
        </div>
    </div>
@stop
