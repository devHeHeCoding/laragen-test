<x-laragen::input.group label="{{ @trans('cruds.test-car1818946289.fields.test') }}" for="7" :errors="$errors->get('testCar1818946289.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1818946289.test" id="7" wire:model.defer="testCar1818946289.test" />
</x-laragen::input.group>