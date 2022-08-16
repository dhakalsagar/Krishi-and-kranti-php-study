<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  	@include('admin.css')
    <style type="text/css">
      .title
      {
        color:white;
        font-size: 30px;
        padding-top:25px;
      }

      label
      {
        display: inline-block;
        width: 200px;

      }

    </style>
  </head>
  <body>
   	@include('admin.sidebar')
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
        <h1 class="title">Data Registration</h1>

        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>

        @endif


        <form action="{{url('uploadpedigree')}}" method="post" enctype="multipart/form-data">

          @csrf
        <div style="padding: 15px;">
          <label>Register Number</label>
          <input style="color:black;" type="number" name="register_num" placeholder="Give Register Number" required="">
        </div>

        <div style="padding: 15px;">
          <label>Animal Name</label>
          <input style="color:black;" type="text" name="name" placeholder="Give animal name" required="">
        </div>

        <div style="padding: 15px;">
          <label>Birth Date</label>
          <input style="color:black;" type="date" name="birth" placeholder="Give Birth date" required="">
        </div>

        <div style="padding: 15px;">
          <label>Tatto Number</label>
          <input style="color:black;" type="number" name="tatto" placeholder="Give Birth date" required="">
        </div>
        <div style="padding: 15px;">
          <label>Gender</label>
          <input style="color:black;" type="text" name="gender" placeholder="Give gender type" required="">
        </div>

        <div style="padding: 15px;">
          <label>Description</label>
          <input style="color:black;" type="text" name="des" placeholder="Give a Description" required="">
        </div>

        <div style="padding: 15px;">
          <input type="file" name="file">
        </div>

            <div class="d-grid mt-3">
              <input type="submit" class="btn btn-dark btn-block" value="Submit">
            </div>  
        </form>
    </div>
      @include('admin.script')       
  </body>
</html>
