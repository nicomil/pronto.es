const Dropzone = require("dropzone")

$(function(){
    if($('#drophere').length > 0){
        let csrfToken = $('meta[name="csrf-token"]').attr('content')
        let uniqueSecret = $('input[name="uniqueSecret"]').attr('value')
        let myDropzone = new Dropzone('#drophere',{
            url: '/announcement/images/upload',
            params: {
                _token:csrfToken,
                uniqueSecret: uniqueSecret
            }
        })
    }
})