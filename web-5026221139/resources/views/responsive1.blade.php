<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <div class="container">

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Jumbotron Example</h1>
        <p>Lorem ipsum...</p>
      </div>
      <div class="container-fluid alert alert-warning">
        <h1 > my first page </h1>

      </div>

      <div class="alert alert-success">
        <p>This part is inside a .container class.</p>
      </div>
      <div class="alert alert-danger">
        <p>The .container class provides a responsive fixed width container.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 border border-1">kiri

        </div>
        <div class="col-lg-4 border border-1">nengah

        </div>
        <div class="col-lg-4 border border-1 ">kanan

        </div>

      </div>
      <div class="row">
        <div class="col-lg-9 border border-1">
          ini isinya 9

        </div>
        <di class="col-lg-3 border border-1">
          ini isnya 3
        </div>
      <div class="row">
          <div class="col-lg-12">
            <button type ="button "class="btn btn-primary btn-danger"> <a href="its.ac.id"> bahaya</a></button>
            <a href="https://yahoo.com" class="btn btn-primary">Go to Example</a>
          </div>

      </div>


      </div>
      <div class="d-flex p-3 bg-secondary text-white">
        <div class="p-2 bg-info">Flex item 1</div>
        <div class="p-2 bg-warning">Flex item 2</div>
        <div class="p-2 bg-primary">Flex item 3</div>
      </div>



    </div>
    <div> <a href="{{ route('UTS') }}">Lihat Web ETS</a> </div>
  </body>
</html>
