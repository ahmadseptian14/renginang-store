<!-- Bootstrap core JavaScript-->
<script src="{{url ('backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url ('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url ('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url ('backend/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{url ('backend/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{url ('backend/js/demo/chart-area-demo.js')}}"></script>
<script src="{{url ('backend/js/demo/chart-pie-demo.js')}}"></script>

<script src="{{ url('backend/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('backend/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<script>
 $(function() {
     $("#example1").DataTable();
     $('#example2').DataTable({
         "paging": false,
         "lengthChange": false,
         "searching": false,
         "ordering": false,
         "info": false,
         "autoWidth": true,
     });
 });
</script>
