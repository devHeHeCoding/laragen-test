<x-laragen::input.group label="{{ @trans('cruds.test-car1965271382.fields.test') }}" for="7" :errors="$errors->get('testCar1965271382.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1965271382.test" id="7" wire:model.defer="testCar1965271382.test" />
</x-laragen::input.group>