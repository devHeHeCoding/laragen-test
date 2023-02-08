<x-laragen::input.group label="{{ @trans('cruds.test-car342094486.fields.test') }}" for="7" :errors="$errors->get('testCar342094486.test')" >
    <x-laragen::input.text placeholder="test" name="testCar342094486.test" id="7" wire:model.defer="testCar342094486.test" />
</x-laragen::input.group>