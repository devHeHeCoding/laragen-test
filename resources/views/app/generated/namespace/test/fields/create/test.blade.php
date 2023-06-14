<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car975331698.fields.test') }}" for="7" :errors="$errors->get('testCar975331698.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car975331698.fields.test')}}" name="testCar975331698.test" id="7" wire:model.defer="testCar975331698.test" />
</x-laragen::input.group>