<style>

//.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#search-box{padding: 10px;border: #F0F0F0 1px solid;}
#search-box2{padding: 10px;border: #F0F0F0 1px solid;}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "http://10.222.9.6/ci/pkgslist.php",
		data:'keyword='+$(this).val()+'&status=Available',
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(http://localhost/ci/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});


$(document).ready(function(){
	$("#search-box2").keyup(function(){
		$.ajax({
		type: "POST",
		url: "http://10.222.9.6/ci/pkgslist.php",
		data:'keyword='+$(this).val()+'&status=Installed',
		beforeSend: function(){
			$("#search-box2").css("background","#FFF url(http://localhost/ci/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box2").show();
			$("#suggesstion-box2").html(data);
			$("#search-box2").css("background","#FFF");
		}
		});
	});
});
//To select country name
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

function selectCountry1(val) {
$("#search-box2").val(val);
$("#suggesstion-box2").hide();
}

</script>
<div id="page-wrapper">
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Packages</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    
    <div class="panel panel-default">
                    <div class="panel-heading">
                        All Available and Installed Packages on Server
                    </div>
                    <div class="panel-body">
      
                        <div class="row"> 
                            
                              <div class="col-lg-3">  
                                <div class="form-group">
                                    <label for="name">Search Available Packages</label>
                                    <div class="frmSearch">
	<input type="text" id="search-box" placeholder="Packages Name" />
	<div id="suggesstion-box"></div>
</div>
                                </div>
                              </div> 
                            
                            <div class="col-lg-3">  
                                <div class="form-group">
                                    <label for="name">Search Installed Packages</label>
                                    <div class="frmSearch2">
	<input type="text" id="search-box2" placeholder="Packages Name" />
	<div id="suggesstion-box2"></div>
</div>
                                </div>
                              </div> 
                            
                                                            
                        </div>
                           <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                               </form>  
                    </div>

    </div>
  
</div>