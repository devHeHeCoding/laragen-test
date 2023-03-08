<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car738236358.fields.test') }}" for="7" :errors="$errors->get('testCar738236358.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car738236358.fields.test')}}" name="testCar738236358.test" id="7" wire:model.defer="testCar738236358.test" />
</x-laragen::input.group>