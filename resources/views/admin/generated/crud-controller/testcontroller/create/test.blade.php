<x-laragen::input.group label="{{ @trans('cruds.test-car138184623.fields.test') }}" for="7" :errors="$errors->get('testCar138184623.test')" >
    <x-laragen::input.text placeholder="test" name="testCar138184623.test" id="7" wire:model.defer="testCar138184623.test" />
</x-laragen::input.group>