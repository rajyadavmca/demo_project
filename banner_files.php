<div id="p-select">
	<div id="paginate-slider1" class="pagination"></div>
</div>
<div id="slider1" class="sliderwrapper">

<?php
	
	$sql_middle_banner = "select * from iona_banners where banner_status='1' order by banner_order asc";
	$res_middle_banner = $db->siri_query($sql_middle_banner);
	while($line_middle_banner = $db->siri_fetch_array($res_middle_banner))
	{		
		 
?>

<div class="contentdiv">
<img src="<?=stripslashes($line_middle_banner['banner_thumb'])?>" alt="<?=stripslashes($line_middle_banner['banner_alt_text'])?>" border="0" />

</div>

<?php } ?>



<script type="text/javascript">

featuredcontentslider.init({
id: "slider1", //id of main slider DIV
contentsource: ["inline", ""], //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
toc: "#increment", //Valid values: "#increment", "markup", ["label1", "label2", etc]
nextprev: ["", ""], //labels for "prev" and "next" links. Set to "" to hide.
enablefade: [true, 0.2], //[true/false, fadedegree]
autorotate: [true, 3000], //[true/false, pausetime]
onChange: function(previndex, curindex){ //event handler fired whenever script changes slide
//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
}
})

</script>
</div>