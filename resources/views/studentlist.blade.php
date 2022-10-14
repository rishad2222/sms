<div class="card mb-3">
    <img class="card-img-top" src="https://www.missingkids.org/content/ncmec/en/education/_jcr_content/mainpar/container_1757940280/null/twovariantscolumn/par_1/image.img.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">List of Student</h5>
      <p class="card-text">You can find here all the Information about Students in the system </p>
    </div>

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

                <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>

            </td>

        </tr>
        @endforeach

        </tbody>
      </table>
  </div>




