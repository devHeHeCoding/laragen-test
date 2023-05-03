<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car269890304.fields.test') }}" for="7" :errors="$errors->get('testCar269890304.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car269890304.fields.test')}}" name="testCar269890304.test" id="7" wire:model.defer="testCar269890304.test" />
</x-laragen::input.group>