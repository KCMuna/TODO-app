<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>
<body>

<h2>Edit Info</h2>

<form method="post" action="{{ route('edit-action') }}">
  @csrf
  
  <input type="hidden" name="criteria" value="{{ $data->id }}">
  <label for="fname"> Task:</label><br>
  <input type="text" id="task" name="task" value="{{ $data->task }}"><br>
 
  <input type="submit" class="btn btn-primary" value="Update">
</form>
</body>
</html>

