<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car377863369.fields.test') }}" for="7" :errors="$errors->get('testCar377863369.test')" >
    <x-laragen::input.text placeholder="test" name="testCar377863369.test" id="7" wire:model.defer="testCar377863369.test" />
</x-laragen::input.group>