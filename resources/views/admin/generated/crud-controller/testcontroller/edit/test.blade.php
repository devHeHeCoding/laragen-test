<x-laragen::input.group label="{{ __trans('cruds.test-car266619430.fields.test') }}" for="7" :errors="$errors->get('testCar266619430.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar266619430.test" id="7" wire:model.defer="testCar266619430.test" />
</x-laragen::input.group>