<div class="card mb-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSmE-J8TmAjLUJqkY3pkYZ_03zY-C-ArsF3Q&usqp=CAU" style="height:400px;" class="card-img-top"  alt="Portal logo">
                <div class="card-body">
                  <h5 class="card-title">Enter new student's information</h5>

                  <form action="{{url('store')}}" method="post">
                    @csrf
                      <div class="form-group">
                      <div class="mb-3">
                        <label for="cne" class="form-label">CNE</label>
                        <input type="text" class="form-control" name="cne" placeholder="Enter a CNE">
                      </input>
                      </div>

                      <div class="form-group">
                      <div class="mb-3">
                        <label for="first name" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Enter First Name">
                      </input>
                      </div>

                      <div class="form-group">
                      <div class="mb-3">
                        <label for="second name" class="form-label">Second Name</label>
                        <input type="text" class="form-control" name="secondName" placeholder="Enter Second Name">
                      </input>
                      </div>

                      <div class="form-group">
                      <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" placeholder="Enter Age">
                      </input>
                      </div>

                      <div class="form-group">
                      <div class="mb-3">
                        <label for="specialty" class="form-label">Specialty</label>
                        <input type="text" class="form-control" name="specialty" placeholder="Enter Specialty">
                      </input>
                      </div>
                      
                      <button class="btn btn-info" type="submit">Save</button>

                      <button class="btn btn-warning" type="reset">Reset</button>
                  </form>
                </div>
                </div>