<hr/>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Field Name</label>
            <input type="text" class="form-control" name="field-name[<?php echo $index;?>]" placeholder="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Field Hint</label>
            <input type="text" class="form-control" name="field-hint[<?php echo $index;?>]" placeholder="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Field Type</label>
            <select class="form-control" name="field-type[<?php echo $index;?>]">
                <option>Text</option>
                <option>Paragraph</option>
                <option>Dropdown</option>
                <option>Multi Choice</option>
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Dropdown Values</label>
            <textarea rows="6" class="form-control" name="field-extra[<?php echo $index;?>]"></textarea>
        </div>
    </div>

    <div class="col-md-4">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" name="field-required[<?php echo $index;?>]">
                Required
            </label>
        </div>
    </div>
</div>