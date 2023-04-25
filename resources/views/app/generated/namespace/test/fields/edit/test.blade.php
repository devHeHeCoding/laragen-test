<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car14756073.fields.test') }}" for="7" :errors="$errors->get('testCar14756073.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car14756073.fields.test')}}" name="testCar14756073.test" id="7" wire:model.defer="testCar14756073.test" />
</x-laragen::input.group>