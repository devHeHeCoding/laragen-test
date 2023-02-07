<x-laragen::input.group label="{{ @trans('cruds.test-car1686850124.fields.test') }}" for="7" :errors="$errors->get('testCar1686850124.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1686850124.test" id="7" wire:model.defer="testCar1686850124.test" />
</x-laragen::input.group>