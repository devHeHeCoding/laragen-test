<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car752193676.fields.test') }}" for="7" :errors="$errors->get('testCar752193676.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car752193676.fields.test')}}" name="testCar752193676.test" id="7" wire:model.defer="testCar752193676.test" />
</x-laragen::input.group>