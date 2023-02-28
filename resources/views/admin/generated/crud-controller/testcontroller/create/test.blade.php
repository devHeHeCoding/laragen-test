<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1819308966.fields.test') }}" for="7" :errors="$errors->get('testCar1819308966.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1819308966.test" id="7" wire:model.defer="testCar1819308966.test" />
</x-laragen::input.group>