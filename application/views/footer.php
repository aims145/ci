 <!-- <div class="row">
 	<div class="col-lg-12">
 		<nav class="navbar navbar-default navbar-static-bottom" role="navigation" style="margin-bottom: 0">
            

            <ul class="nav navbar-top-links navbar-right">
                
            </ul>
            <!-- /.navbar-top-links -->

            
       <!-- </nav>
 	</div>
 </div> -->
 <!-- jQuery -->
    <script src="/ci/assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/ci/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/ci/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="/ci/assets/dist/js/sb-admin-2.js"></script>
    <script src="/ci/assets/dist/js/moment.js"></script>
<script src="/ci/assets/dist/js/bootstrap-datepicker.js"></script>
<script src="/ci/assets/dist/js/bootstrap-timepicker.js"></script>
<script src="/ci/assets/dist/js/pgenerator.js"></script>
<script src="/ci/assets/dist/js/bootstrap-paginator.min.js"></script>
<script src="/ci/assets/dist/js/jquery.classyedit.js"></script>




<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/ci/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/ci/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/ci/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="/ci/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/ci/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="/ci/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- <script type="text/javascript" src="/ci/assets/dist/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://www.datatables.net/release-datatables/extensions/TableTools/js/dataTables.tableTools.js">
	
</script> -->

<script src="/ci/assets/choosen/chosen.jquery.js" type="text/javascript"></script>
  <script src="/ci/assets/choosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
    
  </script>    
    <script>
// $(document).ready(function(){
    // $('#myTable').dataTable();
// });

$(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                "copy",
                "csv",
                "xls",
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "sPdfMessage": "You have taken this Data from CV Server Admin App"
                },
                "print"
            ]
        }
    } );
} );
</script>
<script type="text/javascript">
    $(document).on("click", ".delete", function () {
     var credid = $(this).data('id');
     //alert(credid);
     document.getElementById('credid').value = credid;
     //$(e.currentTarget).find('input[name="credid"]').val(credid);
     //$(".modal-body #credid").val( Id );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
      //$('#deletecred').modal('show');
});

