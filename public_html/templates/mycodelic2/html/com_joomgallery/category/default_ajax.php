<?php defined('_JEXEC') or die('Direct Access to this location is not allowed.'); 
$doc = JFactory::getDocument();
$doc->addScriptDeclaration('    var jg_filenamewithjs = '.($this->_config->get('jg_filenamewithjs') ? 'true' : 'false').';');
$doc->addScript( '/media/joomgallery/js/upload.js' );
$doc->addStyleSheet( '/media/joomgallery/js/fineuploader/fineuploader.css');



?>
<script type="text/javascript">
    var jg_inputcounter = 3;
jQuery(function($) {
			 $('.hasTip').each(function() {
				var title = $(this).attr('title');
				if (title) {
					var parts = title.split('::', 2);
					var mtelement = document.id(this);
					mtelement.store('tip:title', parts[0]);
					mtelement.store('tip:text', parts[1]);
				}
			});
			var JTooltips = new Tips($('.hasTip').get(), {"maxTitleChars": 50,"fixed": false});
		});
    var jg_filenamewithjs = true;
        jQuery(document).ready(function() {
          document.formvalidator.setHandler('joompositivenumeric', function(value) {
            regex=/^[1-9]+[0-9]*$/;
            return regex.test(value);
          })
        });
jQuery(function($){ initPopovers(); $("body").on("subform-row-add", initPopovers); function initPopovers (event, container) { $(container || document).find(".hasPopover").popover({"html": true,"trigger": "hover focus","container": "body"});} });
JCEMediaBox.init({popup:{width:"",height:"",legacy:0,lightbox:0,shadowbox:0,resize:1,icons:1,overlay:1,overlayopacity:0.8,overlaycolor:"#000000",fadespeed:500,scalespeed:500,hideobjects:0,scrolling:"fixed",close:2,labels:{'close':'Close','next':'Next','previous':'Previous','cancel':'Cancel','numbers':'{$current} of {$total}'},cookie_expiry:"",google_viewer:0},tooltip:{className:"tooltip",opacity:0.8,speed:150,position:"br",offsets:{x: 16, y: 16}},base:"/",imgpath:"plugins/system/jcemediabox/img",theme:"standard",themecustom:"",themepath:"plugins/system/jcemediabox/themes",mediafallback:0,mediaselector:"audio,video"});
jQuery(function($){ initTooltips(); $("body").on("subform-row-add", initTooltips); function initTooltips (event, container) { container = container || document;$(container).find(".hasTooltip").tooltip({"html": true,"container": "body"});} });
			var _prum = [['id', ''],
						 ['mark', 'firstbyte', (new Date()).getTime()]];
			(function() {
				var s = document.getElementsByTagName('script')[0]
				  , p = document.createElement('script');
				p.async = 'async';
				p.src = '//rum-static.pingdom.net/prum.min.js';
				s.parentNode.insertBefore(p, s);
			})();				
			<!-- Website Active -->
			
	</script>
