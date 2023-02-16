<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car664264609.fields.test') }}" for="7" :errors="$errors->get('testCar664264609.test')" >
    <x-laragen::input.text placeholder="test" name="testCar664264609.test" id="7" wire:model.defer="testCar664264609.test" />
</x-laragen::input.group>