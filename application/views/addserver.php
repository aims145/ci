<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Server List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-3">    
                                    
                                        <?php 
                                        if(!isset($abc)){
                                            
                                        
                                        ?>
                                    <form role="form" action="/ci/server/insertserver" method="post">
                                <h5 class="lead">Add Server</h5>
                                <div class="form-group">
                                
                                    <input name="servername" class="form-control" id="servername" type="text" placeholder="Server Name" required>
                                    <p></p>
                                    <input name="serverip" class="form-control" id="serverip" type="text" placeholder="Server IP" required>
                                    <p></p>
                                    <input name="serverremark" class="form-control" id="serverremark" type="text" placeholder="Remark" required>
                                    <p></p>
                                    <button type="submit" class="btn btn-primary">Add Server</button><p></p>
                                    
                                    <?php 
                                    if(isset($message)){
                                    echo '<div class="alert alert-success">' . $message . '</div>';   
                                    }
                                        
                                       
                                    ?>     
                                </div></form>
                                <?php } else{ ?>
                                
                               <?php foreach($abc as $show_table){
                                    ?>
                                    <form role="form" action="/ci/server/updateserver" method="post">
                                <h5 class="lead">Update Server</h5>
                                <div class="form-group">
                                
                                    <input name="servername" class="form-control" id="servername" type="text" placeholder="Server Name" value="<?php 
                                    echo $show_table->server_name; ?>" required>
                                    <p></p>
                                    <p class="lead"><?php echo $show_table->server_ip; ?></p>
                                    <input name="serverip" class="form-control" id="serverip" type="hidden" placeholder="Server IP" value="<?php echo $show_table->server_ip; ?>" >
                                    
                                    <input name="serverremark" class="form-control" id="serverremark" type="text" placeholder="Remark" value="<?php echo $show_table->Remark; ?>" required>
                                    <p></p>
                                    <button type="submit" class="btn btn-primary">Update Server</button><p></p>
                                    
                                    <?php 
                                    if(isset($message)){
                                    echo '<div class="alert alert-success">' . $message . '</div>';   
                                } }?>     
                                </div>
                                <?php }?>
                            </form> 
                            </div>   
                            </div> <!--Ending Form row-->
                        </div>
                        <!-- /.panel-heading -->
                       
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->