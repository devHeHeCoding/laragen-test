<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car742407724.fields.test') }}" for="7" :errors="$errors->get('testCar742407724.test')" >
    <x-laragen::input.text placeholder="test" name="testCar742407724.test" id="7" wire:model.defer="testCar742407724.test" />
</x-laragen::input.group>