<script type="text/javascript">
  jQuery(document).ready(function() {
      alert('1234qwer');    
    var uploader = new qq.FineUploader({
      element: jQuery('#fine-uploader')[0],
      request: {
        endpoint: '/upload-image.html?task=ajaxupload.upload&format=raw',
        paramsInBody: true
      },
      chunking: {
        enabled: true,
        partSize: 500000      },
      autoUpload: false,
      display: {
        fileSizeOnSubmit: true
      },
      text: {
        failUpload: 'Upload failed',
        formatProgress: '{percent}% ' + 'of' +'  {total_size}',
        waitingForResponse: 'Processing...'
      },
      failedUploadTextDisplay: {
        mode: 'custom'
      },
      dragAndDrop: {
        extraDropzones: []
      },
      fileTemplate: 'qq-template',
      classes: {
          success: 'alert-success',
          fail: 'alert-error',
          debugText: 'qq-upload-debug-text',
          thumb: 'qq-upload-thumb',
          options: 'qq-upload-options',
          note: 'qq-upload-note'
      },
      validation: {
        allowedExtensions: ['jpg', 'jpeg', 'jpe', 'gif', 'png'],
        acceptFiles: 'image/*',
        sizeLimit: 50000000      },
      messages: {
        typeError: '{file}: ' + 'Wrong Filetype! Only .jpg, .jpeg, .jpe, .gif and .png are acceptable.',
        sizeError: '{file}: ' + 'Error: Max allowed file size is 50000000 byte',
        fileNameError: '{file}: ' + 'No special characters are allowed in this field (a-z, A-Z, -, Blanks and _ are acceptable).',
        fileNameDouble: '{file}: ' + 'You already have selected that image for upload',
        minSizeError: '{file}: ' + 'Image is too small, minimum file size is' + ' {minSizeLimit}.',
        emptyError: '{file} : '  + 'Image is empty, please select files again without it.',
        noFilesError: 'No images to upload.',
        onLeave: 'The images are being uploaded, if you leave now the upload will be cancelled.'
      },
      debug: true,
      maxConnections: 1,
      disableCancelForFormUploads: true,
      callbacks: {
        onComplete: function(id, fileName, response) {
          var item = this.getItemByFileId(id);
          if(response.debug_output) {
            var element = item.getElementsByClassName("qq-upload-debug-text-selector")[0];
            element.innerHTML = response.debug_output;
          }
          if(this.requestParams.hasOwnProperty("filecounter")) {
            this.requestParams.filecounter =  this.requestParams.filecounter + 1;
            this.setParams(this.requestParams);
          }
          if(jQuery('#ajax_generictitle').length > 0) {
            if(!jQuery('#ajax_generictitle').prop('checked')) {
              jQuery('#ajax_imgtitleid-' + id).attr('readonly', 'true');            }
          }
                    if(response.success) {
            uploader.fileCount--;
            var redirect = '/our-photos/upload.html?tab=ajax';
            if(uploader.fileCount == 0 && redirect != '') {
              // Redirect only if all file uploads were successful
              location.href = redirect;
            }
          }
                  },
        onValidate: function(fileData) {
          if(!jg_filenamewithjs) {
            var searchwrongchars = /[^a-zA-Z0-9 _-]/;
            if(searchwrongchars.test(fileData.name.substr(0, fileData.name.lastIndexOf('.')))) {
              this._itemError('fileNameError', fileData.name);
              return false;
            }
          }
          for (var i = 0; i < this._storedIds.length; i++) {
            var fileName = this.getName(this._storedIds[i]);
            if(fileName && fileName == fileData.name) {
              this._itemError('fileNameDouble', fileData.name);
              return false;
            }
          }
        },
        onSubmitted: function(id, fileName) {
          if(jQuery('#ajax_generictitle').length > 0) {
            if(!jQuery('#ajax_generictitle').prop('checked')) {
              var fileItemContainer = this.getItemByFileId(id);
              jQuery(fileItemContainer).find('.qq-upload-cancel').after('<input id="ajax_imgtitleid-' + id +'" class="qq-edit-imgtitle qq-editing" tabindex="0" type="text" value="" placeholder="' + 'Enter an image title!' + '" required aria-required="true">');
              jQuery('#ajax_imgtitleid-' + id).change(function() {
                if(jQuery(this).val().trim() != '') {
                  jQuery(this).removeClass('invalid').attr('aria-invalid', 'false');
                }
              });
            }
          }
        },
        onUpload: function(id, fileName) {
          if(jQuery('#ajax_generictitle').length > 0) {
            if(!jQuery('#ajax_generictitle').prop('checked')) {
              this.requestParams.imgtitle = jQuery('#ajax_imgtitleid-' + id).val();
              this.setParams(this.requestParams);
            }
          }
        }
      }
    });
    jQuery('#triggerClearUploadList').click(function() {
      uploader.reset();
      jQuery('#triggerClearUploadList').addClass('hidden');
    });
    jQuery('#triggerUpload').click(function() {
      Joomla.removeMessages();

      if(uploader._storedIds.length == 0) {
        alert('Please select an image.');
        return false;
      }
      var form = document.getElementById('AjaxUploadForm');
      if(!document.formvalidator.isValid(form)) {
        var msg = new Array();
        msg.push('Invalid form');
        if(form.imgtitle && form.imgtitle.hasClass('invalid')) {
            msg.push('Image must have a title');
        }
        if(form.catid.hasClass('invalid')) {
          msg.push('You must select a category.');
        }
        alert(msg.join('\n'));
        return false;
      }

      
      if(jQuery('#ajax_generictitle').length > 0) {
        if(!jQuery('#ajax_generictitle').prop('checked')) {
          var valid = true;
          for(var i = 0; i < uploader._storedIds.length; i++) {
            if(jQuery('#ajax_imgtitleid-' + uploader._storedIds[i]).val().trim() == '') {
              valid = false;
              jQuery('#ajax_imgtitleid-' + uploader._storedIds[i]).addClass('invalid').attr('aria-invalid', 'true');
            }
          }
          if(!valid) {
            alert('Image must have a title');
            return valid;
          }
        }
      }

      // Prepare request parameters
      uploader.requestParams = new Object();
      uploader.requestParams.catid = jQuery('#ajax_catid').val();
      if(jQuery('#ajax_imgtitle').length > 0) {
        if(jQuery('#ajax_generictitle').prop('checked')) {
          uploader.requestParams.imgtitle = jQuery('#ajax_imgtitle').val();
        }
      }
      if(jQuery('#ajax_filecounter').length > 0) {
        var filecounter = parseInt(jQuery('#ajax_filecounter').val());
        if(!isNaN(filecounter)) {
          uploader.requestParams.filecounter = filecounter;
        }
      }
            uploader.requestParams.imgtext = jQuery('#ajax_imgtext').val();
      uploader.requestParams.debug = jQuery('#ajax_debug').prop('checked') ? 1 : 0;
            uploader.requestParams.published = jQuery('#ajax_published').val();
            if(jQuery('#ajax_original_delete').length > 0) {
        uploader.requestParams.original_delete = jQuery('#ajax_original_delete').prop('checked') ? 1 : 0;
      }
      uploader.requestParams.create_special_gif = jQuery('#ajax_create_special_gif').prop('checked') ? 1 : 0;
      uploader.setParams(uploader.requestParams);
      uploader.fileCount = uploader._storedIds.length;
      uploader.uploadStoredFiles();
      jQuery('#triggerClearUploadList').removeClass('hidden');
    });
    if(jQuery('#ajax_generictitle').length > 0) {
      jQuery('#ajax_generictitle').change(function() {
        if(jQuery(this).prop('checked')) {
          jQuery('#ajax_imgtitle').addClass('required');
          jQuery('#ajax_imgtitle').attr('aria-required', 'true').attr('required', 'required');
          jQuery('#ajax_imgtitle-lbl').attr('aria-invalid', 'false');
          jQuery('#ajax_imgtitle').parent().parent().show(750);
          if(jQuery('#ajax_filecounter').length > 0 ) {
            jQuery('#ajax_filecounter').val('1');
            jQuery('#ajax_filecounter').parent().parent().show(750);
          }
          for(var i = 0; i < uploader._storedIds.length; i++) {
            jQuery('#ajax_imgtitleid-' + uploader._storedIds[i]).remove();
          }
        }
        else {
          jQuery('#ajax_imgtitle').val('');
          if(jQuery('#ajax_filecounter').length > 0 ) {
            jQuery('#ajax_filecounter').val('');
          }
          jQuery('#ajax_imgtitle').removeClass('required');
          jQuery('#ajax_imgtitle').removeAttr('aria-required').removeAttr('aria-invalid').removeAttr('required');
          jQuery('#ajax_imgtitle-lbl').removeAttr('aria-invalid');
          jQuery('#ajax_imgtitle').removeClass('invalid');
          jQuery('#ajax_imgtitle-lbl').removeClass('invalid');
          jQuery('#ajax_imgtitle').parent().parent().hide(750);
          if(jQuery('#ajax_filecounter').length > 0 ) {
            jQuery('#ajax_filecounter').parent().parent().hide(750);
          }
          for(var i = 0; i < uploader._storedIds.length; i++) {
            var fileItemContainer = uploader.getItemByFileId(uploader._storedIds[i]);
            jQuery(fileItemContainer).find('.qq-upload-cancel').after('<input id="ajax_imgtitleid-' + uploader._storedIds[i] +'" class="qq-edit-imgtitle qq-editing" tabindex="0" type="text" value="" placeholder="' + 'Enter an image title!' + '" required aria-required="true">');
            jQuery('#ajax_imgtitleid-' + uploader._storedIds[i]).change(function() {
              if(jQuery(this).val().trim() != '') {
                jQuery(this).removeClass('invalid').attr('aria-invalid', 'false');
              }
            });
          }
        }
      });
    }
  });
</script>
<div class="form-horizontal">
  <div class="control-group">
    <div class="control-label">
    </div>
    <div class="controls">
      <div id="triggerClearUploadList" class="btn btn-info pull-right hidden">
        <i class="icon-list icon-black"></i> <?php echo JText::_('COM_JOOMGALLERY_AJAXUPLOAD_CLEAR_UPLOAD_LIST'); ?>
      </div>
      <div id="fine-uploader"><div class="qq-uploader-selector qq-uploader span12">
        <div class="qq-upload-drop-area-selector qq-upload-drop-area span12" qq-hide-dropzone="" style="display: none;">
          <span>Drop images here</span>
        </div>
        <div class="qq-upload-button-selector qq-upload-button btn btn-large btn-success" style="position: relative; overflow: hidden; direction: ltr;">
          <div><i class="icon-plus icon-plus"></i> Select or drop images here for upload *</div>
        <input qq-button-id="4f298f5b-2077-4f1c-aaf3-9da0190e8863" multiple="" accept="image/*" type="file" name="qqfile" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;"></div>
        <div class="small">* Note that Drag and Drop may not be supported with your browser.</div>
        <span class="qq-drop-processing-selector qq-drop-processing qq-hide">
          <span>Processing dropped images...</span>
          <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
        </span>
        <ul class="qq-upload-list-selector qq-upload-list"></ul>
      </div></div>
    </div>
  </div>
