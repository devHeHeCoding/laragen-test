<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car214845500.fields.test') }}" for="7" :errors="$errors->get('testCar214845500.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car214845500.fields.test')}}" name="testCar214845500.test" id="7" wire:model.defer="testCar214845500.test" />
</x-laragen::input.group>