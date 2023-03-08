<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car99630450.fields.test') }}" for="7" :errors="$errors->get('testCar99630450.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car99630450.fields.test')}}" name="testCar99630450.test" id="7" wire:model.defer="testCar99630450.test" />
</x-laragen::input.group>