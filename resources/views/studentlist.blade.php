<div class="card mb-3">
  <img src="{{ asset('img/stud.jpg')}}" class="card-img-top" alt="..." height="400px">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find all the students here.</p>

    <table class="table table-striped table-hover">
        <thead>
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Specialty</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <td>{{ $student->cne }}</th>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->lastName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->specialty }}</td>
      <td>
            {{-- <a href="#" class="btn btn-sm btn-info">Show</a> --}}
            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ url('/getId/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
         </td>
    </tr>
    @endforeach
  </tbody>
    </table>


 </div>
</div>

