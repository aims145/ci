
<?php
// sentence teaser
// this function will cut the string by how many words you want
function word_teaser($string, $count){
  $original_string = $string;
  $words = explode(' ', $original_string);
 
  if (count($words) > $count){
   $words = array_slice($words, 0, $count);
   $string = implode(' ', $words);
  }
 
  return $string;
}
 

?>
<style type="text/css">
    .panel-group{
        margin-bottom: 0px;
    }
    .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>    
    
    
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Important Tutorials</h1>
        </div>
        
    </div>
    <?php if(isset($msg) && !is_numeric($msg)){ ?>
    <div class="alert alert-success" role="alert" id="delcred" ><?php echo $msg; ?></div>
    <?php }?>
    <div class="row">
    <div class="col-lg-4">
    <a href="#addtutos" data-toggle="modal" class="btn btn-primary ">Add Tutorials</a>
    </div>
    
    <div id="heads" class="col-lg-3 pull-right">
    	<!-- <form role="form" action="" method="post" >
	<input type="text" name="search" id="search-box" class="form-control" placeholder="Search"/>
	</form> -->
    </div>
    

    </div>

    <p><?php echo $error;?></p>
    <div class="row" id="lists">
        <div class="col-lg-12">
           

    <?php 
    if(is_array($show_tables) || is_object($show_tables)){
    foreach ($show_tables as $tutos){
        
    
    ?>
    

            <h2>
                    <a href="#"><?php echo $tutos->title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Server Admin</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $tutos->Time; ?></p>
                <hr>
                <img class="img-responsive" src="<?php echo $tutos->featured_image;?>" style="width:100%;height: 340px;">
                <hr>
                
                <p><?php
                echo word_teaser($tutos->description, 100); 
                //echo $tutos->description;
                ?></p>
                <hr>
                <a class="btn btn-primary fulltutos" id="fulltutos" href="#full" data-id="<?php echo $tutos->id ?>" data-toggle="modal">Read More</a>

                <hr>
    
    <?php } } ?>

            
        </div>
    </div>
    
    <!-- <div class="row">
        <div class="col-md-12 text-center">
            <ul id="myPager" class="pagination"></ul>
        </div>
    </div> -->
</div>




    <div class="modal fade" id="addtutos">
        <div class="modal-dialog" style="width: 95%;">
            <div class="modal-content">
                <form role="form" action="<?php echo base_url(); ?>server/imp/addtutos" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="text-left">Add Tutorials</h4>
            </div> 
            <div class="modal-body">

                
                
                <div class=" form-group">
                    <label for="title" class=" control-label col-lg-2">Tutorial Title</label>
                    <div class=" col-lg-6">
                        <input type="text" class="form-control" name="title" placeholder="Tutorial Title" required>
                    </div>
                </div>
                <div class=" form-group">
                    <label for="password" class=" control-label col-lg-2">Featured Image</label>
                    <div class=" col-lg-8">
                          
       				 <input id="fileupload" type="file" name="userfile" >
    
                    </div>
                </div>
                     
                <div class=" form-group">
                    <label for="generator" class=" control-label col-lg-2">Description</label>
                    <div class=" col-lg-10">
                        <textarea class="classy-editor" rows="15" name="description"></textarea>
                    </div>
                </div>    
                
            </div>
                      
          
            <div class="modal-footer ">
                
                <button type="submit" class="btn btn-success " >Add</button>
                <a class="btn btn-danger " data-dismiss="modal">Cancel</a>
            </div>
            </form>
        </div>
        </div>
    </div>    
    



    <div class="modal fade" id="full">
        <div class="modal-dialog" style="width: 95%;">
            <div class="modal-content">
                
            <div class="modal-header">
                <h4 class="text-left" id="heading"></h4>
            </div> 
            <div class="modal-body">
			<div class="row">
				<div class="col-lg-12">
				<p class="lead">
                    by <a href="">Server Admin</a>
                </p>
                <p id="time"><span class="glyphicon glyphicon-time posttime"></span> </p>
                <hr>
                <img class="img-responsive featured_image" id="featured_image" src="" style="width:80%;height: 300px;">
                <hr>
                
                <p id="description"></p>
                <hr>	
				</div>
			</div>
			   
            </div>
            <div class="modal-footer ">
                <a class="btn btn-primary pull-left" data-dismiss="modal">Go Back</a>
            </div>          
          
            </form>
        </div>
        </div>
    </div>    
    


<div class="modal fade" id="deletcmd">
    <div class="modal-dialog">

        <div class="modal-content">
        <form class="form-horizontal" method="post" action="<?php echo base_url()?>server/imp/delcmd">
            <div class="modal-header">
                <h4 class="text-center">Confirmation</h4>
            </div>
            <div class="modal-body text-center">
             Are you really want to Delete ?   
            </div>
            <div class="modal-footer">
                <input type="hidden" name="cmdid" class="cmdid" id="cmdid"  value="" />
                <button type="submit" class="btn btn-success pull-left" >YES</button>
                <a class="btn btn-danger pull-right" data-dismiss="modal">NO</a>
                    
            </div>
        </form>
        </div>
    </div>
</div>


    <div class="modal fade" id="editcmd">
        <div class="modal-dialog" style="width: 75%;">
            <div class="modal-content">
                <form role="form" action="<?php echo base_url();?>server/imp/updateone" method="post" class="form-horizontal">
            <div class="modal-header">
                <h4 class="text-left">Edit Command</h4>
            </div>
            <div class="modal-body">

                
                
                <div class=" form-group">
                    <label for="username" class=" control-label col-lg-3">Command Title</label>
                    <div class=" col-lg-8">
                        <input type="text" class="form-control" name="cmdname" id="cmdname"  required>
                    </div>
                </div>
                <div class=" form-group">
                    <label for="password" class=" control-label col-lg-3">Command</label>
                    <div class=" col-lg-8">
                        <input type="text" class="form-control" name="cmd" id="cmd"  required>
                    </div>
                </div>
                     
                <div class=" form-group">
                    <label for="generator" class=" control-label col-lg-3">Description</label>
                    <div class=" col-lg-8">
                        <textarea class="form-control" rows="10" name="description" id="description"></textarea>
                    </div>
                </div>    
                
            </div>
                      
          
            <div class="modal-footer ">
                <input type="hidden" name="id" id="id" value="" />
                <input type="hidden" name="table" value="imp_cmds" />
                <button type="submit" class="btn btn-success " >Update</button>
                <a class="btn btn-danger " data-dismiss="modal">Cancel</a>
            </div>
            </form>
        </div>
        </div>
    </div>  