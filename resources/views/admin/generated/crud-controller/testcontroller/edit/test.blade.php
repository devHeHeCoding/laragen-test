<x-laragen::input.group label="{{ @trans('cruds.test-car1323929317.fields.test') }}" for="7" :errors="$errors->get('testCar1323929317.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1323929317.test" id="7" wire:model.defer="testCar1323929317.test" />
</x-laragen::input.group>