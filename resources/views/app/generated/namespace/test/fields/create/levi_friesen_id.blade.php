<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car269890304.fields.levi_friesen_id') }}" for="3" :errors="$errors->get('testCar269890304.levi_friesen_id')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car269890304.fields.levi_friesen_id')}}" name="testCar269890304.levi_friesen_id" id="3" wire:model.defer="testCar269890304.levi_friesen_id" />
</x-laragen::input.group>