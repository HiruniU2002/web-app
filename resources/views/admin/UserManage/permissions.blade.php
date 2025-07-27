@extends('admin.layouts.master')

@section('content')
    
      <h2 class="mb-4">Permission</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#permissionModal">
    Add New Permission
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
    <div class="modal fade" id="permissionModal" tabindex="-1" aria-labelledby="permissionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="permissionModalLabel">Add New Permission</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="/savePermission" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="permission_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="permission_name" name="permission_name" placeholder="Permission">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add New Permission</button>
            </div>
        </form>
        </div>
    </div>
    </div>

<div class="mt-5">
   <h4>View Permissions</h4>
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
            @foreach ($Permissions as $Permission)
                <tr>
                    <td>{{$Permission->id}}</td>
                    <td>{{$Permission->name}}</td>
                    <td><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Permission{{$Permission->id}}">Edit</button>
                    <a href="/deletePermission/{{$Permission->id}}" class="btn btn-danger">Delete</a></td>
                </tr>


 <!--modal-->
 <div class="modal fade" id="Permission{{$Permission->id}}" tabindex="-1" aria-labelledby="permissionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="permissionModalLabel">Edit Slide {{$Permission->name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
 <form action="/PermissionUpdate" method="POST" enctype="multipart/form-data">

            @csrf
    <input type="hidden" name="permission_id" value="{{$Permission->id}}">
        <div class="modal-body">
            <!--name-->
        <div class="mb-3">
            <label for="permission_name" class="form-label">name</label>
                <input type="text" class="form-control" id="permission_name" name="permission_name" value="{{$Permission->name}}">
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