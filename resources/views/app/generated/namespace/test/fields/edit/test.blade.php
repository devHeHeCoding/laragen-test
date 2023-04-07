<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car105241296.fields.test') }}" for="7" :errors="$errors->get('testCar105241296.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car105241296.fields.test')}}" name="testCar105241296.test" id="7" wire:model.defer="testCar105241296.test" />
</x-laragen::input.group>