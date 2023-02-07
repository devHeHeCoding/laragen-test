<x-laragen::input.group label="{{ @trans('cruds.test-car672712618.fields.test') }}" for="7" :errors="$errors->get('testCar672712618.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar672712618.test" id="7" wire:model.defer="testCar672712618.test" />
</x-laragen::input.group>