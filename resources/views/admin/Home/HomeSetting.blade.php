@extends('admin.layouts.master')

@section('content')
 
      <h2 class="mb-4">HomeSetting</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add new slide
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


 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add new Setting</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    <form method="POST" action="/savehome" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <textarea class="form-control" id="heading" name="heading" rows="3" placeholder="Enter top heading"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="sub_heading" class="form-label">Sub Heading</label>
                <textarea class="form-control" id="sub_heading" name="sub_heading" rows="5" placeholder="Enter Sub heading"></textarea>
            </div>


            <div class="mb-3">
                <label for="imageUpload" class="form-label">Image Upload</label>
                <input type="file" class="form-control" id="image_upload" name="image_upload">
            </div>

            <div class="mb-3">
                <label for="top_heading" class="form-label">Top Heading</label>
                <input type="text" class="form-control" id="top_heading" name="top_heading" placeholder="Enter Top Heading">
            </div>

            <div class="mb-3">
                <label for="bottom_heading" class="form-label">Bottom Heading</label>
                <input type="text" class="form-control" id="bottom_heading" name="bottom_heading" placeholder="Enter Bottom Heading">
            </div>
        </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>

    </form>

        </div>
    </div>
</div>

<div class="mt-5">
    <h4>Home Page Carousel Slides</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Heading</th>
                    <th>Sub Heading</th>
                    <th>Image</th>
                    <th>Top sub Heading</th>
                    <th>Bottom Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($HomeSettings as $HomeSetting)
                <tr>
                    <td>{{$HomeSetting->heading}}</td>
                    <td>{{$HomeSetting->sub_heading}}</td>
                    <td><img width="100" src="{{asset('storage/'.$HomeSetting->image_link)}}" alt=""></td>
                    <td>{{$HomeSetting->top_heading}}</td>
                    <td>{{$HomeSetting->bottom_heading}}</td>
                    <td><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#HomeSetting{{$HomeSetting->id}}">Edit</button>

        <a href="{{ route('deletehomesetting.delete', $HomeSetting->id) }}" class="btn btn-danger">Delete</a>
            </td>
                </tr>


<!-- modal-->
<div class="modal fade" id="HomeSetting{{$HomeSetting->id}}" tabindex="-1" aria-labelledby="homeSettingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="homeSettingModalLabel">Edit Slide {{$HomeSetting->id}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="/homeUpdate" method="POST" enctype="multipart/form-data">

            @csrf
    <input type="hidden" name="HomeSetting_id" value="{{$HomeSetting->id}}">
        <div class="modal-body">

            <!--heading-->
        <div class="mb-3">
            <label for="heading" class="form-label">Heading</label>
                <textarea class="form-control" id="heading" name="heading" rows = "2">{{$HomeSetting->heading ?? '' }}</textarea>
        </div>

            <!--sub heading-->
        <div class="mb-3">
            <label for="sub_heading" class="form-label">Sub Heading</label>
                <textarea class="form-control" id="sub_heading" name="sub_heading" rows="3">{{ $HomeSetting->sub_heading ?? '' }}</textarea>
        </div>

            <!--Image upload-->
        <div class="mb-3">
            <label for="image_upload" class="form-label">Image Upload</label>
                <input type="file" class="form-control" id="image_upload" name="image_upload">
        </div>

            <!-- top sub heading -->
        <div class="mb-3">
            <label for="top_heading" class="form-label">Top Sub Heading</label>
                <input type="text" class="form-control" id="top_heading" name="top_heading" value="{{$HomeSetting->top_heading}}">
        </div>

            <!-- bottom heading -->
         <div class="mb-3">
            <label for="bottom_heading" class="form-label">Bottom Heading</label>
                <input type="text" class="form-control" id="bottom_heading" name="bottom_heading" value="{{$HomeSetting->bottom_heading}}">
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
<!--end modal -->

@endforeach

        </tbody>
    </table>
</div>
</div>

@endsection