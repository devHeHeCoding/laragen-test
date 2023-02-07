<x-laragen::input.group label="{{ @trans('cruds.test-car231076716.fields.test') }}" for="7" :errors="$errors->get('testCar231076716.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar231076716.test" id="7" wire:model.defer="testCar231076716.test" />
</x-laragen::input.group>