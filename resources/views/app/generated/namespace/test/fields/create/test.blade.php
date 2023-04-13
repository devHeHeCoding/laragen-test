<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1542014095.fields.test') }}" for="7" :errors="$errors->get('testCar1542014095.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1542014095.fields.test')}}" name="testCar1542014095.test" id="7" wire:model.defer="testCar1542014095.test" />
</x-laragen::input.group>