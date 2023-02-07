<x-laragen::input.group label="{{ @trans('cruds.test-car385831353.fields.test') }}" for="7" :errors="$errors->get('testCar385831353.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar385831353.test" id="7" wire:model.defer="testCar385831353.test" />
</x-laragen::input.group>