<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Student management system</title>
    </head>
    <body>
        @include("navbar")

        <div class="row header-container mt-4">
            <div class="header d-flex justify-content-center">
                <h1>Student management system</h1>
            </div>
        </div>

        @if($layout == "index")
            <div class="container-fluid mt-4">
                <div class="container-fluid mt-4">
                    <div class="row d-flex justify-content-center">
                        <section class="col-md-7">
                            @include("studentslist")
                        </section>
                    </div>
                    <!-- <section class="col-md-5"></section> -->
                </div>
            </div>
        @elseif($layout == "create")
            <div class="container-fluid mt-4">
                <div class="row">
                    <section class="col-md-7">
                        @include("studentslist")
                    </section>
                    <section class="col-md-5">
                        <div class="card mb-3">
                            <img src="https://cdn.pixabay.com/photo/2015/06/06/07/37/road-sign-799141_960_720.jpg" class="card-img-top" alt="add">
                            <div class="card-body">
                                <h5 class="card-title">Register</h5>
                                <p class="card-text">Enter the informations of the new student</p>
                                <form action="{{ url('/store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cne" class="form-label">CNE</label>
                                        <input type="text" name="cne" id="cne" class="form-control" placeholder="Enter CNE" required>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter the first name" required>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter the last name" required>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="age" name="age" id="age" class="form-control" placeholder="Enter the age" required>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="speciality" class="form-label">Speciality</label>
                                        <input type="text" name="speciality" id="speciality" class="form-control" placeholder="Enter the speciality" required>
                                    </div><br>
                                    <div class="form-group">
                                        <input type="submit" value="Save" class="btn btn-primary" name="save">
                                        <input type="reset" value="Reset" class="btn btn-danger" name="reset">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        @elseif($layout == "show")
            <div class="container-fluid mt-4">
                <div class="row">
                    <section class="col-md-7">
                        @include("studentslist")
                    </section>
                    <section class="col-md-5"></section>
                </div>
            </div>
        @elseif($layout == "edit")
            <div class="container-fluid mt-4">
                <div class="row">
                    <section class="col-md-7">
                        @include("studentslist")
                    </section>
                    <section class="col-md-5">
                        <div class="card mb-3">
                            <img src="https://cdn.pixabay.com/photo/2015/05/31/15/14/woman-792162_960_720.jpg" class="card-img-top" alt="edit">
                            <div class="card-body">
                                <h5 class="card-title">Edit</h5>
                                <p class="card-text">Update the informations of student</p>
                                <form action="{{ url('/update/' . $student->id) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cne" class="form-label">CNE</label>
                                        <input type="text" value="{{ $student->cne }}" name="cne" id="cne" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" value="{{ $student->firstname }}" name="firstname" id="firstname" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" value="{{ $student->lastname }}" name="lastname" id="lastname" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="age" value="{{ $student->age }}" name="age" id="age" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="speciality" class="form-label">Speciality</label>
                                        <input type="text" value="{{ $student->speciality }}" name="speciality" id="speciality" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-info" name="update">
                                        <input type="reset" value="Reset" class="btn btn-danger" name="reset">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        @endif

        <footer></footer>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>