<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car147244030.fields.test') }}" for="7" :errors="$errors->get('testCar147244030.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car147244030.fields.test')}}" name="testCar147244030.test" id="7" wire:model.defer="testCar147244030.test" />
</x-laragen::input.group>