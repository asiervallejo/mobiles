@extends('layouts.public')
@section('content')
 <!-- Listado Completo -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0 mt-5">mobiles</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        @foreach ($lista_mobiles as $mobile)

<!--Bootstrap Card-->

         <div class="col-md-6 col-lg-4">
            <div class="card m-5">
                <p class="card-text text-center alert alert-info">{{$mobile->name}}</p>
                <a class="portfolio-item d-block mx-auto" href="#links-modal" onclick="getLinks('{{$mobile->id}}','{{$mobile->name}}')">
                <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                  <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                    <i class="fas fa-search-plus fa-3x"></i>
                  </div>
                </div>
              <img style="width: 200px;height: 200px" class="img-fluid" src='{{$mobile->url_photo}}' alt="Card image cap"></a>
              <div class="card-body">
                <p class="card-text">Valuation: {{$mobile->valuation}}/10</p>
                <p class="card-text">Opinion Range: {{$mobile->range->name}}</p>
              </div>
            </div>
        </div>

        @endforeach
      </div>
    </div>
  </section>
  <div class='row justify-content-center pb-5'>{{$lista_mobiles->links()}}</div>
  <!-- Portfolio Modal Links -->
  <div class="portfolio-modal mfp-hide" id="links-modal">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row ">
          <div class="col-lg-8 mx-auto">
            <h2 id="links-mobile-name" class="text-secondary text-uppercase mb-0"></h2>
            <hr class="star-dark mb-5">
            <table class="table justify-content-center">
              <thead>
                <tr>
                  <th scope="col">Web</th>
                  <th scope="col">URL</th>
                  <th scope="col">Opinions</th>
                </tr>
              </thead>
              <tbody id="links-lista">
              </tbody>
            </table>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('js_content')
  <script type="text/javascript">
   function getLinks(mobile_id,mobile_name) {
        $.ajax({
           type:'GET',
           url:'links_listar/'+mobile_id,
           success:function(data)
           {
              $("#links-modal #links-mobile-name").text(mobile_name); 
              $("#links-modal #links-lista").empty();   
              if (data.length==0)
                {
                  console.log('Error');
                  $("#links-modal #links-lista").append("<tr><td class='alert alert-danger' colspan=4>No hay links disponibles</td></tr>");
                }
                else
                {
                  data.forEach(function(link)
                    {
                        console.log(link);
                        $("#links-modal #links-lista").append("<tr><td>"+link.opinion_web+"</td><td><a href='"+link.opinion_url+"'>Enlace</a></td><td>"+link.n_opinion+"</td></tr>");
                    });
                }                
              
                        
           }
         
        });
     }
  </script>
  @endsection