<x-laragen::input.group label="{{ @trans('cruds.test-car1576106383.fields.test') }}" for="7" :errors="$errors->get('testCar1576106383.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1576106383.test" id="7" wire:model.defer="testCar1576106383.test" />
</x-laragen::input.group>