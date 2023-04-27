<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car172553734.fields.test') }}" for="7" :errors="$errors->get('testCar172553734.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car172553734.fields.test')}}" name="testCar172553734.test" id="7" wire:model.defer="testCar172553734.test" />
</x-laragen::input.group>