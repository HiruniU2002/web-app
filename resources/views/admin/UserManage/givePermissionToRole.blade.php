@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid p-4">
      <h4 class="mb-3">Assign Permissions to Role: {{ $role->name }}</h4>

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
</div>
<div class="container">
    <div class="card-body">
        <form action="{{ url('givePermissionToRole/' . $role->id) }}" method="POST">
            @csrf
            @method('PUT')   
            
            <div class="row">
                @foreach ($permissions as $permission)
                <div class="col-md-3">
                    <div class="form-check">
                        <input type="checkbox" {{in_array($permission->id, $rolePermissions)? 'checked' : ''}} class="form-check-input" name="permissions[]" value="{{$permission->name}}" id="defaultCheck1">
                        <label for="defaultCheck1" class="form-check-label">
                            {{$permission->name}}
                        </label>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection