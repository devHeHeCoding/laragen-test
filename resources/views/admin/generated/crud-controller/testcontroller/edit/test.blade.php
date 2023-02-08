<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car289518111.fields.test') }}" for="7" :errors="$errors->get('testCar289518111.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar289518111.test" id="7" wire:model.defer="testCar289518111.test" />
</x-laragen::input.group>