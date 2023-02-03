<x-laragen::input.group label="{{ __trans('cruds.test-car876424200.fields.test') }}" for="7" :errors="$errors->get('testCar876424200.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar876424200.test" id="7" wire:model.defer="testCar876424200.test" />
</x-laragen::input.group>