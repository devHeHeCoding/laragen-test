<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1841028066.fields.test') }}" for="7" :errors="$errors->get('testCar1841028066.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1841028066.test" id="7" wire:model.defer="testCar1841028066.test" />
</x-laragen::input.group>