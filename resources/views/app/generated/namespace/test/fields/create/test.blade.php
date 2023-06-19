<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car631872373.fields.test') }}" for="7" :errors="$errors->get('testCar631872373.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car631872373.fields.test')}}" name="testCar631872373.test" id="7" wire:model.defer="testCar631872373.test" />
</x-laragen::input.group>