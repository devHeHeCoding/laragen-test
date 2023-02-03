<x-laragen::input.group label="{{ @trans('cruds.test-car1490996067.fields.test') }}" for="7" :errors="$errors->get('testCar1490996067.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1490996067.test" id="7" wire:model.defer="testCar1490996067.test" />
</x-laragen::input.group>