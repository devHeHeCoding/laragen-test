<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1330947832.fields.pearl_tremblay_id') }}" for="5" :errors="$errors->get('testCar1330947832.pearl_tremblay_id')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1330947832.fields.pearl_tremblay_id')}}" name="testCar1330947832.pearl_tremblay_id" id="5" wire:model.defer="testCar1330947832.pearl_tremblay_id" />
</x-laragen::input.group>