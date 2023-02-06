<x-laragen::input.group label="{{ @trans('cruds.test-car1189261820.fields.test') }}" for="7" :errors="$errors->get('testCar1189261820.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1189261820.test" id="7" wire:model.defer="testCar1189261820.test" />
</x-laragen::input.group>