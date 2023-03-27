<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car342557351.fields.test') }}" for="7" :errors="$errors->get('testCar342557351.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car342557351.fields.test')}}" name="testCar342557351.test" id="7" wire:model.defer="testCar342557351.test" />
</x-laragen::input.group>