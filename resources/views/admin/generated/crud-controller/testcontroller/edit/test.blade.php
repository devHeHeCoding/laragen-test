<x-laragen::input.group label="{{ @trans('cruds.test-car1651712778.fields.test') }}" for="7" :errors="$errors->get('testCar1651712778.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1651712778.test" id="7" wire:model.defer="testCar1651712778.test" />
</x-laragen::input.group>