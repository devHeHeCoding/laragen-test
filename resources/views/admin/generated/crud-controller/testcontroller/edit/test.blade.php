<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car239793807.fields.test') }}" for="7" :errors="$errors->get('testCar239793807.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar239793807.test" id="7" wire:model.defer="testCar239793807.test" />
</x-laragen::input.group>