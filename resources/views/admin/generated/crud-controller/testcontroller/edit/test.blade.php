<x-laragen::input.group label="{{ @trans('cruds.test-car319591901.fields.test') }}" for="7" :errors="$errors->get('testCar319591901.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar319591901.test" id="7" wire:model.defer="testCar319591901.test" />
</x-laragen::input.group>