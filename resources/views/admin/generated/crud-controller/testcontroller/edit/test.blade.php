<x-laragen::input.group label="{{ __trans('cruds.test-car1083031205.fields.test') }}" for="7" :errors="$errors->get('testCar1083031205.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1083031205.test" id="7" wire:model.defer="testCar1083031205.test" />
</x-laragen::input.group>