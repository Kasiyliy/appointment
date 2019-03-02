<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/datatables.buttons.js')}}"></script>
<script src="{{asset('js/datatables.flash.js')}}"></script>
<script src="{{asset('js/jszip.js')}}"></script>
<script src="{{asset('js/pdfmake.js')}}"></script>
<script src="{{asset('js/vfs_fonts.js')}}"></script>
<script src="{{asset('js/buttons_html.js')}}"></script>
<script src="{{asset('js/buttons.print.js')}}"></script>x
<script src="{{asset('js/colvis.js')}}"></script>
<script src="{{asset('js/datatables.select.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
<script src="{{ url('quickadmin/js') }}/select2.full.min.js"></script>
<script src="{{ url('quickadmin/js') }}/main.js"></script>

<script>
    window._token = '{{ csrf_token() }}';
</script>



@yield('javascript')