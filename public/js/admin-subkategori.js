// Admin Subkategori JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // CKEditor 5 setup
    const descriptionEditor = document.querySelector('#description');
    
    if (descriptionEditor && typeof ClassicEditor !== 'undefined') {
        ClassicEditor
            .create(descriptionEditor, {
                toolbar: {
                    items: [
                        'undo', 'redo',
                        '|', 'heading',
                        '|', 'bold', 'italic', 'underline', 'strikethrough',
                        '|', 'link',
                        '|', 'bulletedList', 'numberedList',
                        '|', 'indent', 'outdent',
                        '|', 'alignment',
                        '|', 'removeFormat'
                    ]
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                language: 'id',
                placeholder: 'Masukkan deskripsi subkategori...',
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload'],
                // Mengurangi auto-detection yang terlalu agresif
                autoformat: {
                    list: false
                },
                // Custom styling untuk list
                contentStyle: `
                    .ck-editor__editable ol {
                        @apply pl-16 ml-0;
                        list-style-position: inside !important;
                    }
                    .ck-editor__editable ol li {
                        @apply mb-2 pl-0;
                        list-style-type: decimal !important;
                        list-style-position: inside !important;
                    }
                    .ck-editor__editable ul {
                        @apply pl-16 ml-0;
                        list-style-position: inside !important;
                    }
                    .ck-editor__editable ul li {
                        @apply mb-2 pl-0;
                        list-style-type: disc !important;
                        list-style-position: inside !important;
                    }
                    .ck-editor__editable {
                        @apply p-4;
                    }
                `
            })
            .catch(error => {
                console.error(error);
            });
    }
});
