<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car655714358.fields.test') }}" for="7" :errors="$errors->get('testCar655714358.test')" >
    <x-laragen::input.text placeholder="test" name="testCar655714358.test" id="7" wire:model.defer="testCar655714358.test" />
</x-laragen::input.group>