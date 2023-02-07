<x-laragen::input.group label="{{ @trans('cruds.test-car1921867778.fields.test') }}" for="7" :errors="$errors->get('testCar1921867778.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1921867778.test" id="7" wire:model.defer="testCar1921867778.test" />
</x-laragen::input.group>