@extends('admin.layouts.master')

@section('content')
    
      <h2 class="mb-4">Role</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roleModal">
    Add New Role
    </button>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>  

    @endif

<!-- Modal -->
    <div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="roleModalLabel">Add New Role</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="/saveRole" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="role_name" class="form-label">Role Name</label>
                    <input type="text" class="form-control" id="role_name" name="role_name" placeholder="role">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add New Role</button>
            </div>
        </form>
        </div>
    </div>
    </div>

<div class="mt-5">
   <h4>View Roles</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th> 
                </tr>
            </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Role{{$role->id}}">Edit</button>
                    <a href="/permissionToRole/{{$role->id}}" class="btn btn-success">Add Permission to Role</a>
                    <a href="/deleteRole/{{$role->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>


 <!--modal-->
 <div class="modal fade" id="Role{{$role->id}}" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="roleModalLabel">Edit Role {{$role->name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
 <form action="/RoleUpdate" method="POST" enctype="multipart/form-data">

            @csrf
    <input type="hidden" name="role_id" value="{{$role->id}}">
        <div class="modal-body">

            <!--name-->
        <div class="mb-3">
            <label for="role_name" class="form-label">name</label>
                <input type="text" class="form-control" id="role_name" name="role_name" value="{{$role->name}}">
        </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        </form>

    </div>
</div>
</div> 
<!--end modal-->

        @endforeach

        </tbody>
    </table>
</div>
</div> 
@endsection