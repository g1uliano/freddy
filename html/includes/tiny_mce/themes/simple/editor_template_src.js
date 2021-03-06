function TinyMCE_simple_getEditorTemplate() {
	var template = new Array();

	template['html'] = '\
<table class="mceEditor" border="0" cellpadding="0" cellspacing="0" width="{$width}" height="{$height}">\
<tr><td align="center">\
<span id="{$editor_id}">IFRAME</span>\
</td></tr>\
<tr><td class="mceToolbar" align="center" height="1">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'Bold\');" onmousedown="return false;"><img border="0" id="{$editor_id}_bold" src="{$themeurl}/images/{$lang_bold_img}" title="{$lang_bold_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');"></a>\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'Italic\');" onmousedown="return false;"><img border="0" id="{$editor_id}_italic" src="{$themeurl}/images/{$lang_italic_img}" title="{$lang_italic_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'Underline\');" onmousedown="return false;"><img border="0" id="{$editor_id}_underline" src="{$themeurl}/images/{$lang_underline_img}" title="{$lang_underline_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'Strikethrough\');" onmousedown="return false;"><img border="0" id="{$editor_id}_strikethrough" src="{$themeurl}/images/strikethrough.gif" title="{$lang_striketrough_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
<img border="0" src="{$themeurl}/images/spacer.gif" width="1" height="15" class="mceSeparatorLine">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'Undo\');" onmousedown="return false;"><img border="0" src="{$themeurl}/images/undo.gif" title="{$lang_undo_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'Redo\');" onmousedown="return false;"><img border="0" src="{$themeurl}/images/redo.gif" title="{$lang_redo_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
<img border="0" src="{$themeurl}/images/spacer.gif" width="1" height="15" class="mceSeparatorLine">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'mceCleanup\');" onmousedown="return false;"><img border="0" src="{$themeurl}/images/cleanup.gif" title="{$lang_cleanup_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
<img border="0" src="{$themeurl}/images/spacer.gif" width="1" height="15" class="mceSeparatorLine">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'InsertUnorderedList\');" onmousedown="return false;"><img border="0" id="{$editor_id}_bullist" src="{$themeurl}/images/bullist.gif" title="{$lang_bullist_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'InsertOrderedList\');" onmousedown="return false;"><img border="0" id="{$editor_id}_numlist" src="{$themeurl}/images/numlist.gif" title="{$lang_numlist_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');">\
</td></tr>\
</table>';

	template['delta_width'] = 0;
	template['delta_height'] = -20;

	return template;
}

function TinyMCE_simple_handleNodeChange(editor_id, node) {
	// Reset old states
	tinyMCE.switchClassSticky(editor_id + '_bold', 'mceButtonNormal');
	tinyMCE.switchClassSticky(editor_id + '_italic', 'mceButtonNormal');
	tinyMCE.switchClassSticky(editor_id + '_underline', 'mceButtonNormal');
	tinyMCE.switchClassSticky(editor_id + '_strikethrough', 'mceButtonNormal');
	tinyMCE.switchClassSticky(editor_id + '_bullist', 'mceButtonNormal');
	tinyMCE.switchClassSticky(editor_id + '_numlist', 'mceButtonNormal');

	// Handle elements
	do {
		switch (node.nodeName.toLowerCase()) {
			case "b":
			case "strong":
				tinyMCE.switchClassSticky(editor_id + '_bold', 'mceButtonSelected');
			break;

			case "i":
			case "em":
				tinyMCE.switchClassSticky(editor_id + '_italic', 'mceButtonSelected');
			break;

			case "u":
				tinyMCE.switchClassSticky(editor_id + '_underline', 'mceButtonSelected');
			break;

			case "strike":
				tinyMCE.switchClassSticky(editor_id + '_strikethrough', 'mceButtonSelected');
			break;
			
			case "ul":
				tinyMCE.switchClassSticky(editor_id + '_bullist', 'mceButtonSelected');
			break;

			case "ol":
				tinyMCE.switchClassSticky(editor_id + '_numlist', 'mceButtonSelected');
			break;
		}
	} while ((node = node.parentNode));
}
