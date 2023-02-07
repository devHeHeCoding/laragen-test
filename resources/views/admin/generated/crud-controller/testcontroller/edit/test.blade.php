<x-laragen::input.group label="{{ @trans('cruds.test-car1729187173.fields.test') }}" for="7" :errors="$errors->get('testCar1729187173.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1729187173.test" id="7" wire:model.defer="testCar1729187173.test" />
</x-laragen::input.group>