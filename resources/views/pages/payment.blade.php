@extends('layouts.success')

@section('title')
    UStore Payment Page
@endsection

@section('content')

    <div class="page-content page-success">
        <div class="section-count" data-aos="zoom-in">
            <div class="container">
                <div class="row align-items-center row-login justify-content-center">
                    <div class="col-lg-4 col-md-8 col-sm text-center">
                        <div
                            class="count-border"
                            style="padding-left: -90px;
                            padding-right: -900px;
                            padding-bottom: 40px;
                            padding-top: 20px;
                            border-radius: 20px;
                            background-color: #f39189;
                            padding: 300px -90px;">
                                <h3 class="text-scan py-3 text-black">Scan Here <br> for Payment</h3>
                                <div class="visible-print text-center">
                                    {!! QrCode::size(200)->backgroundColor(243, 145, 137)->backgroundColor(243, 145, 137)->eye('circle')->style('round')->generate('http://backend-store.test'); !!}
                                </div>
                                <div id="countdown" class="countdown mt-4 text-black">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('addon-script')

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- COUNTDOWN -->
    <script src="/script/navbar-scroll.js"></script>
    <script>
      const startingMinutes = 1;
      let time = startingMinutes * 60;

      const countdownEl = document.getElementById("countdown");

      function updateCountdown()
      {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        countdownEl.innerHTML = `${minutes}: ${seconds}`;
        time--;
      }

      setInterval(updateCountdown, 200);
    </script>
    <!-- COUNTDOWN END -->

    <script>
      setTimeout(function () {
        window.location = "{{ route('success') }}";
      }, 8000);
    </script>

@endpush
