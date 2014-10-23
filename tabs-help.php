<div class="wrap">
	<?php echo "<h2>".__(tabs_plugin_name.' Help')."</h2>";?>
    <br />

		  
        
        
<h3>Have any issue ?</h3>

<p>Feel free to Contact with any issue for this plugin, , Ask any question via forum <a href="<?php echo tabs_qa_url; ?>"><?php echo tabs_qa_url; ?></a> <strong style="color:#139b50;">(free)</strong>


</p>

<?php

$tabs_customer_type = get_option('tabs_customer_type');
$tabs_version = get_option('tabs_version');


?>
<?php
if($tabs_customer_type=="free")
	{
		echo '<p>You are using <strong> '.$tabs_customer_type.' version  '.$tabs_version.'</strong> of <strong>'.tabs_plugin_name.'</strong>, To get more feature you could try our premium version. ';
		
		echo '<a href="'.tabs_pro_url.'">'.tabs_pro_url.'</a></p>';
		
		
	}
elseif($tabs_customer_type=="pro")
	{

		echo '<p>Thanks for using <strong> '.$tabs_customer_type.' version  '.$tabs_version.'</strong> of <strong>'.tabs_plugin_name.'</strong> </p>';
		
		
	}

 ?>




<?php
if($tabs_customer_type=="free")
	{
?>
<br />
<b>Premium Version Features</b><br />

<ul class="tabs-pro-features">

	<li>Fully responsive and mobile ready.</li>
	<li>Unlimited Tabs anywhere.</li>
	<li>Use via short-code.</li>
	<li>Different Theme.</li>
	<li>Background Image for Tabs area.</li>
	<li>Custom Active tabs background color.</li>
	<li>Custom default background color.</li>
	<li>Custom font color and size for Tabs header.</li>
	<li>Custom font color and size for Tabs content.</li>    
</ul>



</p>
        
        
        
      <?php
      }
	  
	  ?>  
      
<br /> 
<h3>Please share this plugin with your friends?</h3>
<table>
<tr>
<td width="100px"> 
<!-- Place this tag in your head or just before your close body tag. -->
<script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-href="<?php echo tabs_share_url; ?>"></div>

</td>
<td width="100px">
<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo tabs_share_url; ?>&amp;width=100&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=743541755673761" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>

 </td>
<td width="100px"> 





<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo tabs_share_url; ?>" data-text="<?php echo tabs_plugin_name;  ?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</td>

</tr>

</table>
        
        
         
</div>
<style type="text/css">
.tabs-pro-features{}

.tabs-pro-features li {
  list-style: disc inside none;
}

</style>