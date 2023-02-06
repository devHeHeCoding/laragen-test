<x-laragen::input.group label="{{ @trans('cruds.test-car851343037.fields.test') }}" for="7" :errors="$errors->get('testCar851343037.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar851343037.test" id="7" wire:model.defer="testCar851343037.test" />
</x-laragen::input.group>