 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('dashmin') }}/lib/chart/chart.min.js"></script>
 <script src="{{ asset('dashmin') }}/lib/easing/easing.min.js"></script>
 <script src="{{ asset('dashmin') }}/lib/waypoints/waypoints.min.js"></script>
 <script src="{{ asset('dashmin') }}/lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="{{ asset('dashmin') }}/lib/tempusdominus/js/moment.min.js"></script>
 <script src="{{ asset('dashmin') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
 <script src="{{ asset('dashmin') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

 <!-- Template Javascript -->
 <script src="{{ asset('dashmin') }}/js/main.js"></script>
 <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
 @stack('scripts')
