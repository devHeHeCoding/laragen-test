<x-laragen::input.group label="{{ @trans('cruds.test-car1741852970.fields.test') }}" for="7" :errors="$errors->get('testCar1741852970.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1741852970.test" id="7" wire:model.defer="testCar1741852970.test" />
</x-laragen::input.group>