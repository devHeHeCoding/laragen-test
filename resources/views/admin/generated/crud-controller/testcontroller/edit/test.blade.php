<x-laragen::input.group label="{{ @trans('cruds.test-car1346775555.fields.test') }}" for="7" :errors="$errors->get('testCar1346775555.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1346775555.test" id="7" wire:model.defer="testCar1346775555.test" />
</x-laragen::input.group>