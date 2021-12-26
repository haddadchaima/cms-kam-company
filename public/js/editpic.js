
$(document).ready(function () {
    var $modal = $('#modal');
    var image = document.getElementById('image');
    var cropper;
    $("body").on("change", ".image", function (e) {
        var files = e.target.files;
        console.log(files);
        var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
            file = files[0];
            if (URL) {
                done(URL.createObjectURL(file));
            }
            else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) { done(reader.result); };
                reader.readAsDataURL(file);
            }
        }
    });
    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });
    $("#crop").click(function () {
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400,
        });
        canvas.toBlob(function (blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function () {
                var base64data = reader.result;
                console.log(base64data);
                var urlajax = $("#myForm").attr('action');
                console.log(urlajax);

                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    type: "post",
                    dataType: "json",
                    url: urlajax,
                    data: { 'image': base64data },
                    success: function (data) {

                        location.reload();
                    }

                });


            }
        });
    })

    function onClickHistory(event) {
        event.preventDefault();
        $(".importer").hide();
        $('.photo_history').show();
        $("#vos-photo").addClass('select');
        $("#import").removeClass('select');
    }
    function onClickImport(event) {
        event.preventDefault();
        $(".importer").show();
        $('.photo_history').hide();
        $("#import").addClass('select');
        $("#vos-photo").removeClass('select');
    }



    function onClickPhoto() {

        let src = $(this).data('index')

        $.ajax({
            type: "get",
            dataType: "json",
            url: "profile/historypic",
            data: { image: src },
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }


    $("#vos-photo").on('click', onClickHistory);
    $("#import").on('click', onClickImport)
    var photos = document.querySelectorAll('.photo-list li');
    for (index = 0; index < photos.length; index++) {
        photos[index].addEventListener('click', onClickPhoto);
    }
    $(".editPhoto").on('click',function(event){
        event.preventDefault()
        $('.details').hide()
        $('.photoProfil').show()
       
    })
    $(".detailsProfil").on('click',function(event){
        event.preventDefault()
        $('.details').show()
        $('.photoProfil').hide()
        $('.editdetailsprofil').hide()
       
    })
    $(".editDetails").on('click',function(event){
            event.preventDefault()
            $('.details').hide()
            $('.editdetailsprofil').show()
             
       
    })
    $(".history").on('click',function(event){
        event.preventDefault()
        
        $('.historyadmin').toggle()
         
   
})
$('.btnhistory').on('click',function(event){
    event.preventDefault()
    $('.updatepassword').toggle();
    $('.detailsHistory').toggle()
     

})


$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });


})

