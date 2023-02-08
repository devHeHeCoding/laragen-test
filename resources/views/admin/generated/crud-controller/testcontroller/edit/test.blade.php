<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car172238442.fields.test') }}" for="7" :errors="$errors->get('testCar172238442.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar172238442.test" id="7" wire:model.defer="testCar172238442.test" />
</x-laragen::input.group>