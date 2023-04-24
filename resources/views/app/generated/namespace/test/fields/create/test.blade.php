<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car800800773.fields.test') }}" for="7" :errors="$errors->get('testCar800800773.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car800800773.fields.test')}}" name="testCar800800773.test" id="7" wire:model.defer="testCar800800773.test" />
</x-laragen::input.group>