<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</section>
</div>
<!-- Main Footer -->

  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <div style="text-align: center">
        <b>Công ty AN PHÁT KHÁNH</b>
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
    
    <!-- Bootstrap 3.3.5 -->

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    <script src="<?=SITE_TEMPLATE_PATH?>/dist/js/starrr.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/bootstrap/js/bootstrap.min.js"></script>
   <!-- AdminLTE App -->
    <script src="<?=SITE_TEMPLATE_PATH?>/dist/js/app.min.js"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script src="<?=SITE_TEMPLATE_PATH?>/dist/js/demo.js"></script>
    <!-- Select2 -->
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/select2/select2.full.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/datepicker/bootstrap-datepicker.js"></script>
     <!-- DataTables -->
       <script src="<?=SITE_TEMPLATE_PATH?>/plugins/datetimepicker/moment-with-locales.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/datetimepicker/bootstrap-datetimepicker.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/iCheck/icheck.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.responsive.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script>
    $(function() {
        $(".starrr").each(function(){
            $(this).starrr({
                readOnly: true,
                rating: $(this).attr('data-value')
            });
        });

    });
</script>
<script>
    $(document).on('focus',".datepicker", function(){
        $(this).datetimepicker({
            locale: 'vi',
            format: 'DD/MM/YYYY H:mm',
            ignoreReadonly: true,
            minDate:new Date()

        });
    })
</script>

  </body>
</html>