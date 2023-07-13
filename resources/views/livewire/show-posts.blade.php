<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="md:px-32  w-full">
            {{-- buscador --}}
            <div class="shadow overflow-hidden rounded border-b border-gray-200"> 
                <div class="px-6 py-4 flex items-center">
                    {{-- Sincronizar con variale search se isa el wire:model --}}
                    <x-input type="text" wire:model="search" class="flex-1 mr-4" placeholder="Buscador" />
                    @livewire('create-post')
                </div>
                @if ($products->count())
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                {{-- Que el conenido se ajuste dependiendo del campo seleccionado con wire:click se desencadena la accion y accede a metodo order en la clase --}}
                                <th class=" text-left py-3 px-4 uppercase font-semibold text-sm cursor-pointer" wire:click="order('id')">ID 
                                    {{-- Validacion para cambiar icono --}}
                                    @if ($sort == 'id')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm cursor-pointer" wire:click="order('name')">Nombre
                                    {{-- Validacion para cambiar icono --}}
                                    @if ($sort == 'name')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm cursor-pointer" wire:click="order('description')">descripcion
                                {{-- Validacion para cambiar icono --}}
                                    @if ($sort == 'description')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Precio</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Stock</td>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Acciones</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($products as $product)
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">{{$product->id}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{$product->name}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{$product->description}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">$ {{$product->price}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{$product->stock}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-4">
                        <p>No existe ningun registro</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
