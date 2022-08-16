</div>
      </div>
    </div>
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    var i = 0;
    $("#addRemoveIp").click(function () {
        ++i;
        $("#multiForm").append('<tr><td><input type="text" name="multiInput['+i+'][hobbies]" class="form-control" /></td><td><button type="button" class="remove-item btn btn-danger">Delete</button></td></tr>');
    });
    $(document).on('click', '.remove-item', function () {
        $(this).parents('tr').remove();
    });
</script>


    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

   <!--  <script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Enter name" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script> -->