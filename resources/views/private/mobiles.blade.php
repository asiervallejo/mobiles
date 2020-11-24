@extends ('layouts.private')
@section ('content')
<div class="row justify-content-center">

<table class="table w-75">
  <thead class="thead-dark">
    <tr class="text-center">

      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">URL</th>
      <th scope="col">Valuation</th>
      <th scope="col">Opinion Range</th>

    </tr>
  </thead>
  <tbody>
        @isset($lista_mobiles_paginate)
    	@foreach($lista_mobiles_paginate as $mobiles)
    	<tr class="text-center">

      		<th scope="row">{{$mobiles->id}}</th>
		    <td>{{$mobiles->name}}</td>
		    <td><a href="{{$mobiles->url_photo}}">Photo URL</a></td>
		    <td>{{$mobiles->valuation}}</td>
		    <td>{{$mobiles->range->name}}</td>
		    <td><a href="#" onclick="EditarMobile('{{$mobiles->id}}','{{$mobiles->name}}','{{$mobiles->valuation}}','{{$mobiles->range_id}}','{{$mobiles->url_photo}}')" data-toggle="modal" data-target="#EditarMobile"><img width="30px" src="img/editar.svg"></a></td>
		    <td><a href="#" onclick="EliminarMobile('{{$mobiles->id}}','{{$mobiles->name}}')" data-toggle="modal" data-target="#EliminarMobile"><img width="30px" src="img/eliminar.png"></a></td>
		</tr>
     	@endforeach
     @endisset
 
  </tbody>
</table>

</div>


<div class="text-center">
        <a href="#"><img width="30px" data-toggle="modal" data-target="#InsertarMobile" src="img/plus.png"></a>
</div>
<div class="row justify-content-center mt-5">
{{$lista_mobiles_paginate->links() }}
</div>

<!--Modal para insertar web-->
<div class="modal fade" id="InsertarMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Mobile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('mobiles.store')}}">
        @csrf
      <div class="modal-body">

      <div class="form-group">
       <input type="text" class="form-control" id="name" name="name" placeholder="Mobile Name">
      </div>
      <div class="form-group">
       <input type="text" class="form-control" id="url_photo" name="url_photo" placeholder="URL Photo">
      </div>
      <div class="form-group">
        <label for="valuation">Valuation</label>
        <select class="form-control-sm" id="valuation" name="valuation">
          <option value="0" disabled selected="">Choose one option...</option>  
          @for ($i=1; $i <11 ; $i++)
            <option value="{{$i}}">{{$i}}</option>
          @endfor
      </select>
      </div> 


      <div class="form-group">
        <label for="opinion_range">Opinion Range</label>
       <select class="form-control-sm" id="opinion_range" name="opinion_range">
          
           @foreach ($lista_ranges as $range)
              <option
                @isset($id_range)
                  @if ($range->id==$id_range)
                      selected
                  @endif
                @endisset
               value='{{$range->id}}'>{{$range->name}}</option>
           @endforeach
        </select>
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
<div class="modal fade" id="EliminarMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Mobile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     @method('DELETE')
      <div class="modal-body">
        <input type="hidden" class="form-control" id="id" name="id">
       <input  type="text" class="form-control" id="name" name="name" placeholder="Mobile Name" readonly>
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
<div class="modal fade" id="EditarMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Mobile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="form_editar" id="form_editar" method="post">
        @csrf
      <div class="modal-body">
      	@method('put')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="url_photo">URL Photo</label>
      <input type="text" class="form-control" id="url_photo" name="url_photo">
      </div>
        <div class="form-group">
        <label for="valuation">Valuation</label>
        <select class="form-control-sm" id="valuation" name="valuation">
          <option value="0" disabled selected="">Choose one option...</option> 
          @for ($i=1; $i <11 ; $i++)
            <option value="{{$i}}">{{$i}}</option>
          @endfor
      </select>
      </div> 
      <div class="form-group">
        <label for="opinion_range">Opinion Range</label>
		  <select class="form-control-sm" id="opinion_range" name="opinion_range">
          
           @foreach ($lista_ranges as $range)
              <option
                @isset($id_range)
                  @if ($range->id==$id_range)
                      selected
                  @endif
                @endisset
               value='{{$range->id}}'>{{$range->name}}</option>
           @endforeach
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

@section('js_content')
	function EliminarMobile(mobile_id,mobile_name)
	{
	  $('#form_eliminar #name').val(mobile_name);
	  $('#form_eliminar').attr('action','{{url('mobiles')}}/'+mobile_id);
	}
	function EditarMobile(mobile_id,mobile_name,mobile_valuation,mobile_range,mobile_url_photo)
	{
	  $('#form_editar #name').val(mobile_name);
	  $('#form_editar #valuation').val(mobile_valuation);
	  $('#form_editar #opinion_range').val(mobile_range);
	  $('#form_editar #url_photo').val(mobile_url_photo);
	  $('#form_editar').attr('action','{{url('mobiles')}}/'+mobile_id)
	}
@endsection