</div>
<form action="/our-photos/upload.html" method="post" name="AjaxUploadForm" id="AjaxUploadForm" enctype="multipart/form-data" class="form-validate form-horizontal" onsubmit="">
  <div class="control-group">
    <div class="control-label">
      <label id="ajax_catid-lbl" for="ajax_catid" class="required">
	Category<span class="star">&nbsp;*</span></label>
    </div>
    <div class="controls">
      <select id="ajax_catid" name="catid" class="inputbox required validate-joompositivenumeric" aria-required="true" required="required">
	<option value=""></option>
	<option value="8">Burning Man 2018</option>
	<option value="7">Burning Man 2017</option>
	<option value="4">Burning Man 2016</option>
	<option value="3">Burning Man 2015</option>
	<option value="6">Burning Man 2014</option>
	<option value="5">Burning Man 2013</option>
	<option value="9">Wildwood</option>
</select>
    </div>
  </div>
        <div class="control-group">
    <div class="control-label">
      <label id="ajax_imgtext-lbl" for="ajax_imgtext">
	Generic Description</label>
    </div>
    <div class="controls">
      <textarea name="imgtext" id="ajax_imgtext" class="inputbox"></textarea>    </div>
  </div>
  <div class="control-group">
    <div class="control-label">
      <label id="ajax_imgauthor-lbl" for="ajax_imgauthor">
	Author</label>
    </div>
    <div class="controls">
      <div class="jg-uploader">Trailblazer</div>
    </div>
  </div>
  <div class="control-group">
    <div class="control-label">
      <label id="ajax_published-lbl" for="ajax_published">
	Published</label>
    </div>
    <div class="controls">
      <select id="ajax_published" name="published" class="inputbox" size="1">
	<option value="0">No</option>
	<option value="1" selected="selected">Yes</option>
</select>
    </div>
  </div>
            <div class="control-group">
    <div class="control-label">
      <label id="ajax_original_delete-lbl" for="ajax_original_delete" class="hasPopover" title="" data-content="Choosing this option will delete the original files from the server after they have been uploaded. Only choose this if you run short of server space. Although the thumbnail and the detailed image are left untouched from this option the popup will no longer be displayed." data-original-title="Delete Originals?">
	Delete Originals?</label>
    </div>
    <div class="controls">
      <input type="checkbox" name="original_delete" id="ajax_original_delete" value="1" class="inputbox">    </div>
  </div>
        <div class="control-group">
    <div class="control-label">
      <label id="ajax_debug-lbl" for="ajax_debug" class="hasPopover" title="" data-content="With activated debug mode all processing steps will be shown. In case of errors they are always displayed." data-original-title="Debug Mode?">
	Debug Mode?</label>
    </div>
    <div class="controls">
      <input type="checkbox" name="debug" id="ajax_debug" value="1" class="inputbox">    </div>
  </div>
        <div class="control-group">
    <div class="control-label">
      <label for="button"></label>
    </div>
    <div class="controls">
      <div id="triggerUpload" class="btn btn-primary">
        <i class="icon-upload icon-white"></i> Upload      </div>
      <button type="button" class="btn" onclick="javascript:location.href='/our-photos/userpanel.html';return false;"><i class="icon-cancel"></i> Cancel</button>
    </div>
  </div>
</form>