<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2085255194.fields.test') }}" for="7" :errors="$errors->get('testCar2085255194.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2085255194.fields.test')}}" name="testCar2085255194.test" id="7" wire:model.defer="testCar2085255194.test" />
</x-laragen::input.group>