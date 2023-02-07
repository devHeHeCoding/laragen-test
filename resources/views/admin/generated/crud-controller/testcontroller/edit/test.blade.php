<x-laragen::input.group label="{{ @trans('cruds.test-car1714587569.fields.test') }}" for="7" :errors="$errors->get('testCar1714587569.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1714587569.test" id="7" wire:model.defer="testCar1714587569.test" />
</x-laragen::input.group>