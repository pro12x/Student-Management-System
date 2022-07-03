<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2021/10/06/05/17/learn-6684425_960_720.jpg" class="card-img-top" alt="list">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informations about students in the system</p>

        <table class="table table-striped">
            <thead class="table bg-dark text-white">
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{ $student->cne }}</th>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->age}}</td>
                        <td>{{ $student->speciality }}</td>
                        <th>
                            @if ($layout == "index")
                                <a href="#" class="btn btn-sm btn-info">Show</a>
                                <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ url('/destroy/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            @elseif ($layout == "edit")
                                <a href="#" class="btn btn-sm btn-info">Show</a>
                                <a href="{{ url('/destroy/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            @elseif ($layout == "create")
                                <a href="#" class="btn btn-sm btn-info">Show</a>
                                <!-- <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a> -->
                                <a href="{{ url('/destroy/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a> 
                            @endif
                            <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
                            <!-- <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-danger">Delete</a> -->
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

