/* Import plugin specific language pack */
tinyMCE.importPluginLanguagePack('save', 'en,sv,zh_cn,cs,fa,fr_ca,fr,de,pl,pt_br,nl,he,no,hu');

function TinyMCE_save_getInfo() {
	return {
		longname : 'Save',
		author : 'Moxiecode Systems',
		authorurl : 'http://tinymce.moxiecode.com',
		infourl : 'http://tinymce.moxiecode.com/tinymce/docs/plugin_save.html',
		version : tinyMCE.majorVersion + "." + tinyMCE.minorVersion
	};
};

/**
 * Returns the HTML contents of the save control.
 */
function TinyMCE_save_getControlHTML(control_name) {
	switch (control_name) {
		case "save":
			return '<a href="javascript:tinyMCE.execInstanceCommand(\'{$editor_id}\',\'mceSave\');" target="_self" onmousedown="return false;"><img id="{$editor_id}_save" src="{$pluginurl}/images/save.gif" title="{$lang_save_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.switchClass(this,\'mceButtonNormal\');" onmousedown="tinyMCE.switchClass(this,\'mceButtonDown\');" /></a>';
	}

	return "";
}

/**
 * Executes the save command.
 */
function TinyMCE_save_execCommand(editor_id, element, command, user_interface, value) {
	// Handle commands
	switch (command) {
		case "mceSave":
			var formObj = tinyMCE.selectedInstance.formElement.form;

			if (formObj) {
				tinyMCE.triggerSave();

				// Disable all UI form elements that TinyMCE created
				for (var i=0; i<formObj.elements.length; i++) {
					var elementId = formObj.elements[i].name ? formObj.elements[i].name : formObj.elements[i].id;

					if (elementId.indexOf('mce_editor_') == 0)
						formObj.elements[i].disabled = true;
				}

				tinyMCE.isNotDirty = true;
				tinyMCE.selectedInstance.formElement.form.submit();
			} else
				alert("Error: No form element found.");

			return true;
	}
	// Pass to next handler in chain
	return false;
}