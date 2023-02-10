<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car847894616.fields.test') }}" for="7" :errors="$errors->get('testCar847894616.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar847894616.test" id="7" wire:model.defer="testCar847894616.test" />
</x-laragen::input.group>