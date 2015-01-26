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
                    
                </div>
            </div>

        </div>
        <?php $this->load->view('includes/bottom_menu')?>
        <?php $this->load->view('includes/footer_plugins')?>
    </body>
</html>