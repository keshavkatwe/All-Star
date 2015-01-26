<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        
        <?php $this->load->view('includes/header_plugins')?>
    </head>
    <body>
        <?php $this->load->view('includes/top_menu')?>
        

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 left-menu">
                    <?php $this->load->view('includes/left_menu')?>
                </div>
                <div class="col-md-9 main-content">
                    <div class="text-center">   
                        <h1>Welcome to All Star</h1>
                    </div>
                    <br/><br/><br/>

                    <div class="row">
                        <div class="col-md-offset-4 col-md-4 text-center">
                            <?php 
                                foreach ($forms as $value) {
                                    echo '<a class="btn btn-primary" href="'.  base_url('view_form/'.$value['form_id']).'">'.$value['form_name'].'</a>';
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php $this->load->view('includes/bottom_menu')?>
        <?php $this->load->view('includes/footer_plugins')?>
    </body>
</html>