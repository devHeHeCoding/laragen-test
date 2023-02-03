<x-laragen::input.group label="{{ @trans('cruds.test-car1695960584.fields.test') }}" for="7" :errors="$errors->get('testCar1695960584.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1695960584.test" id="7" wire:model.defer="testCar1695960584.test" />
</x-laragen::input.group>