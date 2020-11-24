@extends ('layouts.private')
@section('content')
<div class="row justify-content-center">
<h5 class="text-center text-uppercase alert alert-info w-50 justify-content-center">{{$mobile_name}}</h5>
</div>
<div class="row justify-content-center">

<table class="table w-50">
  <thead class="thead-dark">
    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">Opinions</th>
      <th scope="col">Web</th>
      <th scope="col">URL</th>
    </tr>
  </thead>
  <tbody>
        @isset($lista_links)
		    	@foreach($lista_links as $links)
		    	<tr class="text-center">

		      		<th scope="row">{{$links->id}}</th>
				    <td>{{$links->n_opinion}}</td>
				    <td>{{$links->opinion_web}}</td>
				    <td><a href="{{$links->opinion_url}}">Opinion URL</a></td>
				    <td><a href="#" onclick="EditarLink('{{$links->id}}','{{$links->opinion_web}}','{{$links->opinion_url}}','{{$links->n_opinion}}','{{$links->mobile->name}}')" data-toggle="modal" data-target="#EditarLink"><img width="30px" src="{{asset('img/editar.svg')}}"></a></td>
				    <td><a href="#" onclick="EliminarLink('{{$links->id}}','{{$links->opinion_web}}')" data-toggle="modal" data-target="#EliminarLink"><img width="30px" src="{{asset('img/eliminar.png')}}"></a></td>
				</tr>
		     	@endforeach
     @endisset
 
  </tbody>
</table>
</div>
<div class="text-center">
        <a href="#"><img width="30px" data-toggle="modal" data-target="#InsertarLink" src="{{asset('img/plus.png')}}"></a>
</div>
<div class="row justify-content-center mt-5">
{{$lista_links->links() }}
</div>
<!--Modal para insertar link-->
<div class="modal fade" id="InsertarLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('links.store')}}">
        @csrf
      <div class="modal-body">

        <input type="hidden" name="mobile_id" id="mobile_id" value="{{$mobile_id}}">
      <div class="form-group">
       <input type="text" class="form-control" id="opinion_web" name="opinion_web" placeholder="Web Name">
      </div>
      <div class="form-group">
       <input type="text" class="form-control" id="opinion_url" name="opinion_url" placeholder="URL Opinions">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="n_opinion" name="n_opinion" placeholder="Number of Opinions">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--Modal para eliminar mobile-->
<form id="form_eliminar" name="form_eliminar" method="post">
        @csrf
<div class="modal fade" id="EliminarLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     @method('DELETE')
      <div class="modal-body">
        <input type="hidden" class="form-control" id="id" name="id">
       <input  type="text" class="form-control" id="opinion_web" name="opinion_web" placeholder="Web Name" readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
      </div>
    
    </div>
  </div>
</div>
</form>
<!--Modal para editar ad-->
<div class="modal fade" id="EditarLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="form_editar" id="form_editar" method="post">
        @csrf
      <div class="modal-body">
        @method('put')
      <input type="hidden" name="mobile_id" id="mobile_id" value="{{$mobile_id}}">
      <input type="text" class="form-control alert alert-info text-center text-uppercase" id="mobile_name" name="mobile_name" readonly="">
      <div class="form-group">
        <label for="opinion_web">Valuation</label>
        <input type="text" class="form-control" id="opinion_web" name="opinion_web">
      </div>
      <div class="form-group">
        <label for="opinion_url">Opinion URL</label>
        <input type="text" class="form-control" id="opinion_url" name="opinion_url">
      </div>
      <div class="form-group">
        <label for="n_opinion">Number of Opinions</label>
        <input type="text" class="form-control" id="n_opinion" name="n_opinion">
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

@section('js_content')
  function EliminarLink(link_id,link_opinion_web)
  {
    $('#form_eliminar #opinion_web').val(link_opinion_web);
    $('#form_eliminar').attr('action','{{url('links')}}/'+link_id);
  }
  function EditarLink(link_id,link_opinion_web,link_opinion_url,link_n_opinion,link_mobile_name)
  {
    $('#form_editar #opinion_web').val(link_opinion_web);
    $('#form_editar #opinion_url').val(link_opinion_url);
    $('#form_editar #n_opinion').val(link_n_opinion);
    $('#form_editar #mobile_name').val(link_mobile_name);
    $('#form_editar').attr('action','{{url('links')}}/'+link_id)
  }
@endsection
