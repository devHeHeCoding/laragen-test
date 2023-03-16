<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car940083059.fields.test') }}" for="7" :errors="$errors->get('testCar940083059.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car940083059.fields.test')}}" name="testCar940083059.test" id="7" wire:model.defer="testCar940083059.test" />
</x-laragen::input.group>