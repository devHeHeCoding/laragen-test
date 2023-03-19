<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car723896777.fields.test') }}" for="7" :errors="$errors->get('testCar723896777.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car723896777.fields.test')}}" name="testCar723896777.test" id="7" wire:model.defer="testCar723896777.test" />
</x-laragen::input.group>