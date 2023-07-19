<!-- Footer -->
<footer class="main-footer">
    <strong>Atharv Overseas Education Admin</strong>
</footer>
<!-- /.Footer -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script>
    $(function () {
        $("textarea[id=summernote]").summernote({
            height: 250,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize', 'height']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['table','picture','link','map','minidiag']],
                ['misc', ['fullscreen', 'codeview']],
            ],
            onImageUpload: function(files, editor, welEditable) {
                upload_image(files[0], editor, welEditable);
            }
        });

        $("textarea[class=summernote]").summernote({
            height: 250,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize', 'height']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['table','picture','link','map','minidiag']],
                ['misc', ['fullscreen', 'codeview']],
            ],
            onImageUpload: function(files, editor, welEditable) {
                upload_image(files[0], editor, welEditable);
            }
        });

        function upload_image(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                url: 'postRequest/imageUpload.php',
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                success: function(img){
                    console.log(img);
                    editor.insertImage(welEditable, url);
                }
            });
        }
    });

    $(document).ready( function() {
        <?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])){ ?>
        alert('<?php echo $_SESSION['error']; $_SESSION['error'] = ''; ?>');
        <?php } ?>
    });

    $('.delBtn').on('click', function(){
        var bId = $(this).attr('data-id');
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
                url: 'postRequest/saveBanner.php',
                type: 'POST',
                data: {type:'delete', id: bId},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    $("#banner_"+bId).remove();
                    alert("Record removed successfully");
                }
            });
        }
    });

    $('.delUniversityBtn').on('click', function(){
        var bId = $(this).attr('data-id');
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
                url: 'postRequest/saveCountryUniversity.php',
                type: 'POST',
                data: {type:'delete', id: bId},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    $("#universuty_"+bId).remove();
                    alert("Record removed successfully");
                }
            });
        }
    });

    $('.delOfficeBtn').on('click', function(){
        var bId = $(this).attr('data-id');
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
                url: 'postRequest/saveOffice.php',
                type: 'POST',
                data: {type:'delete', id: bId},
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    $("#office_"+bId).remove();
                    alert("Record removed successfully");
                }
            });
        }
    });
</script>
<!-- /.jQuery -->