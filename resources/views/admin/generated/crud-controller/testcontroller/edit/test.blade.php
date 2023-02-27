<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car175351433.fields.test') }}" for="7" :errors="$errors->get('testCar175351433.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar175351433.test" id="7" wire:model.defer="testCar175351433.test" />
</x-laragen::input.group>