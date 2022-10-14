<table class="table">
    <thead class="thead-light">
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
    @foreach ($students as $student)
    <tr>
        <th>{{ $student->cne }}</th>
        <th>{{ $student->firstname }}</th>
        <th>{{ $student->lastname }}</th>
        <th>{{ $student->age }}</th>
        <th>{{ $student->speciality }}</th>
        <td>
            <a href="#" class="btn btn-sm btn-info">Show</a>
            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Show</a>
            <a href="#" class="btn btn-sm btn-danger">Delete</a>
        </td>

    </tr>
    @endforeach

    </tbody>
  </table>
