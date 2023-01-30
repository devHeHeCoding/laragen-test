<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car281965965.fields.test') }}        <input type="number"
               id="7"
               name="testCar281965965.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar281965965.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
