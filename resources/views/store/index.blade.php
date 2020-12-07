<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
<body>



<div class="container">
  <div class="row justify-content-md-center">
    <div class="card text-center col-md-8">
      <div class="card-header">
        store
      </div>
      <div class="card-body ">
        {{-- <h5 class="card-title">Special title treatment</h5> --}}
        <form action="{{url('store')}}" method="post">
          {{ csrf_field() }}
    
          <div class="form-group">
            <label for="storeID">Store ID:</label>
            <input type="text" class="form-control" id="storeID" name="storeID">
          </div>
          <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>