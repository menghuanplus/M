<?php $this->render("header"); ?>

<div style="text-align: center;line-height: 40px;margin-top:200px;font-size:40px;color:#ccc;">
	<p>{{ title }}</p>
	<p style="font-size:20px;">{{ description }}</p>
</div>

<?php $this->render("footer"); ?>
<?php $this->load_js("/static/js/index.js"); ?>
<script>
	var vue = new Vue({
		el : "#app",
		data : function(){
			return <?php echo json_encode($result);?>;
		}
	});
</script>