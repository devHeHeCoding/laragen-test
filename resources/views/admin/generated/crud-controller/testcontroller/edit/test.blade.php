<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car818681802.fields.test') }}" for="7" :errors="$errors->get('testCar818681802.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar818681802.test" id="7" wire:model.defer="testCar818681802.test" />
</x-laragen::input.group>