
<style type="text/css">

html body {
	margin-top: 50px !important;
	margin: 0px;
}

#top_form {
	position: fixed;
	top:0;
	text-align:center;
	width: 100%;
	background-color: darkred;
	margin:0;
	z-index: 2100000000;
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-o-user-select: none;
	border-bottom:1px solid gray;
	height:37px;
	line-height:35px;
}

#top_form input[name=url] {
	width: 550px;
	height: 20px;
	padding: 5px;
	font: 13px "Helvetica Neue",Helvetica,Arial,sans-serif;
	border: 0px none;
	background: none repeat scroll 0% 0% #FFF;
}

#top_form input[name=url]:hover {
	width: 550px;
	height: 20px;
	padding: 5px;
	border-radius: 2px;
	font: 13px "Helvetica Neue",Helvetica,Arial,sans-serif;
	border: 0px none;
	background: none repeat scroll 0% 0% #FFF;
}

.button {
	border: none;
	border-radius: 2px;
	height: 20;
}

.button:hover {
	border: none;
	border-radius: 0px;
	height: 20;
}

</style>

<script>
var url_text_selected = false;

function smart_select(ele){

	ele.onblur = function(){
		url_text_selected = false;
	};

	ele.onclick = function(){
		if(url_text_selected == false){
			this.focus();
			this.select();
			url_text_selected = true;
		}
	};
}
</script>

<div id="top_form">

	<div style="width:800px; margin:0 auto;">

		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
			<input type="button" class="button" value="Home" onclick="window.location.href='/'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" class="button" value="Go">
		</form>

	</div>

</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>
