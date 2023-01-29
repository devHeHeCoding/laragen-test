<div class="form-group {{$errors->has('testCar972647089.dr._callie_klocko_id') ? 'error' : ''}}">
    <label for="1">
        {{ trans('cruds.test-car972647089.fields.dr._callie_klocko_id') }}        <input type="text"
               id="1"
               name="testCar972647089.dr._callie_klocko_id"
               class="form-control"
               placeholder="dr._callie_klocko_id"
               wire:model.defer="testCar972647089.dr._callie_klocko_id"
        >
        <span class="error-message">
            {{$errors->first('testCar972647089.dr._callie_klocko_id')}}        </span>
    </label>
</div>
