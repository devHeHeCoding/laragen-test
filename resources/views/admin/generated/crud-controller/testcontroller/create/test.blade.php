<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car795180617.fields.test') }}" for="7" :errors="$errors->get('testCar795180617.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car795180617.fields.test')}}" name="testCar795180617.test" id="7" wire:model.defer="testCar795180617.test" />
</x-laragen::input.group>