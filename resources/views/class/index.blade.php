@extends('master.app')

@section('title' , 'Spp | Class')




@section('content')
    @extends('master.nav')

    @extends('class.form-add')
    @php $a = 1; @endphp 
    <div class="card" style="margin-top: 10px; height: 100%;">
        <div class="card-body">
            <table id="data" class="table">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Kelas</th>
                      <th>Jurusan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
        
                  <tbody>
                    @foreach ($class as $class)
                        <tr>
                            <td><?=$a?></td>
                            <td>{{$class->class_name}}</td>
                            <td>{{$class->major}}</td>
                            <td>
                                <a href="{{route('class.update', $class->id)}}" class="btn btn-warning">Update</a>
                                <a href="{{route('class.delete', $class->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @php $a++; @endphp 
                    @endforeach
                  </tbody>
            </table>
            <button class="btn btn-primary" id="add" style="margin-bottom: 10px; width: 100px;" data-target="#modal-add" data-toggle="modal">Add</button>
        </div>
      </div>
      
   
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#data').DataTable({
                'info' : false,
                'ordering' : false
            });
            $('#add').modal('show');
            
        });

    </script>
@endsection

