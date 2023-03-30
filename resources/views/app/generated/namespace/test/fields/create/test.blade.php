<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car300967391.fields.test') }}" for="7" :errors="$errors->get('testCar300967391.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car300967391.fields.test')}}" name="testCar300967391.test" id="7" wire:model.defer="testCar300967391.test" />
</x-laragen::input.group>