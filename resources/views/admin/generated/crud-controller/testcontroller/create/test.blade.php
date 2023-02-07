<x-laragen::input.group label="{{ @trans('cruds.test-car734754007.fields.test') }}" for="7" :errors="$errors->get('testCar734754007.test')" >
    <x-laragen::input.text placeholder="test" name="testCar734754007.test" id="7" wire:model.defer="testCar734754007.test" />
</x-laragen::input.group>