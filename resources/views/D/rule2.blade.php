<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/css/style.css">   
  <title>House Rental</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container p-5 my-4 bg-primary text-white text-center">
  <h1>House Rules</h1>
  <p></p>
</div>

@foreach($data as $data)
<div class="container p-2  border">

  <p>{{$data->id}}) {{$data->Rules}}</p>
</div>

@endforeach

<button onclick="history.back()" class=button >Go Back</button>

</body>
</html>
