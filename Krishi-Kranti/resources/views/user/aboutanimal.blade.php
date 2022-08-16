
<!DOCTYPE html>
<html lang="en">

  <head>
    @include('user.css')
    </head>
    
    <body>
  @foreach($data as $pedigree)
  <div class="card">
    <div class="card-header">
      Register Number {{$pedigree->register_num}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$pedigree->name}}<img height="50px" width="50px" src="/pedigreeimage/{{$pedigree->image}}"> </h5>
      <a href="/detail/" class="btn btn-primary">Get Details</a>
    </div>
  </div>
  @endforeach
  @if(method_exists($data, 'links'))
  <div class="d-flex justify-content-center">
    {!! $data->links() !!}
  </div>
  @endif
    @include('user.contact')
    @include('user.footer')
    @include('user.script')
  </body>
</html>