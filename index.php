<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
		</script>
		<script type="text/javascript">
		  $(document).ready(function(){
			  $('#thetest').click(function(e){
				  e.preventDefault();
				  $.get('test.html')
				  .success(function(data) {
				      $('#content').html(data);
				      alert('hi');
				  });
				});
			});
		</script>
		<style type="text/css">
			.theform {
			}
			.form-label{
		        width:250px !important;
		    }
		    .form-label-left{
		        width:250px !important;
		    }
		    .form-line{
		        padding-top:12px;
		        padding-bottom:12px;
		    }
		    .form-label-right{
		        width:250px !important;
		    }
		    .form-all{
		        width:650px;
		        color:#555 !important;
		        font-family:'Lucida Grande';
		        font-size:14px;
		        border:1px solid black;
		        background-color: beige;
		    }
		    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
		        color:#555;
		    }
		    .form-section, .form-section li
			{
			    list-style-type: none;
			}
		</style>
	</head>
	<body>
		<h1>Welcome to my PHP sample page</h1>
		<ul>
			<li><a href="test.html?action=add" id="thetest">A Test</a></li>
			<li></li>
			<li></li>
		</ul>
		<div id="content">
			<p>This is the main section where content will be displayed</p>
		</div>
	</body>
</html>