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
        <h1 class="title">Full Information of The Animals </h1>

        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>

        @endif
        <form action="{{url('uploadinformationn')}}" method="post" enctype="multipart/form-data">

          @csrf 
          <div style="padding: 15px;">
          <select style="color:black;" name="register_num">
            @foreach($data as $pedigree)
            <option value="{{$pedigree->register_num}}">{{$pedigree->register_num}}</option>
            @endforeach
          </select>
        </div>
          

        <div style="padding: 15px;">
          <label>Sibling</label>
          <input style="color:black;" type="number" name="sibling" placeholder="How many child" required="">
        </div>

        <div style="padding: 15px;">
          <label>Owner</label>
          <input style="color:black;" type="text" name="owner" placeholder="Original Owner" required="">
        </div>

        <div style="padding: 15px;">
          <label>Origine</label>
          <input style="color:black;" type="text" name="origine" placeholder="Origine of the goods" required="">
        </div>

        <div style="padding: 15px;">
          <label>Breeder</label>
          <input style="color:black;" type="text" name="breeder" placeholder="breeder" required="">
        </div>
        <div style="padding: 15px;">
          <label>Vaccineted</label>
          <input style="color:black;" type="number" name="vaccineted" placeholder="Vaccineted time" required="">
        </div>
        <div style="padding: 15px;">
          <label>Vaccineted-Date</label>
          <input style="color:black;" type="date" name="vaccineteddate" placeholder="Vaccineted Date" required="">
        </div>
          <div style="padding: 15px;">
          <input type="file" name="file">
          </div>
        </div>

        <div class="d-grid mt-3">
          <input type="submit" class="btn btn-dark btn-block" value="Submit">
        </div>  
        </form>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


      @include('admin.script')       
  </body>
</html>