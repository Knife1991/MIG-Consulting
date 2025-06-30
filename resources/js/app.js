import './bootstrap';
import 'bootstrap';
import './main';

import tinymce from 'tinymce/tinymce';

// Importa i plugin che ti servono
import 'tinymce/plugins/link';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/image';

// Importa tema e skin
import 'tinymce/themes/silver/theme';
import 'tinymce/skins/ui/oxide/skin.min.css';

tinymce.init({
  selector: 'textarea#body',
  base_url: '/tinymce',   // <-- importante, indica la base da cui caricare plugins, skins ecc
  plugins: 'link lists image',
  toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image',
  menubar: false,
  branding: false,
  height: 400,
  file_picker_callback: function(callback, value, meta) {
    if (meta.filetype === 'image') {
      const input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');
  
      input.onchange = function() {
        const file = this.files[0];
        const reader = new FileReader();
  
        reader.onload = function() {
          // callback con data url base64, puoi migliorare caricando su server
          callback(reader.result, { alt: file.name });
        };
        reader.readAsDataURL(file);
      };
  
      input.click();
    }
  },
});
