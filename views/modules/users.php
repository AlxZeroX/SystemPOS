<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Manage Users
      <small>Control Panel</small>
    </h1>

    <ol class="breadcrumb">
      <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Manage Users</li>
    </ol>

  </section>


  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddUser">
          Add User
        </button>
      </div>

      <div class="box-body">
        <table class="table table-bordered table-striped tables">
          <thead>
            <tr>

              <th>#</th>
              <th>Name</th>
              <th>User</th>
              <th>Photo</th>
              <th>Profile</th>
              <th>Status</th>
              <th>Last Login</th>
              <th>Action</th>

            </tr>
          </thead>

          <tbody>

            <tr>

              <td>1</td>
              <td>Admin User</td>
              <td>Admin</td>
              <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>Administrator</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2021-07-13 23:00:00</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>

            </tr>
            
            <tr>

              <td>1</td>
              <td>Admin User</td>
              <td>Admin</td>
              <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>Administrator</td>
              <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
              <td>2021-07-13 23:00:00</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>

            </tr>

            <tr>

              <td>1</td>
              <td>Admin User</td>
              <td>Admin</td>
              <td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>Administrator</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2021-07-13 23:00:00</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>

            </tr>

          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>



/*=====================================
=            Modal Add User            =
======================================*/

<div id="modalAddUser" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <div class="modal-header" style="background: #000000; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User</h4>
        </div>

        <div class="modal-body">

          <div class="box-body">

            <!-- INGRESO DE NOMBRE -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="newName" placeholder="Enter Name" required>

              </div>

            </div>


            <!-- INGRESO DE USUARIO -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" name="newUser" placeholder="Enter User" required>

              </div>

            </div>

            <!-- INGRESO DE USUARIO -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control input-lg" name="newPass" placeholder="Enter Password" required>

              </div>

            </div>

            <!-- INGRESO DE USUARIO -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="NewProfile" id="">

                  <option value="">Select Profile</option>
                  <option value="Administrator">Administrator</option>
                  <option value="Special">Special</option>
                  <option value="Seller">Seller</option>

                </select>

              </div>

            </div>

            <!-- INGRESO DE FOTO -->
            <div class="form-group">

              <div class="panel">Upload Pic</div>
              <input type="file" id="newPic" name="NewPic">
              <p class="help-block">maximum photo size 20MB</p>
              <img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Exit</button>
          <button type="submit" class="btn btn-primary">Save User</button>

        </div>
      </form>

    </div>
  </div>
</div>

