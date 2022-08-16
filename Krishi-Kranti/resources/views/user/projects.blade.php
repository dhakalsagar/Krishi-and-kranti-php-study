    <section class="section" id="projects">
     <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h6>Stored Data</h6>
                    <h3 style="font-size: 40px; font-weight: bold;"><br>You Can<br> See Full Details About The Stored Data</h3>
                </div>
            </div>
              <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                      @foreach($data as $pedigree)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div style="border: 2px solid;" class="item">
                            <a href="/detail{{$pedigree->id}}"><img style="height: 250px; width: 250px;" src="/pedigreeimage/{{$pedigree->image}}" alt=""></a></a>
                            <div style="border: 2px solid;">
                                <tr>
                                <a href="#"><h4 style="font-family:proxima-nova; color: black;">{{$pedigree->name}}</h4></a>
                                <h6 style="font-family:proxima-nova; border: 2px solid;">{{$pedigree->register_num}}</h6>
                                <a href="/detail{{$pedigree->id}}" style="font-family:proxima-nova; color: red; font-size: bold;">{{$pedigree->des}}</a>
                                </tr>
                            </div>
                          </div>
                        </div>
                        @endforeach
                    </div>

                    @if(method_exists($data, 'links'))
                    <div class="d-flex justify-content-center">
                        {!! $data->links() !!}
                    </div>
                    @endif
                  </div>
                </div>
        </div>
      </div>
    </div> 
    </section>