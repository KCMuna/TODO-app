<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<h2>Add Task</h2>

<form method="post" action="{{ route('store') }}">
  @csrf
  
  <label for="fname"> Task Name:</label><br>
  <input type="text" id="task" name="task"><br>
  <!-- <input type="checkbox" name="check">tick if completed -->


  <input type="submit" class="btn btn-primary" value="Submit">
</form>
</body>
</html>

