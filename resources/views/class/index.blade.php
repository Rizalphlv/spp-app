@extends('master.app')

@section('title' , 'Spp | Class')

@section('plugin')
   
@endsection

@section('content')
    <?php $a = 1;?>
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
                        <a href="" class="btn btn-warning">Update</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php $a++;?>
            @endforeach
          </tbody>
    </table>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#data').DataTable({
                'info' : false,
                'ordering' : false
            })
        });

    </script>
    
@endsection

