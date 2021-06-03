<!-- <html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
<div class="card mt-2">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <form method="post" action="{{route('providers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col col-md-4" >
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group col col-md-4">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control">
                    </div>
                </div>
                <div class="row">
                    
                    <div class="form-group col col-md-4">
                        <label>Image</label>
                        <input type="file" accept="image/*" onchange="loadFile(event)" name="image">
                    </div>
                    <div class="form-group col col-md-4">
                        <img id="output" style="height: 100px"/>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary save-data">Submit</button>
            </form>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Laravel Ajax Post Request Example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="container">
          <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
        <form id="ajaxform">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
            </div>

            <div class="form-group">
                <label>Mobile Number:</label>
                <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile" required="">
            </div>
            <div class="form-group">
                <strong>Message:</strong>
                <input type="text" name="message" class="form-control" placeholder="Enter Your Message" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-success save-data">Save</button>
            </div>
        </form>
    </div>
</body>
</html>

<script>
    // var loadFile = function(event) {
    //     var output = document.getElementById('output');
    //     output.src = URL.createObjectURL(event.target.files[0]);
    //     output.onload = function() {
    //         URL.revokeObjectURL(output.src) // free memory
    //     }
    // };

    $(".save-data").click(function(event){
      event.preventDefault();

      let name = $("input[name=name]").val();
      let email = $("input[name=email]").val();
      let mobile_number = $("input[name=mobile_number]").val();
      let message = $("input[name=message]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "/providers/create",
        type:"POST",
        data:{
          name:name,
          email:email,
          phone:mobile_number,
          message:message,
          _token: _token
        },
        success:function(response){
          console.log(response);
          if(response) {
            $('.success').text(response.success);
            $("#ajaxform")[0].reset();
          }
        },
       });
  });


</script>
