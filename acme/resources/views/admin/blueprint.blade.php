@extends('admin.layouts.main')

<!-- debede llmarse igual que el yield-->
@section('contenido')

    <div class="d-flex justify-content-between">
    <h1>Planos</h1>
        <div>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                Agregar
            </button>
        </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="p-4">
    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Documento</th>
        <th scope="col">projects_id</th>
        <th scope="col">version</th>
        <th scope="col">hoja</th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($blueprint as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nombre_plano }}</td>
            <td>{{ $item->documento }}</td>
            <td>{{ $item->projects_id }}</td>
            <td>{{ $item->version }}</td>
            <td>{{ $item->hoja }}</td>
            <td>
                <button class="btn btn-danger btnEliminar" 
                data-id="{{ $item->id }}"    
                data-toggle="modal" data-target="#modalDelete">
                    <i class="fa fa-trash"></i>
                </button>

            </td>
           
        </tr>
    @endforeach
  </tbody>
</table>


    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dashboard/blueprint" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre del plano</label>
                        <input value="{{ old('name') }}" name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="documento">Documento</label>
                        <input value="{{ old('nickname') }}" name="documento" type="text" class="form-control" id="documento" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="version">version</label>
                        <input value="{{ old('email') }}" name="version" type="text" class="form-control" id="version" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="hoja">Hoja</label>
                        <input name="hoja" type="text" class="form-control" id="hoja" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>
        </div>
    </div>
</div>
 <!-- Modal delete -->
 <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dashboard/users" method="POST">
                @csrf
                <div class="modal-body">
                   <h2>¿Deseas eliminar el registro?</h2>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <Script>
        //alert("Hola mundo")
        $(document).ready(function(){
            $(".btnEliminar").on('click', function(event){
                var id=$(this).data('id');
                alert(id)
                
            });
        });
    </Script>
@endsection