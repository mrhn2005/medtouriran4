function tinymce_init_callback(editor)
{
      editor.remove();
      editor = null;

       tinymce.init({
        menubar: true,
        selector:'textarea.richTextBox',
        skin: 'voyager',
        min_height: 600,
        resize: 'vertical',
        plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
        external_plugins: {
          'template': '/vendor/tcg/voyager/assets/js/plugins/template/plugin.js',
      },
        extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
        file_browser_callback: function(field_name, url, type, win) {
                if(type =='image'){
                  $('#upload_file').trigger('click');
                }
            },
        toolbar: 'template |styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code | fontsizeselect',
        convert_urls: false,
        image_caption: true,
        image_title: true,
        image_alt: true,
        image_dimensions: false,
        image_class_list: [
            {title: 'Responsive', value: 'img-fluid lazy'}
        ],
        templates : [
                        {
                          title: "Services Template",
                          url: "/vendor/tinymce/templates/services-en.html",
                          description: "Services Template English"
                        },
                        {
                          title: "Package Template",
                          url: "/vendor/tinymce/templates/package-en.html",
                          description: "Services Template English"
                        },
                        {
                          title: "Procedure Template",
                          url: "/vendor/tinymce/templates/procedure-en.html",
                          description: "Services Template English"
                        },
                        {
                          title: "Blog Template",
                          url: "/vendor/tinymce/templates/blog-en.html",
                          description: "Blog Template English"
                        },
                        {
                          title: "Image Template",
                          url: "/vendor/tinymce/templates/image-en.html",
                          description: "Image Template English"
                        }
                     ],
      });
}