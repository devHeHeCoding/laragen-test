<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car749485583.fields.zachery_mohr_id') }}" for="3" :errors="$errors->get('testCar749485583.zachery_mohr_id')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car749485583.fields.zachery_mohr_id')}}" name="testCar749485583.zachery_mohr_id" id="3" wire:model.defer="testCar749485583.zachery_mohr_id" />
</x-laragen::input.group>