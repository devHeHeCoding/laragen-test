<x-laragen::input.group label="{{ @trans('cruds.test-car1780273142.fields.test') }}" for="7" :errors="$errors->get('testCar1780273142.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1780273142.test" id="7" wire:model.defer="testCar1780273142.test" />
</x-laragen::input.group>