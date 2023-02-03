<x-laragen::input.group label="{{ @trans('cruds.test-car340427550.fields.test') }}" for="7" :errors="$errors->get('testCar340427550.test')" >
    <x-laragen::input.text placeholder="test" name="testCar340427550.test" id="7" wire:model.defer="testCar340427550.test" />
</x-laragen::input.group>