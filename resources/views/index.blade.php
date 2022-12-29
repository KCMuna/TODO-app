<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Practise Table</title>
   
</head>
<body>
    <h2>My Todo List</h2>
<table class="table table-striped">
        <tr>
          <th>Status</th>
          <th>Task</th> 
          <th>Action</th>
        </tr>
        
        @foreach ($data as $key=>$i )
        <tr>
          <td>{{$i->completed}}</td>

          @if ($i->completed)
          <td><span style="text-decoration:line-through"> {{ $i->task  }}</span></td>
            @else
            <td>{{ $i->task }}</td>
          @endif          
          <td>
            <a class="btn btn-primary" href="{{ route('edit').'/'.$i->id }}">Edit</a>
            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the data?')" href="{{ route('delete').'/'.$i->id }}">Delete</a>
            
            @if ($i->completed)

            <a class="btn btn-success" href="{{ asset('/' . $i->id . '/completed') }}">Completed</a>
            @else
            <a class="btn btn-secondary" href="{{ asset('/' . $i->id . '/completed') }}">Complete</a>
          @endif
        </td>
        </tr>
        @endforeach
      </table>
      <button class="btn btn-primary"><a style="text-decoration:none; color:white" href="/form">Add Task</a></button>
</body>
</html>