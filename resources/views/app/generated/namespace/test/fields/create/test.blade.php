<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2100361536.fields.test') }}" for="7" :errors="$errors->get('testCar2100361536.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2100361536.fields.test')}}" name="testCar2100361536.test" id="7" wire:model.defer="testCar2100361536.test" />
</x-laragen::input.group>