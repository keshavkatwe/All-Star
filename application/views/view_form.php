<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>

        <?php $this->load->view('includes/header_plugins') ?>
    </head>
    <body>
        <?php $this->load->view('includes/top_menu') ?>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 left-menu">
                    <?php $this->load->view('includes/left_menu') ?>
                </div>
                <div class="col-md-9 main-content">
                    <h3><?php echo $form_data['form_name'] ?></h3>
                    <hr/>
                    <p><?php echo $form_data['form_description'] ?></p>
                    <br/>

                    <form class="form-horizontal">
                        
                        <?php var_dump($fields_data);
                        
                            foreach ($fields_data as $field) {
                        ?>
                        <div class="form-group">
                            <label for="<?php echo $field['field_schema_title']?>" class="col-sm-4 control-label"><?php echo $field['field_title']?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="<?php echo $field['field_schema_title']?>" name="<?php echo $field['field_schema_title']?>" placeholder="<?php echo $field['field_hint']?>">
                            </div>
                        </div>
                            
                        <?php
                            }
                        ?>
                        
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Record</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
        <?php $this->load->view('includes/bottom_menu') ?>
        <?php $this->load->view('includes/footer_plugins') ?>
    </body>
</html>