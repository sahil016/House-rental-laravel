<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Rules</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> Rules List</h2>
  @foreach($data as $data)
<div class="container p-2  border">

  <p>{{$data->id}}) {{$data->Rules}}</p>
</div>

@endforeach
<hr>
  <form class="form-horizontal" action="/manage-rule-store" method="post">
    @csrf
    <div class="form-group">
      <h1>Add rule</h1>
      <label class="control-label col-sm-2" for="">Add Rules:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" placeholder="Enter rule   " name="rules">
      </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
