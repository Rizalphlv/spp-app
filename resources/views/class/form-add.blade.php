@extends('master.modal')

@section('id-modal','modal-add')

@section('modal-title','Add Class')

@section('url-route')
    {{route('class.store')}}
@endsection



@section('form')
    <div class="form-group">
        <label for="class">Kelas</label>
        <input class="form-control" type="text" name="class" id="class">
    </div>

    <div class="form-group">
        <label for="major">Jurusan</label>
        <input class="form-control" type="text" name="major" id="major">
    </div>
@endsection

@section('action','Add')
    

