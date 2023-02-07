<x-laragen::input.group label="{{ @trans('cruds.test-car45754642.fields.test') }}" for="7" :errors="$errors->get('testCar45754642.test')" >
    <x-laragen::input.text placeholder="test" name="testCar45754642.test" id="7" wire:model.defer="testCar45754642.test" />
</x-laragen::input.group>