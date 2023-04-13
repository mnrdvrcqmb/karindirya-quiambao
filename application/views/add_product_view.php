<?php if (!null == validation_errors()) : ?>
    <div class="alert alert-danger col-md-4" role="alert">
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>
<div class="row p-5"> 
<div class="col-4"></div>
<div class="class col-md-4">
        <!-- when the form is submitted this function in the controller will be called. -->
    <?php echo form_open_multipart ('Products/processAddProduct'); ?>
    <form>
        <br>
        <div class="form-group">
            <label for="prod_name">Product name</label>
            <input name="prod_name" type="text" class="form-control" id="prod_name" placeholder="Product name"value="<?php echo set_value('prod_name'); ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="prod_description">Product Description</label>
            <input name="prod_description" type="text" class="form-control" id="prod_description" placeholder="Prod Description"value="<?php echo set_value('prod_description'); ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="prod_price">Product Price</label>
            <input name="prod_price" type="text" class="form-control" id="prod_price" placeholder="Product Price"value="<?php echo set_value('prod_price'); ?>">
        </div>
        <br>
        <br>
        <button type= "submit" class="btn btn-primary">Submit</button>
        <a type="a" class="btn btn-danger" href="<?= base_url('home/view_products'); ?>">Cancel</a>
    </form>
</div>
</div>