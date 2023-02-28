<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car132168106.fields.test') }}" for="7" :errors="$errors->get('testCar132168106.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar132168106.test" id="7" wire:model.defer="testCar132168106.test" />
</x-laragen::input.group>