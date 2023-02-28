<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1761529517.fields.test') }}" for="7" :errors="$errors->get('testCar1761529517.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1761529517.test" id="7" wire:model.defer="testCar1761529517.test" />
</x-laragen::input.group>