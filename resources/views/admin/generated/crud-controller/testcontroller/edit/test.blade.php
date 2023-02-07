<x-laragen::input.group label="{{ @trans('cruds.test-car861605239.fields.test') }}" for="7" :errors="$errors->get('testCar861605239.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar861605239.test" id="7" wire:model.defer="testCar861605239.test" />
</x-laragen::input.group>