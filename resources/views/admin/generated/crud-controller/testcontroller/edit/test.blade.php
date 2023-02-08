<x-laragen::input.group label="{{ @trans('cruds.test-car1147131989.fields.test') }}" for="7" :errors="$errors->get('testCar1147131989.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1147131989.test" id="7" wire:model.defer="testCar1147131989.test" />
</x-laragen::input.group>