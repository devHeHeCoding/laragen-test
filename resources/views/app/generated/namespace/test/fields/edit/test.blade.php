<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car529571445.fields.test') }}" for="7" :errors="$errors->get('testCar529571445.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car529571445.fields.test')}}" name="testCar529571445.test" id="7" wire:model.defer="testCar529571445.test" />
</x-laragen::input.group>