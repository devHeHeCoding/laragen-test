<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car907212109.fields.test') }}" for="7" :errors="$errors->get('testCar907212109.test')" >
    <x-laragen::input.text placeholder="test" name="testCar907212109.test" id="7" wire:model.defer="testCar907212109.test" />
</x-laragen::input.group>