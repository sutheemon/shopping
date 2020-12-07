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
          <div class="card text-center col-md-10">
            <div class="card-header">
                <h5 class="card-title">ชื่อร้านค้า: {{ $store[0]->store_name }}</h5>
            </div>
            <div class="card-body ">
              {{-- <h5 class="card-title">ชื่อร้านค้า: {{ $store[0]->store_name }}</h5> --}}
              <div class="row">
                <p>ชื่อเจ้าของร้าน: {{ $store[0]->owner_name }}</p>
            </div>
                <div class="row">
                <p>เบอร์โทรศัพท์: {{ $store[0]->tel }}</p>
              </div>
              <div class="row">
                <p>ที่อยู่: {{ $store[0]->address }}</p>
            </div>
            @php
                $TDress = "T001";
                $Tshirt = "T002";
            @endphp
            <div class="row">
                <form method="get" action="{{url('store/type/'. $TDress .'/'. $store[0]->store_id)}}">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary mr-2">Dress</button>
                </form>
                <form method="post" action="{{url('store/type/'.$Tshirt)}}">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">T-shirt</button>
                </form>
            </div>
            <br>
            <div class="row">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $sum = 1 ;
                @endphp
                  @foreach($products as $item) 
                  <tr>
                        <td>{{ $sum++ }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>
                            <form method="post" action="{{url('store/delete/'. $item->product_id)}}">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>