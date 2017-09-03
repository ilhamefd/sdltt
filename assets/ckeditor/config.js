/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
   config.extraPlugins = 'html5video';
   config.extraPlugins = 'widget';
   config.extraPlugins = 'filebrowser';
   config.extraPlugins = 'popup';
   config.filebrowserBrowseUrl = 'https://desaprototipe.000webhostapp.com/assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = 'https://desaprototipe.000webhostapp.com/assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = 'https://desaprototipe.000webhostapp.com/assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = 'https://desaprototipe.000webhostapp.com/assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = 'https://desaprototipe.000webhostapp.com/assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = 'https://desaprototipe.000webhostapp.com/assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
};