function rhtmlspecialchars(str) {
 if (typeof(str) == "string") {
  str = str.replace(/&gt;/ig, ">");
  str = str.replace(/&lt;/ig, "<");
  str = str.replace(/&#039;/g, "'");
  str = str.replace(/&quot;/ig, '"');
  str = str.replace(/&amp;/ig, '&'); /* must do &amp; last */
  }
 return str;
 }

function editcred(element){
     $(document).on("click", ".edit", function () {
     var credid = $(this).data('id');
     
     document.getElementById('credid2').value = credid;
     
});
    var name = element.parentNode.parentNode.cells[0].innerHTML ;
    var ip = element.parentNode.parentNode.cells[1].innerHTML ;
    var proto = element.parentNode.parentNode.cells[2].innerHTML ;
    var username = element.parentNode.parentNode.cells[3].innerHTML ;
    var pass = rhtmlspecialchars(element.parentNode.parentNode.cells[4].innerHTML);
    document.getElementById('servername').value = name ; 
    document.getElementById('serverip').value = ip ; 
    document.getElementById('protocol').value = proto ; 
    document.getElementById('username').value = username ; 
    document.getElementById('password').value = pass ; 

}

$(document).on("click", ".delserver", function () {
     var serverid = $(this).data('id');
     //alert(credid);
     document.getElementById('serverid').value = serverid;
     
});

function editserver(element){
     $(document).on("click", ".editserver", function () {
     var serverid = $(this).data('id');
     
     document.getElementById('serverid2').value = serverid;
     
});
    var name = element.parentNode.parentNode.cells[0].innerHTML ;
    var ip = element.parentNode.parentNode.cells[1].innerHTML ;
    var remark = element.parentNode.parentNode.cells[2].innerHTML ;
    
    document.getElementById('servername').value = name ; 
    document.getElementById('serverip').value = ip ; 
    document.getElementById('remark').value = remark ; 
    
}


$(document).on("click", ".deletecmd", function () {
     var cmdid = $(this).data('id');
     //alert(credid);
     document.getElementById('cmdid').value = cmdid;
     
});

$(document).on("click", ".deletelink", function () {
     var linkid = $(this).data('id');
     //alert(credid);
     document.getElementById('linkid').value = linkid;
     
});

$(document).on("click", ".editcmd", function () {
     var cmdid = $(this).data('id');
     $.ajax({
      type : 'post',
      url  : '<?php echo base_url();?>server/imp/selectone',
      data : "cmdid="+cmdid+"&table=imp_cmds",
      //dataType : 'json',
      success : function(res) {
          
//          var obj = $.parseJSON(res);
          var dataObj = JSON.parse(res);
        //console.log(dataObj[0].title); // to see the object
        var title = dataObj[0].title;
        var cmd = dataObj[0].command;
        var des = dataObj[0].description;
        var id = dataObj[0].id;
        // your code here
        document.getElementById('cmdname').value = title;
        document.getElementById('cmd').value = cmd;
        document.getElementById('description').innerHTML = des;
        document.getElementById('id').value = id;
        }
      
    });
             //document.getElementById('linkid').value = linkid;
     
});

$(document).on("click", ".editlink", function () {
     var linkid = $(this).data('id');
     $.ajax({
      type : 'post',
      url  : '<?php echo base_url();?>server/imp/selectone',
      data : "cmdid="+linkid+"&table=imp_links",
      //dataType : 'json',
      success : function(res) {
          
//          var obj = $.parseJSON(res);
          var dataObj = JSON.parse(res);
        //console.log(dataObj[0].title); // to see the object
        var title = dataObj[0].title;
        var link = dataObj[0].link;
        var des = dataObj[0].description;
        var id = dataObj[0].id;
        // your code here
        document.getElementById('linkname').value = title;
        document.getElementById('links').value = link;
        document.getElementById('description').innerHTML = des;
        document.getElementById('id').value = id;
        }
      
    });
             //document.getElementById('linkid').value = linkid;
     
});

</script>
<script>

$(document).ready(function() {

    $(".classy-editor").ClassyEdit();

});

</script>

<script type='text/javascript'>
        var options = {
            currentPage: 1,
            totalPages: 10
        }

        $('#example').bootstrapPaginator(options);
    </script>
<script type="text/javascript">
$(document).ready(function(){
    	
    $('#generator').pGenerator({
        'bind': 'click',
        'passwordElement': '#usrpass',
//        'displayElement': '#my-display-element',
        'passwordLength': 16,
        'uppercase': true,
        'lowercase': true,
        'numbers':   true,
        'specialChars': true
//        'onPasswordGenerated': function(generatedPassword) {
//        	alert('My new generated password is ' + generatedPassword);
//        }
    });
});            
</script>


<script type="text/javascript">
            $(function () {
               // $('#datetimepicker1').datetimepicker();
               $('#datetimepicker1').datepicker({
                    format: 'yyyy-mm-dd',
                    startDate: '0d'
                   
                });
                
            });
        </script>


<script type="text/javascript">
  $(function() {
    $('.timepicker').datetimepicker({
      pickDate: false
    });
  });
</script>


<!--Show tutorial with full width -->
<script type="text/javascript">
	
$(document).on("click", ".fulltutos", function () {
     var tutoid = $(this).data('id');
     //alert(tutoid);
     //document.getElementById('serverid').value = serverid;
     
	   $.ajax({
      type : 'post',
      url  : '<?php echo base_url();?>server/imp/selecttuto',
      data : "tutoid="+tutoid+"&table=tutorials",
      dataType : 'json',
      success : function(res) {
      //console.log(res);

        //console.log(res[0].title); // to see the object
         var title = res[0].title;
         var image = res[0].featured_image;
         var des = res[0].description;
         var id = res[0].id;
         var time = res[0].Time;
         
        // // your code here
        document.getElementById('heading').innerHTML = title;
        $("#featured_image").attr("src",image);
        // document.getElementById('').innerHTML = time;
        $( "#time" ).append('Posted on '+time);
        document.getElementById('description').innerHTML = des;
        // document.getElementById('id').value = id;
        }
      
    });     
     
});
</script>




<!-- <script type="text/javascript">
	$(document).ready(function(){
	$("#search-box").keyup(function(){
		
//		var text = $(this).val();
//		//console.log(text);
		
		$.ajax({
		type: "POST",
		url: "<?php echo base_url(); ?>server/imp/searchresult",
		data:'string='+$(this).val()+'&table=imp_cmds',
		dataType : 'json',
		// beforeSend: function(){
			// $("#search-box").css("background","#FFF url(http://localhost/ci/LoaderIcon.gif) no-repeat 165px");
		// },
		success: function(data){
                    var i;
                    var id = new Array();
                    var titles = new Array();
                    var command = new Array();
                    var description = new Array();
                    for(i = 0; i < data.length; i++){
                    titles[i] = data[i].title;
                    command[i] = data[i].command;
                    id[i] = data[i].id;
                    description[i] = data[i].description;
                    }
                    $('.hidepanel').slideUp();
                    if($("#search-box").val() === ''){
                    $('.hidepanel').slideDown();
                    }
//                $("#lists").find(".hidepanel").slideDown();
//$("#lists").find(".searchtag:Contains(" + titles + ")").parent().parent().parent().parent().parent().slideDown();
		}
		});
	});
});
</script> -->

<script> 
 
(function ($) {
  jQuery.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };
  
  function listFilter(header, list) {
    var form = $("<form>").attr({"class":"form-group","action":"#"}),
        input = $("<input>").attr({"class":"form-control","type":"text","placeholder":"Search"});
    $(form).append(input).appendTo(header);
 
    $(input)
      .change( function () {
        var filter = $(this).val();
        if(filter) {
          $(list).find(".searchtag:not(:Contains(" + filter + "))").parent().parent().parent().parent().parent().slideUp();
          $(list).find(".searchtag:Contains(" + filter + ")").parent().parent().parent().parent().parent().slideDown();
        } else {
          $(list).find(".hidepanel").slideDown();
        }
        return false;
      })
    .keyup( function () {
        $(this).change();
    });
  }
 
  $(function () {
    listFilter($("#heads"), $("#lists"));
  });
}(jQuery));
 
  </script>
  <!-- <script type="text/javascript">
  	/* pagination plugin */
$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 7,
            showPrevNext: false,
            numbersPerPage: 1,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pagination');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    var curr = 0;
    pager.data("curr",curr);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
    }
    
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
  
    if (settings.numbersPerPage>1) {
       $('.page_link').hide();
       $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
  	pager.children().eq(0).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
       
        if (settings.numbersPerPage>1) {
       		$('.page_link').hide();
       		$('.page_link').slice(page, settings.numbersPerPage+page).show();
    	}
      
      	pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};
/* end plugin */
  	
  	
$(document).ready(function(){
    
  $('#accordion').pageMe({pagerSelector:'#myPager',childSelector:'.panel',showPrevNext:true,hidePageNumbers:false,perPage:5});
    
});
  </script> -->
</body>

</html>