<div class="main-content mt-5 ">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header max-h-screen">
                    <div class="">
                        <h5 class="mb-2 font-bold">1ra y 2da CONSULTA POPULAR</h5>
                    </div>
                    {{-- <div class="d-flex flex-row justify-content-between">
                        <input wire:model.live="search" type="text" placeholder="Filtrar por Proyecto" class="w-30 px-4 py-2 border border-solid rounded-lg outline-2 font-bold">
                        <button wire:click="crear()" class="btn bg-gradient-primary btn-sm mb-0 font-weight-bolder" type="button">+&nbsp; NUEVO REGISTRO</button>
                    </div> --}}
                </div>
                @if($modal)
                    @include('livewire.prim-segu-consulta.crear') 
                @endif  
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="align-items-center mb-0" style="width:100% !important">
                            <thead>
                                <tr>
                                    <th style="width: 2% !important" class="text-center text-uppercase text-dark font-weight-bolder">#</th>
                                    <th style="width: 8% !important" class="text-center text-uppercase text-dark font-weight-bolder">Parroquia</th>
                                    <th style="width: 15% !important" class="text-center text-uppercase text-dark font-weight-bolder">Circuito</th>
                                    <th style="width: 35% !important" class="text-center text-uppercase text-dark font-weight-bolder">1er Proyecto</th>
                                    <th style="width: 35% !important" class="text-center text-uppercase text-dark font-weight-bolder">2do Proyecto</th>
                                    <th style="width: 5% !important" class="text-center text-uppercase text-dark font-weight-bolder">acciones</th>
                                </tr>
                            </thead>
                            @if ($consultas->count())
                                <tbody>
                                    <?php $indice =0; ?>
                                    @foreach ($consultas as $consulta)
                                    <?php $indice += 1; ?>
                                    <tr>
                                        <td style="width: 2% !important" class="ps-4 w"><p class="font-weight-bold text-dark mb-0"><?php echo $indice; ?></p></td>
                                        <td style="width: 8% !important" class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$consulta->parroquia->nombre}}</p></td>
                                        <td style="width: 15% !important" class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$consulta->circuito_id}}</p></td>
                                        <td style="width: 35% !important" class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$consulta->proyecto_uno}}</p></td>
                                        <td style="width: 35% !important" class="text-center text-uppercase"><p class="text-dark font-weight-bold mb-0">{{$consulta->proyecto_dos}}</p></td>
                                        {{-- <td class="text-center text-uppercase"><p class=" font-weight-bold">{{$lsb->estatus ? 'activo' : 'inactivo'}}</p></td> --}}
                                        <td style="width: 5% !important" class="text-center text-uppercase"><a wire:click="editar({{$consulta->id}})" class=" text-success px-2 py-1 mb-0" type="button"><span class="material-symbols-outlined">contact_page</span></a></td>
                                        {{-- <td class="text-center"><a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar lsb">
                                            <a wire:click="" rel="tooltip" title="Generar Ficha" type="button" class="text-warning font-bold py-2 px-2"><i class="material-icons">contact_page</i></a>
                                            <a wire:click="" class="text-danger font-bold py-2 px-2"><span class="material-symbols-outlined">person_cancel</span></a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                @endif
                            </table>
                            {{$consultas->links('pagination::Bootstrap-4')}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
