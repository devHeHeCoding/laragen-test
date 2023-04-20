<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car85453210.fields.test') }}" for="7" :errors="$errors->get('testCar85453210.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car85453210.fields.test')}}" name="testCar85453210.test" id="7" wire:model.defer="testCar85453210.test" />
</x-laragen::input.group>