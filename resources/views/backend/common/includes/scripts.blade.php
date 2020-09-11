    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    
    <script src="{{ asset('backend/js/materialize.min.js') }}"></script>
    <script src="{{ asset('backend/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <script src="{{ asset('backend/js/app.init.mini-sidebar.js') }}"></script>
    <script src="{{ asset('backend/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/extra-libs/prism/prism.js') }}"></script>
    <script src="{{ asset('backend/js/pages/forms/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/forms/parsley.min.js') }}"></script>
    <script src="{{ asset('backend/js/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('web/js/all.min.js') }}"></script>
    <script src="{{ asset('backend/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/datatable/datatable-advanced.init.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    <!-- Page JS -->
    @yield('page_js')
    <!-- Page JS -->

    
    <!-- ============================================================== -->
    <!-- Toastr Notification -->
    <!-- ============================================================== -->
    @toastr_render
    <script type="text/javascript">
       $(function () {
        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        };
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr["error"]("{{ $error }}");
            @endforeach
        @endif

       });
    </script>


    <script>
    $(document).ready(function() {

        if ($(".textEditor").length > 0) {
            tinymce.init({
                selector: "textarea.textEditor",
                theme: "modern",
                height: 200,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor",
                    "paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                paste_as_text: true,
                paste_auto_cleanup_on_paste : true,
                paste_remove_styles: true,
                paste_remove_styles_if_webkit: true,
                paste_strip_class_attributes: true
            });
        }
    });
    </script>


    <!-- Sweet alert -->
    <script type="text/javascript">
        function alertFunction(action,id){
            swal({
              title: "Are you sure to "+action+" ?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                document.getElementById(action+id).submit();
                swal("Successfully "+action.toUpperCase(), {
                  icon: "success",
                });
              }
            });
        }
    </script>
   