<x-laragen::input.group label="{{ __trans('cruds.test-car800783990.fields.test') }}" for="7" :errors="$errors->get('testCar800783990.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar800783990.test" id="7" wire:model.defer="testCar800783990.test" />
</x-laragen::input.group>