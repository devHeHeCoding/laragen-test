<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car590167015.fields.test') }}" for="7" :errors="$errors->get('testCar590167015.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car590167015.fields.test')}}" name="testCar590167015.test" id="7" wire:model.defer="testCar590167015.test" />
</x-laragen::input.group>