<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car511807596.fields.test') }}" for="7" :errors="$errors->get('testCar511807596.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car511807596.fields.test')}}" name="testCar511807596.test" id="7" wire:model.defer="testCar511807596.test" />
</x-laragen::input.group>