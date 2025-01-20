<div class="fixed z-50 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0 min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class="min-h-screen flex items-center justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex items-center justify-center">
                        <img src="{{asset('img/logo consulta.png')}}" class="w-52">
                    </div>
                    <h3 class="text-2xl text-cyan-400 font-bold text-center mt-2">REGISTRAR PROYECTO DE CONSULTA</h3>
                    <form>
                        <div class="row pt-4">
                            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- NOMBRE DEL PROYECTO --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="bg-cyan-900 px-3 py-[0.25rem] rounded-tl-lg rounded-bl-lg text-white font-bold transition-colors">PROYECTO</span>
                                            <input wire:model="nombre" type="text" class="w-full pl-2 text-neutral-900 border rounded-r-lg font-bold outline-2 border-cyan-900" onkeyup="this.value = this.value.toUpperCase();"/>
                                        </div>
                                        @error('nombre')<div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 mb-xl-0"> {{-- campo estado --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="bg-cyan-900 py-[0.25rem] px-3 rounded-tl-lg rounded-bl-lg text-white font-bold">Estatus</span>
                                        <select class="w-full pl-3 border border-solid border-slate-900 text-slate-900 outline-2 font-bold rounded-r-lg " wire:model="estatusId" required>
                                            <option value="">Seleccione</option>
                                            @foreach ($estatus as $key => $valor)
                                                <option value="{{$key}}">{{$valor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('estatusId')<div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-xl-0"> {{-- CAMPO PARROQUIA --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="bg-cyan-900 py-[0.25rem] px-3 rounded-tl-lg rounded-bl-lg text-white font-bold">Parroquia</span>
                                        <select class="w-full pl-3 border border-solid border-slate-900 text-slate-900 outline-2 font-bold rounded-r-lg " wire:model.live="parroquiaId" required>
                                            <option value="">Seleccione</option>
                                            @foreach ($parroquias as $key => $valor)
                                                <option value="{{$key}}">{{$valor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('parroquiaId')<div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            @if (!is_null($ejes))
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-xl-0"> {{-- CAMPO EJE --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="bg-cyan-900 py-[0.25rem] px-3 rounded-tl-lg rounded-bl-lg text-white font-bold">Eje</span>
                                        <select class="w-full pl-3 border font-bold border-solid rounded-r-lg outline-2 text-slate-900 border-slate-900" wire:model="ejeId" required>
                                            <option value="">Seleccione</option>
                                            @foreach ($ejes as $key => $valor)
                                                <option value="{{$key}}">{{$valor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('ejeId') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            @endif

                            @if (!is_null($circuitos))
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-xl-0"> {{-- CAMPO CIRCUITO --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="bg-cyan-900 py-[0.25rem] px-3 rounded-tl-lg rounded-bl-lg text-white font-bold">Circuito</span>
                                        <select class="w-full pl-3 border border-solid font-bold border-slate-900 text-slate-900 rounded-r-lg outline-2" wire:model="circuitoId" required>
                                            <option value="">Seleccione</option>
                                            @foreach ($circuitos as $key => $valor)
                                                <option value="{{$key}}">{{$valor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('circuitoId') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            @endif
                        </div>

                        <div class="row pt-4">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-xl-0"> {{-- CAMPO TIPO --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="bg-cyan-900 py-[0.25rem] px-3 rounded-tl-lg rounded-bl-lg text-white font-bold">Tipo</span>
                                        <select class="w-full pl-3 border border-solid border-slate-900 text-slate-900 outline-2 font-bold rounded-r-lg " wire:model.live="tipoId" required>
                                            <option value="">Seleccione</option>
                                            @foreach ($tipos as $key => $valor)
                                                <option value="{{$key}}">{{$valor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('tipoId')<div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            @if (!is_null($categorias))
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-xl-0"> {{-- CAMPO CATEGORIA --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="bg-cyan-900 py-[0.25rem] px-3 rounded-tl-lg rounded-bl-lg text-white font-bold">Categoria</span>
                                        <select class="w-full pl-3 border font-bold border-solid rounded-r-lg outline-2 text-slate-900 border-slate-900" wire:model.live="categoriaId" required>
                                            <option value="">Seleccione</option>
                                            @foreach ($categorias as $key => $valor)
                                                <option value="{{$key}}">{{$valor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('categoriaId') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            @endif

                            @if (!is_null($subcategorias))
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-xl-0"> {{-- CAMPO SUBCATEGORIA --}}
                                <div class="w-full rounded-lg">
                                    <div class="flex">
                                        <span class="bg-cyan-900 py-[0.25rem] px-3 rounded-tl-lg rounded-bl-lg text-white font-bold">SubCategoria</span>
                                        <select class="w-full pl-3 border border-solid font-bold border-slate-900 text-slate-900 rounded-r-lg outline-2" wire:model="subcategoriaId" required>
                                            <option value="">Seleccione</option>
                                            @foreach ($subcategorias as $key => $valor)
                                                <option value="{{$key}}">{{$valor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('subcategoriaId') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            @endif
                        </div>

                        <div class="row pt-4">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <div class="flex items-center justify-center pb-4"> {{-- CAMPO ENTE --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="bg-cyan-900 px-3 py-[0.25rem] rounded-tl-lg rounded-bl-lg text-white font-bold transition-colors">Ente</span>
                                            <input wire:model="ente" type="text" class="w-full pl-2 text-neutral-900 border rounded-r-lg font-bold outline-2 border-cyan-900" onkeyup="this.value = this.value.toUpperCase();"/>
                                        </div>
                                        @error('ente')<div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <div class="relative flex flex-wrap items-stretch pb-4"> {{-- CODIGO ENTE --}}
                                    <div class="w-full rounded-lg">
                                        <div class="flex">
                                            <span class="bg-cyan-900 px-3 py-[0.25rem] rounded-tl-lg rounded-bl-lg text-white font-bold transition-colors">Código</span>
                                            <input wire:model="codigo" type="text" class="w-full pl-2 border rounded-r-lg text-neutral-900 font-bold outline-2 border-cyan-900" onkeyup="this.value = this.value.toUpperCase();"/>
                                        </div>
                                        @error('codigo')<div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- component -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <span>¿Este proyecto fue elegido en la primera consulta?</span>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <span>¿Este proyecto fue elegido en la segunda consulta?</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <label>
                                    <input type="radio" value="1" class="peer hidden" wire:model.live="primera" name="primera">
                                    <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
                                        <h2 class="font-medium text-gray-700">SI</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <label>
                                    <input type="radio" value="0" class="peer hidden" wire:model.live="primera" name="primera">
                                    <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
                                        <h2 class="font-medium text-gray-700">NO</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-xl-0"></div>
                            <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <label>
                                    <input type="radio" value="1" class="peer hidden" wire:model.live="segunda" name="segunda">
                                    <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
                                        <h2 class="font-medium text-gray-700">SI</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                            <div class="col-xl-1 col-lg-12 col-md-12 col-sm-12 mb-xl-0">
                                <label>
                                    <input type="radio" value="0" class="peer hidden" wire:model.live="segunda" name="segunda">
                                    <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
                                        <h2 class="font-medium text-gray-700">NO</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="px-4 py-3 sm:px-6 sm:flex">
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 font-bold text-white py-2 rounded-lg mx-auto block mb-2" wire:click.prevent="guardar()" >GUARDAR</button>
                            </span>
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="button" class="w-32 bg-gradient-to-r from-red-400 to-red-600 font-bold text-white py-2 rounded-lg mx-auto block mb-2" wire:click="cerrarModal()">SALIR</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>