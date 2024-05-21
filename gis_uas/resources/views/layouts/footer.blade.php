<footer class="bg-gray rounded shadow p-5 mb-4 mt-4">
    <div class="container mx-auto px-4">
        <div class="row align-items-center">
            <div class="col-md-4 mb-4 mb-md-0 text-md-start">
                <!-- NIM -->
                <p class="mb-0"><a class="text-primary fw-normal"><b>2105551093</b></a></p>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 text-center">
                <!-- Social Media Links -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item px-2">
                        <a href="https://www.linkedin.com/in/marshallvd/" target="_blank">
                            <img class="avatar rounded-circle" alt="LinkedIn" src="{{ asset('gis_uas\storage\assets\img\logo.jpeg') }}">
                        </a>
                    </li>
                    <li class="list-inline-item px-2">
                        <a href="https://www.instagram.com/marshallvd/?hl=en" target="_blank">
                            <img class="avatar rounded-circle" alt="Instagram" src="{{ asset('gis_uas\storage\assets\img\logo.jpeg') }}">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 text-md-end">
                <!-- Tahun dan Hak Cipta -->
                <p class="mb-0">2024 - <span class="current-year"></span> Sistem Informasi Geografis</p>
            </div>
        </div>
    </div>
</footer>




</main>

<!-- Core -->
<script src="{{ asset('storage/volt/html&css/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('storage/volt/html&css/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Vendor JS -->
<script src="{{ asset('storage/volt/html&css/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

<!-- Slider -->
<script src="{{ asset('storage/volt/html&css/vendor/nouislider/dist/nouislider.min.js') }}"></script>

<!-- Smooth scroll -->
<script src="{{ asset('storage/volt/html&css/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

<!-- Charts -->


<!-- Datepicker -->
<script src="{{ asset('storage/volt/html&css/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

<!-- Sweet Alerts 2 -->
<script src="{{ asset('storage/volt/html&css/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="{{ asset('storage/volt/html&css/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

<!-- Notyf -->
<script src="{{ asset('storage/volt/html&css/vendor/notyf/notyf.min.js') }}"></script>

<!-- Simplebar -->
<script src="{{ asset('storage/volt/html&css/vendor/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@stack('javascript')
<!-- Volt JS -->
{{-- <script src="{{ asset('volt/hmtl&css/assets/js/volt.js') }}"></script> --}}
<script>
    window.setTimeout(function(){
        $("alert").fadeTo(500,0).slideUp(500,function(){
            $(this).remove()
        })
    },3000);
</script>

