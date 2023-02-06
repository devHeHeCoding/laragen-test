<x-laragen::input.group label="{{ @trans('cruds.test-car970372432.fields.test') }}" for="7" :errors="$errors->get('testCar970372432.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar970372432.test" id="7" wire:model.defer="testCar970372432.test" />
</x-laragen::input.group>