<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car572401614.fields.test') }}" for="7" :errors="$errors->get('testCar572401614.test')" >
    <x-laragen::input.text placeholder="test" name="testCar572401614.test" id="7" wire:model.defer="testCar572401614.test" />
</x-laragen::input.group>