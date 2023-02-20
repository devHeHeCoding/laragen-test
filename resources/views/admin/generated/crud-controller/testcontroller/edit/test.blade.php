<x-laragen::input.group label="{{ @trans('cruds.test-car1110355267.fields.test') }}" for="7" :errors="$errors->get('testCar1110355267.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1110355267.test" id="7" wire:model.defer="testCar1110355267.test" />
</x-laragen::input.group>