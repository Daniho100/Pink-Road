<div class="card mb-3">
  <img src="https://cdn.zeebiz.com/sites/default/files/2016/07/30/4841-educational-pixabay.jpg" class="card-img-top" style="height:400px;" alt="Portal logo">
  <div class="card-body">
    <h5 class="card-title">Students List</h5>
    <p class="card-text">You can find all student's exam registration information in the system here.</p>

    <table class="table table-success table-striped">
      <thead>
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Specialty</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstname}}</td>
      <td>{{$student->secondname}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->specialty}}</td>
      <td>
          <a href="{{url('show/'.$student->id)}}" class='btn btn-sm btn-info'>Show</a>
          <a href="{{url('edit/'.$student->id)}}" class='btn btn-sm btn-warning'>Edit</a>
          <a href="{{url('delete/'.$student->id)}}" class='btn btn-sm btn-danger'>Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>

  </table>

  </div>
</div>
 
 
 