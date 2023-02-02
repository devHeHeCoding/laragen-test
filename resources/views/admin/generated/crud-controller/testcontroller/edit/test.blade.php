<x-laragen::input.group label="{{ __trans('cruds.test-car867844321.fields.test') }}" for="7" :errors="$errors->get('testCar867844321.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar867844321.test" id="7" wire:model.defer="testCar867844321.test" />
</x-laragen::input.group>