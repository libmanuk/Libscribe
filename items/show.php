<html>
<head>
<title>Libscribe Image Transcription</title>
<style>
body {
	font-family: "Lucida Sans Typewriter", "Lucida Console", monaco, "Bitstream Vera Sans Mono", monospace;
	font-size: 9px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 15.4px;
}
</style>
<link href="/libscribe/themes/berlin/css/lity.css" rel="stylesheet">
<script src="/libscribe/themes/berlin/javascripts/vendor/jquery.js"></script>
<script src="/libscribe/themes/berlin/javascripts/lity.js"></script>
<link rel="stylesheet" type="text/css" href="/libscribe/themes/berlin/css/zoomify.css" media="all" />
</head>
<body style="background:#fafafa;">
<table style="width:100%;height:5%;background:#fafafa;">
<tr style="width:100%;height:5%;">
<td style="width:60%;height:5%;">
<h5>IMAGE PANE <!--<a href="<?php echo metadata('item', array('Dublin Core','Source')); ?>" target="_blank"><img src="/libscribe_store/images/new_tab.png" alt="launch in new tab"/></a>&nbsp;&nbsp;<a href="<?php echo metadata('item', array('Dublin Core','Source')); ?>" data-lity><img src="/libscribe_store/images/full_screen.png"/></a>&nbsp;&nbsp;<?php echo link_to_collection_for_item(); ?> (collection)--></h5><span style="float:left;font-size:12px;"><a href="<?php echo metadata('item', array('Dublin Core','Source')); ?>" target="_blank">new tab</a><!-- | <a href="#zoom" data-lity>full screen</a> (user browser back button to exit)--></span>
</td>
<td style="width:525px;height:5%;">
<h5>TRANSCRIPT PANE <!--<a href="<?php echo metadata('item', array('Dublin Core','Identifier')); ?>" target="_blank"><img src="/libscribe_store/images/new_tab.png" alt="launch in new tab"/></a>&nbsp;&nbsp;<a href="<?php echo metadata('item', array('Dublin Core','Identifier')); ?>" data-lity><img src="/libscribe_store/images/full_screen.png"/></a>--></h5><span style="float:right;font-size:12px;"><a href="/libscribe/admin/trans/<?php echo metadata('item', array('Dublin Core','Title')); ?>" data-lity>edit metadata</a> | <?php echo link_to_collection_for_item(); ?> | <a href="/libscribe">Home</a></span>
</td>
</tr>
</table>
<table style="width:100%;height:100%;">
<tr style="width:100%;height:100%;">
<td style="width:55%;height:100%;">
<div id="image-zoom-wrapper" name="zoom"><img id="image-zoom" src="<?php echo metadata('item', array('Dublin Core','Source')); ?>" alt="Image for Transcription" /></div>
<script src="/libscribe/themes/berlin/javascripts/zoomify.js" async="async"></script>
<!--<iframe width="100%" height="100%" src="<?php echo metadata('item', array('Dublin Core','Source')); ?>" scrolling="no"></iframe>-->
</td>
<td style="width:45%;height:100%;">
<iframe width="525px" height="800px" src="<?php echo metadata('item', array('Dublin Core','Identifier')); ?>" scrolling="no"></iframe>
</td>
</tr>
</table>
<table>
<tr style="width:100%;height:5%;">
<td style="width:100%;height:5%;">
<h6>Libscribe (a light weight image transcription interface)<br/><br/><a href="/libscribe/about">about</a> | <a href="/libscribe/help">help</a> | <a href="/libscribe">home</a></h6>
</td>
<td><img src="/libscribe_logo.png"/></td>
</tr>
</table>
</div>
</body>
<html>
