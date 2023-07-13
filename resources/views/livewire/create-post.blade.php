<div>
    <x-danger-button class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 focus:ring-blue-500" wire:click="$set('open', true)" >
        Crear nuevo producto
    </x-danger-button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Crear nuevo producto
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                {{--  wire:model.defer  en vez de mandar la peticion cadaque se esirba una letaa, la manda cuando se oprime el boton --}}
                <x-label value="Nombre" />
                <x-input class="w-full" wire:model.defer="name"/>
                <x-input-error for="name"/>
            </div>
            <div class="mb-4">
                <x-label value="Descripcion" />
                <textarea name="" wire:model.defer="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" cols="6" rows="6"></textarea>
                <x-input-error for="description"/>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <div class="mb-4">
                    <x-label value="Precio" />
                    <x-input class="w-full" wire:model.defer="price"/>
                    <x-input-error for="price"/>
                </div>
                <div class="mb-4">
                    <x-label value="Stock" />
                    <x-input class="w-full" wire:model.defer="stock"/>
                    <x-input-error for="stock"/>
                </div>
            </div>

        </x-slot>
        <x-slot name='footer'>
            <div>
                <x-danger-button wire:click="$set('open', false)" >
                    Cancelar
                </x-danger-button>
                <x-button wire:click="save" class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 focus:ring-blue-500"> Crear</x-button>
            </div>
        </x-slot>
    </x-modal>
</div>
