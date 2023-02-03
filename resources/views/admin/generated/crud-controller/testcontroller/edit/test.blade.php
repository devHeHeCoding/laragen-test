<x-laragen::input.group label="{{ @trans('cruds.test-car465974586.fields.test') }}" for="7" :errors="$errors->get('testCar465974586.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar465974586.test" id="7" wire:model.defer="testCar465974586.test" />
</x-laragen::input.group>