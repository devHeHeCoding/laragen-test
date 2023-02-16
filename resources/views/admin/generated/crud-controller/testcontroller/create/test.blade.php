<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car20837838.fields.test') }}" for="7" :errors="$errors->get('testCar20837838.test')" >
    <x-laragen::input.text placeholder="test" name="testCar20837838.test" id="7" wire:model.defer="testCar20837838.test" />
</x-laragen::input.group>