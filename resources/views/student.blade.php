<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <title>Student Management System</title>
  </head>
  <body>
    @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>


    @if ($layout == 'index')
        <div class="container-fluid mt-4">
           <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5"></section>
            </div>
        </div>
    @elseif ($layout == 'create')
        <div class="container-fluid mt-4">
         <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                <div class="card-body">
                     <img src="{{ asset('img/studs.jpg')}}" class="card-img-top" alt="..." height="400px">
                    <h5 class="card-title">Create Students</h5>
                    <form action="{{ url('/store')}}" method="POST">
                     @csrf
                      <div class="form-group">
                            <label>CNE</label>
                            <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
                      </div>
                       <div class="form-group">
                            <label>First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                       </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input name="lastName" type="text" class="form-control" placeholder="Enter Last Name">
                       </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input name="age" type="number" class="form-control" placeholder="Enter Age">
                       </div>
                        <div class="form-group">
                            <label>Specialty</label>
                            <input name="specialty" type="text" class="form-control" placeholder="Enter Specialty">
                       </div>
                        <div class="form-group mt-3">
                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">
                        </div>
                </form>
                </div>
                </div>


            </section>
         </div>
        </div>
    @elseif ($layout == 'show')
          <div class="container-fluid mt-4">
         <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5"></section>
         </div>
        </div>
    @elseif ($layout == 'edit')
       <div class="container-fluid mt-4">
          <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5">
                  <div class="card mb-3">
                 <div class="card-body">
                     <img src="{{ asset('img/studs.jpg')}}" class="card-img-top" alt="..." height="400px">
                    <h5 class="card-title">Update Students</h5>
                <form action="{{ url('/update/'.$stud->id)}}" method="POST">
                     @csrf
                      <div class="form-group">
                            <label>CNE</label>
                            <input value="{{$stud->cne}}" name="cne" type="text" class="form-control" placeholder="Enter CNE">
                      </div>
                       <div class="form-group">
                            <label>First Name</label>
                            <input value="{{$stud->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                       </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input value="{{$stud->lastName}}" name="lastName" type="text" class="form-control" placeholder="Enter Last Name">
                       </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input value="{{$stud->age}}" name="age" type="number" class="form-control" placeholder="Enter Age">
                       </div>
                        <div class="form-group">
                            <label>Specialty</label>
                            <input value="{{$stud->specialty}}" name="specialty" type="text" class="form-control" placeholder="Enter Specialty">
                       </div>
                        <div class="form-group mt-3">
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                        </div>
                </form>
                 </div>
                 </div>
            </section>
          </div>
       </div>
    @endif



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
