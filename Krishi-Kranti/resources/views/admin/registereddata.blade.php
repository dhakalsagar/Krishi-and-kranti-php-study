<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  	@include('admin.css')
  </head>
  <body>
   	@include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
      <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
        <div  class="container" align="center">
        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>

        @endif

          <table>
            <tr style="background-color: gray;">
              <td style="padding:20px;">Register Num</td>
              <td style="padding:20px;">Animal Name</td>
              <td style="padding:20px;">Birth Date</td>
              <td style="padding:20px;">Tatto Number</td>
              <td style="padding:20px;">Gender</td>
              <td style="padding:20px;">Description</td>
              <td style="padding:20px;">Image</td>
              <td style="padding:20px;">Delate</td>

            </tr>
            @foreach($data as $pedigree)
            <tr align="center" style="background-color: black;">
              <td>{{$pedigree->register_num}}</td>
              <td>{{$pedigree->name}}</td>
              <td>{{$pedigree->birth}}</td>
              <td>{{$pedigree->tatto}}</td>
              <td>{{$pedigree->gender}}</td>
              <td>{{$pedigree->des}}</td>
              <td>
                <img height="50px" width="50px" src="/pedigreeimage/{{$pedigree->image}}">

              </td>

              <td>
                <a class="btn btn-danger" href="{{url('deletedata',$pedigree->id)}}">Delete</a>
              </td>

            </tr>
            @endforeach


          </table>

        </div>
        
      </div>  
          <!-- partial -->
      @include('admin.script')       
  </body>
</html>