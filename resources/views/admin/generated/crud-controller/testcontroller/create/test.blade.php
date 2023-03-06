<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car925481405.fields.test') }}" for="7" :errors="$errors->get('testCar925481405.test')" >
    <x-laragen::input.text placeholder="test" name="testCar925481405.test" id="7" wire:model.defer="testCar925481405.test" />
</x-laragen::input.group>