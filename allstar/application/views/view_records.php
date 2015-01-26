<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Records</title>
        
        <?php $this->load->view('includes/header_plugins')?>
    </head>
    <body>
        <?php $this->load->view('includes/top_menu')?>
        

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 main-content">
                    <h3><?php echo $form_name;?></h3>
                    <hr/>
                    <table class="table">
                        <thead>
                            <tr>
                                <?php 
                                foreach ($schema as $value) {
                                    echo '<td>'.$value['field_title'].'</td>';
                                }
                                ?>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($records as $rec) {
                                echo '<tr>';
                                    foreach ($schema as $sch) {
                                        echo '<td>'.$rec[$sch['field_schema_title']].'</td>';
                                    }
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>

        </div>
        <?php $this->load->view('includes/bottom_menu')?>
        <?php $this->load->view('includes/footer_plugins')?>
    </body>
</html>