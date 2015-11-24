<?php foreach($host as $monitored){
$newhost[] = $monitored->host;    
}
?>


<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Monitor Hosts</h1>
        </div>
        
    </div>
    <?php if(isset($msg) && !is_numeric($msg)){ ?>
    <div class="alert alert-success" role="alert" id="delcred" ><?php echo $msg; ?></div>
    <?php }?>
    
<div class="row">
	<div class="col-lg-6">
		<form for="" method="post" action="hostadd">
					
		<select id="hostmultiselect" name="servers[]" multiple="multiple">
			<?php 
			foreach ($allhost as $server) {
                            if(!in_array($server->server_ip, $newhost)) {
			?>
			<option value="<?php echo $server->server_ip; ?>"><?php echo $server->server_ip." - ".$server->server_name; ?></option>	
				
				
				
                            <?php } 	}
			
			?>
			
		</select>
		
		<p></p>
		<p ><input class="btn btn-primary" type="submit" value="Add Host" /></p>
		</form>
	</div>

<div class="row">
	<div class="col-lg-12">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Server Name</th>
        <th>Server IP</th>
        <th>Host Status</th>
        <th>Last Down Time</th>
        <th>Monitor</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($host as $monitored){
          ?>
        <tr>
            <td><?php echo $monitored->host_name ?></td>
            <td><?php echo $monitored->host ?></td>
            <td><?php echo $monitored->status ?></td>
            <td><?php 
            if($monitored->downtime == ''){
                echo "Server didn't get down yet";
            }  else {
                    echo $monitored->downtime;
            }
            ?></td>
            <td><?php 
            if($monitored->flag == '0'){
            echo "<input type='button' class='btn btn-warning monitor' data-id='".$monitored->id."' value='OFF' >";
            }
            else{
            echo "<input type='button' class='btn btn-primary monitor' data-id='".$monitored->id."' value='ON'>";    
            }
             ?>
            </td>
        </tr>  
        
        
      <?php }
      ?>
      </tbody>
  </table>
		
		
		
		
		
	</div>
</div>
	
	
</div>    
    
    
    
    
</div>
