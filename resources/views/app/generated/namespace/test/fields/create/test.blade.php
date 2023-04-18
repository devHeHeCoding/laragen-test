<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1965360481.fields.test') }}" for="7" :errors="$errors->get('testCar1965360481.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1965360481.fields.test')}}" name="testCar1965360481.test" id="7" wire:model.defer="testCar1965360481.test" />
</x-laragen::input.group>