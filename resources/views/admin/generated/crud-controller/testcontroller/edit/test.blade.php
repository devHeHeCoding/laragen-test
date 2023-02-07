<x-laragen::input.group label="{{ @trans('cruds.test-car1031991510.fields.test') }}" for="7" :errors="$errors->get('testCar1031991510.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1031991510.test" id="7" wire:model.defer="testCar1031991510.test" />
</x-laragen::input.group>