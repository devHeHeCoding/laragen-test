<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car484856353.fields.test') }}" for="7" :errors="$errors->get('testCar484856353.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car484856353.fields.test')}}" name="testCar484856353.test" id="7" wire:model.defer="testCar484856353.test" />
</x-laragen::input.group>