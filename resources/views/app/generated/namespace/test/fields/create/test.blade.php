<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1943307652.fields.test') }}" for="7" :errors="$errors->get('testCar1943307652.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1943307652.fields.test')}}" name="testCar1943307652.test" id="7" wire:model.defer="testCar1943307652.test" />
</x-laragen::input.group>