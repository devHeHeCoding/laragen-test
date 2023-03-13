<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car68996410.fields.test') }}" for="7" :errors="$errors->get('testCar68996410.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car68996410.fields.test')}}" name="testCar68996410.test" id="7" wire:model.defer="testCar68996410.test" />
</x-laragen::input.group>