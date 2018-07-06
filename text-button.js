(function() {
    tinymce.create('tinymce.plugins.new_tab', {
    init : function(editor, url) {
    editor.addButton('new_tab_title', {
    title : 'Open link in new tab',
    cmd : 'new_tab',
    text : 'New Tab'
    });

    editor.addCommand('new_tab', function() {
    var selected_text = editor.selection.getContent();
    var element = tinymce.activeEditor.selection.getNode();
    var return_text = "";
    return_text = '<a href="'+element+'" class="new_tab" target="_blank" rel="nofollow">' + selected_text + '</span>';
    editor.insertContent(return_text);
    });

    },

    });

    // Register plugin
    tinymce.PluginManager.add( 'new_tab', tinymce.plugins.new_tab );
})();