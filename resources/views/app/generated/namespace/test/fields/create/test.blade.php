<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car876504453.fields.test') }}" for="11" :errors="$errors->get('testCar876504453.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car876504453.fields.test')}}" name="testCar876504453.test" id="11" wire:model.defer="testCar876504453.test" />
</x-laragen::input.group>