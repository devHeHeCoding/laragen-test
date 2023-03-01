<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car313949386.fields.test') }}" for="7" :errors="$errors->get('testCar313949386.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar313949386.test" id="7" wire:model.defer="testCar313949386.test" />
</x-laragen::input.group>