<div class="form-group {{$errors->has('testCar1513758171.adah_king_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1513758171.fields.adah_king_id') }}        <input type="text"
               id="3"
               name="testCar1513758171.adah_king_id"
               class="form-control"
               placeholder="adah_king_id"
               wire:model.defer="testCar1513758171.adah_king_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1513758171.adah_king_id')}}        </span>
    </label>
</div>
