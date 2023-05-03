<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car98040217.fields.test') }}" for="7" :errors="$errors->get('testCar98040217.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car98040217.fields.test')}}" name="testCar98040217.test" id="7" wire:model.defer="testCar98040217.test" />
</x-laragen::input.group>