<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car251616098.fields.test') }}" for="7" :errors="$errors->get('testCar251616098.test')" >
    <x-laragen::input.text placeholder="test" name="testCar251616098.test" id="7" wire:model.defer="testCar251616098.test" />
</x-laragen::input.group>