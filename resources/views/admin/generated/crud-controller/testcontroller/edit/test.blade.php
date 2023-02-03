<x-laragen::input.group label="{{ @trans('cruds.test-car176624470.fields.test') }}" for="7" :errors="$errors->get('testCar176624470.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar176624470.test" id="7" wire:model.defer="testCar176624470.test" />
</x-laragen::input.group>