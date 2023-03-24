<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car207063216.fields.test') }}" for="7" :errors="$errors->get('testCar207063216.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car207063216.fields.test')}}" name="testCar207063216.test" id="7" wire:model.defer="testCar207063216.test" />
</x-laragen::input.group>