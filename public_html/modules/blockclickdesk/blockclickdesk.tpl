<!-- Block clickdesk module --> 

	{if $widgetid != ""}

<script type='text/javascript'>
var _glc =_glc || [];
_glc.push('{$widgetid}');
var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 'http://contactuswidget.appspot.com/clickdesk-ui/browser/');

var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; glcspt.async = true;glcspt.src = glcpath + 'livechat-new.js';

var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
</script>

	{/if}
