<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car483996585.fields.test') }}" for="11" :errors="$errors->get('testCar483996585.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car483996585.fields.test')}}" name="testCar483996585.test" id="11" wire:model.defer="testCar483996585.test" />
</x-laragen::input.group>