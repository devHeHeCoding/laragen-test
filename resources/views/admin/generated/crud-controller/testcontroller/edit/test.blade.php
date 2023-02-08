<x-laragen::input.group label="{{ @trans('cruds.test-car1376818695.fields.test') }}" for="7" :errors="$errors->get('testCar1376818695.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1376818695.test" id="7" wire:model.defer="testCar1376818695.test" />
</x-laragen::input.group>