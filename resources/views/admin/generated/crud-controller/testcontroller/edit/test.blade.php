<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car304007891.fields.test') }}" for="7" :errors="$errors->get('testCar304007891.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car304007891.fields.test')}}" name="testCar304007891.test" id="7" wire:model.defer="testCar304007891.test" />
</x-laragen::input.group>