<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Form</title>

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
                    <form method="post">
                        <h3>Add Form</h3>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form-title">Form Title</label>
                                    <input type="text" class="form-control" id="form-title" name="form-title" placeholder=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Form Description</label>
                                    <textarea class="form-control" name="form-description" placeholder="" rows="3"></textarea>
                                </div>
                            </div>
                        </div>


                        <div id="fields-box">
                            <?php 
                            $data = array('index' => 0);
                            $this->load->view('subviews/add_field',$data) ?>
                        </div>
                        <hr/>
                        <div>
                            <button type="button" class="btn btn-default" id="btn-addField" onclick="add_field()">Add Field</button>
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
                    <br/>
                </div>
            </div>

        </div>
        <?php $this->load->view('includes/bottom_menu') ?>
        <?php $this->load->view('includes/footer_plugins') ?>
        
        
        <script>
            var index = 1;
            function add_field()
            {
                $.ajax({
                    type: "post",
                    url: '<?php echo site_url('add_form/add_field')?>',
                    data: 'index='+index,
                    success: function(result)
                    {	
                        $('#fields-box').append(result);
                        index++;
                    }
                });
            }
        </script>
        
    </body>
</html>