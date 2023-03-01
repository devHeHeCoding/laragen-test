<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2033733895.fields.test') }}" for="7" :errors="$errors->get('testCar2033733895.test')" >
    <x-laragen::input.text placeholder="test" name="testCar2033733895.test" id="7" wire:model.defer="testCar2033733895.test" />
</x-laragen::input.group>