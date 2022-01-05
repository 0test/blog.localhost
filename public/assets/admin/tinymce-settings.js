$(document).ready(function() {

    tinymce.init({
        selector: '#content',
        placeholder: 'Начните писать пост...',
        statusbar: true,
        language: 'ru_RU',
        height: 400,
        menubar: false,
        content_css: '/assets/admin/tinymce-admin-style.css',
        image_caption: true,
        invalid_elements: 'span, b, em, i',
        valid_elements: 'figure[class],figcaption,blockquote,a[href|name],p,b,strong,i,em,h2,h3,h4,h5,h6,table,th,td[colspan|rowspan],tr,thead,tfoot,tbody,br,hr,ul,li,ol,img[alt|src|class]',
        plugins: ' autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr paste pagebreak nonbreaking anchor  advlist save lists wordcount  textpattern noneditable  charmap emoticons code',
        toolbar1: 'undo | bold italic | alignleft aligncenter alignright | bullist numlist blockquote table | link unlink image media  insertfile  formatselect | visualblocks removeformat code  fullscreen',
        forced_root_block: 'p',
        entity_encoding: 'named',
        schema: 'html5',
        block_formats: 'Абзац=p; Заголовок 2=h2; Заголовок 3=h3; Цитата=blockquote',
        image_class_list: [{ title: 'Нет', value: '' }, { title: 'Прижать влево', value: 'justifyleft' }, { title: 'Прижать вправо', value: 'justifyright' }, { title: 'Адаптивное', value: 'img-responsive' }, { title: 'По центру', value: 'img-center' }],
        browser_spellcheck: false,
    });

});