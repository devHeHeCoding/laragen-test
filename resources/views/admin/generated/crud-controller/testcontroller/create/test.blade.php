<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car11382236.fields.test') }}" for="7" :errors="$errors->get('testCar11382236.test')" >
    <x-laragen::input.text placeholder="test" name="testCar11382236.test" id="7" wire:model.defer="testCar11382236.test" />
</x-laragen::input.group>