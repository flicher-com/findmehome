var photo_counter = 0;
var URL = window.location.pathname.split( '/' );
var id = URL[2];

Dropzone.options.realDropzone = {
    acceptedFiles: 'image/*',
    maxFiles: 6,
    uploadMultiple: false,
    parallelUploads: 6,
    maxFilesize: 5,
    previewsContainer: '#dropzonePreview',
    previewTemplate: document.querySelector('#preview-template').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove',
    dictFileTooBig: 'Image is bigger than 5MB',
    dictMaxFilesExceeded: "You can only upload 6 images.",

    // The setting up of the dropzone
    init:function() {

        // Add server images
        var myDropzone = this;

        $.get('/server-images?propertyid='+id, function(data) {

            $.each(data.images, function (key, value) {

                var file = {name: value.original, size: value.size};
                myDropzone.options.addedfile.call(myDropzone, file);
                myDropzone.options.thumbnail.call(myDropzone, file, '/images/icon_size/' + value.server);
                myDropzone.emit("complete", file);
                photo_counter++;
                $("#photoCounter").text( "(" + photo_counter + ")");
            });
        });

        this.on("removedfile", function(file) {

            $.ajax({
                type: 'POST',
                url: 'upload/delete',
                data: {id: file.name, _token: $('#csrf-token').val()},
                dataType: 'html',
                success: function(data){
                    var rep = JSON.parse(data);
                    if(rep.code == 200)
                    {
                        photo_counter--;
                        $("#photoCounter").text( "(" + photo_counter + ")");
                    }

                }
            });

        } );
    },
    error: function(file, response) {
        if($.type(response) === "string")
            var message = response; //dropzone sends it's own error messages in string
        else
            var message = response.message;
        file.previewElement.classList.add("dz-error");
        _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
        _results = [];
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i];
            _results.push(node.textContent = message);
        }
        return _results;
    },
    success: function(file,done) {
        photo_counter++;
        $("#photoCounter").text( "(" + photo_counter + ")");
    }
}
