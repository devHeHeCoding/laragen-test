<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car241054347.fields.test') }}" for="7" :errors="$errors->get('testCar241054347.test')" >
    <x-laragen::input.text placeholder="test" name="testCar241054347.test" id="7" wire:model.defer="testCar241054347.test" />
</x-laragen::input.group>