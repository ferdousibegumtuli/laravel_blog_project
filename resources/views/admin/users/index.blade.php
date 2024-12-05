@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-block table-border-style">
    <div class="table-responsive">
      <table class="table table-hover">
        <div class="card-header">
          <h4>Users table</h4>
          <div style="text-align:right;">
            <button type="button" style="background: darkgreen; " class="btn btn-mat btn-info"
              data-toggle="modal" data-target="#addModal">Add</button>
          </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $key => $user)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              <button id="{{$user->id}}" type="button" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;"
                class="btn btn-primary btn-square editButton"
                data-toggle="modal" data-target="#editModal">
                <i class="icon-edit"></i>
              </button>

              <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;">
                  <i class="icon-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal fade" id="addModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">New User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="card-block">

          <form action="{{ route('users.store') }}" method="POST" id="userForm">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control form-control-normal" placeholder="Enter user name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control form-control-bold" placeholder="Enter your Email Id">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control form-control-capitalize" placeholder="Enter Password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" name="confirm_password" class="form-control form-control-capitalize" placeholder="Confirm Password">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" style="background: darkturquoise;" class="btn btn-default" form="userForm">Add user</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="card-block">
          <form method="POST" id="userEditForm">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" id="name" name="name" class="form-control form-control-normal">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" id="email" name="email" class="form-control form-control-bold">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control form-control-capitalize">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" name="confirm_password" class="form-control form-control-capitalize">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" style="background: darkturquoise;" form="userEditForm">Save Change</button>
      </div>
    </div>
  </div>
</div>
</div>

@if(session('success'))
<script>
  Swal.fire({
    title: 'Success!',
    text: "{{ session('success') }}",
    icon: 'success',
    confirmButtonText: 'OK'
  });
</script>
@endif

<script>
  $(document).ready(function() {
    $('.editButton').click(function() {
      var id = this.id;
      console.log(this);

      $.ajax({
        type: "GET",
        url: "/users/" + id + "/edit",
        success: function(response) {
          $('#name').val(response.name);
          $('#email').val(response.email);
          $('#userEditForm').attr('action', '/users/' + id);
        }
      });
    });
  });
</script>

@endsection