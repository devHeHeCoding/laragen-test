<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1164626058.fields.test') }}" for="7" :errors="$errors->get('testCar1164626058.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1164626058.test" id="7" wire:model.defer="testCar1164626058.test" />
</x-laragen::input.group>