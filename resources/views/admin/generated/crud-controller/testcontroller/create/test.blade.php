<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1567495526.fields.test') }}" for="7" :errors="$errors->get('testCar1567495526.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1567495526.test" id="7" wire:model.defer="testCar1567495526.test" />
</x-laragen::input.group>