</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">

    </div>
    <strong><i>Chill Production</i>&copy; 2021 .</strong> All rights reserved.
</footer>
<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url() . "asset/bootstrap/js/bootstrap.min.js" ?>"></script>
<script>
    $(document).ready(function() {
        $('.konten').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'hr']],
                ['view', ['fullscreen', 'codeview']]
            ],

            onPaste: function(e) {
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                e.preventDefault();
                setTimeout(function() {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }



        });


    });
</script>
<script src="<?php echo base_url() . "asset/plugins/datatables/jquery.dataTables.min.js" ?>"></script>
<script src="<?php echo base_url() . "asset/plugins/datatables/dataTables.bootstrap.min.js" ?>"></script>

<!-- <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script> -->
<!-- Sparkline -->

<script src="<?php echo base_url() . "asset/plugins/knob/jquery.knob.js" ?>"></script>
<!-- daterangepicker -->

<!-- AdminLTE App -->
<script src="<?php echo base_url() . "asset/dist/js/app.min.js" ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . "asset/dist/js/demo.js" ?>"></script>

</body>

</html>