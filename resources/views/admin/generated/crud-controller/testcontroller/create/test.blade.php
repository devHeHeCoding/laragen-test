<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1477719599.fields.test') }}" for="7" :errors="$errors->get('testCar1477719599.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1477719599.test" id="7" wire:model.defer="testCar1477719599.test" />
</x-laragen::input.group>