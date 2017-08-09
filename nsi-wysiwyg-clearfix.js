/**
 * plugin.js
 *
 * Released under LGPL License.
 * Copyright (c) 1999-2015 Ephox Corp. All rights reserved
 *
 * License: http://www.tinymce.com/license
 * Contributing: http://www.tinymce.com/contributing
 */

/*global tinymce:true */

tinymce.PluginManager.add('nsiclearfix', function(editor) {
  editor.addCommand('InsertClearfix', function() {
    editor.execCommand('mceInsertContent', false, '<div class="clearfix"></div>');
  });

  editor.addButton('nsiclearfix', {
    icon: 'pagebreak',
    tooltip: 'Retour ligne image',
    cmd: 'InsertClearfix'
  });

  editor.addMenuItem('nsiclearfix', {
    icon: 'hr',
    text: 'Retour ligne image',
    cmd: 'InsertClearfix',
    context: 'insert'
  });
});
