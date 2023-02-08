<x-laragen::input.group label="{{ @trans('cruds.test-car572200391.fields.test') }}" for="7" :errors="$errors->get('testCar572200391.test')" >
    <x-laragen::input.text placeholder="test" name="testCar572200391.test" id="7" wire:model.defer="testCar572200391.test" />
</x-laragen::input.group>