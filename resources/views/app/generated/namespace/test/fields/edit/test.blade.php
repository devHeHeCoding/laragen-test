<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1418708864.fields.test') }}" for="7" :errors="$errors->get('testCar1418708864.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1418708864.fields.test')}}" name="testCar1418708864.test" id="7" wire:model.defer="testCar1418708864.test" />
</x-laragen::input.group>