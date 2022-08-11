<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <br>
        <br>
        <h1>Send Email</h1>
        <form action="{{ route('emailcontact') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
                <br>
                <div class="col-md-8">
                    <label for="">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success" value="Submit">Submit</button>
            {{-- <input type="submit" value="Submit"> --}}
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>