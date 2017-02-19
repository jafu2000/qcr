<?php 
include_once('inc/conn.php');
include_once('inc/class.php');
$page_title = '';
include('inc/header.php');
?>

<style type="text/css">
	.DefaultAD{
		height: 100px; background-color: #ff0000;
		text-align: center;
	}
</style>


<div class="container top-menu-1" id="main">  
    <br>
	<div class="row">
	    <div class="col-xs-3 " style="height: 1000px;">
	     <div class="panel panel-default" style="height: 1000px;">
	    	     <div class="panel-body">

	    	  </div>
	    	  </div>     
	    
	    </div>

	    <div class="col-xs-9">
	    	
	    	    <!-- 搜索框 -->
	    	    <div class="input-group input-group-lg">
			      <input type="text" class="form-control" placeholder="搜索职位 、 公司名 或 工作地点">
			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i> 搜索职位</button>
			      </span>
			    </div><!-- /input-group -->
			    <div class="ui-m-t-15 ui-m-b-15">
			    推荐搜索：
			    </div>
	    	    <!--  -->

	    	    <br>
	  

	    	<!--  -->
	    	  <div class="panel panel-default" style="height: 1000px;">
	    	     <div class="panel-body">

	    	     </div>
	    	  </div>
	    	<!--  -->

	    </div>


	</div>
</div>
<?php 
include('inc/footer.php');
include('inc/footer_js.php');
?>
<script type="text/javascript">
	$(".container").width('970');
	//document.body.style.backgroundColor="#fff";
</script>
</html>



