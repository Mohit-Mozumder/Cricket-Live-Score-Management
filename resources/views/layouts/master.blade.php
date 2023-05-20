<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('assets/css/index.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/headerMain.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/nav_css.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/indexContent.cs')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/stylefront.css')}}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Custom fonts for this template-->
     <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @yield('run_custom_css_file')
    @yield('run_custom_css')
    <title>
        @yield('title')
    </title>
</head>

<body>
    <div id="headerMain">
        <div id="headerMainSec">
            <div id="btn">
            <button onclick="location.href='{{ url('/') }}'">T20wc2022</button>
                <button onclick="location.href='{{ url('/') }}'">Home</button>
                <button onclick="location.href='{{ url('schedule') }}'">Schedule</button>
                <button onclick="location.href='{{ url('team') }}'">Team</button>
                <button onclick="location.href='{{ url('player') }}'">Player</button>
                <button onclick="location.href='{{ url('news') }}'">News</button>
                <button onclick="location.href='{{ url('admin') }}'">Admin</button>
        
            </div>
            <div id="headermaininner">
                <div id="card1" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(0, 0, 0);" id="type">Live</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span> Bangladesh vs India
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf"><b>Bangladesh- 115/6
                                    (18.3 overs)</b> </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams"><b>India- yet to bat</b>
                            </h5>
                        </div>
                        <!-- <div style="width: 100%; background-color: rgb(211, 208, 208);">
                        <h5 style="margin: 5px 15px 0px 0px;font-size: .7rem;" id="teams">Mumbai Indians won the
                            match</h5>
                    </div> -->
                    </div>
                </div>
                <div id="vr1" class="verticalLine"></div>
                <div id="card2" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(31, 17, 17);" id="type1">RESULT</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span> Afganistan Vs Sri-Lanka
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf1"><b>Afg- 158/6 (20
                                    overs)</b></h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams1"><b>Sri- 115/10 (18.3
                                    overs)</b>
                            </h5>
                        </div>
                        <div style="width: 100%; background-color: rgb(211, 208, 208);">
                            <h5 style="margin: 5px 15px 0px 0px;font-size: .7rem;" id="teams1"><b>Afganistan won the
                                    Match</b></h5>
                        </div>
                    </div>
                </div>
                <div id="vr2" class="verticalLine"></div>
                <div id="card3" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(36, 26, 26);" id="type2">Upcomming</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf2"><b>Bangladesh</b>
                                <strong>vs</strong> <b>England</b>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams2"><b>Today, 02:00 PM</b>
                            </h5>
                        </div>

                    </div>
                </div>
                <div id="vr3" class="verticalLine"></div>
                <div id="card3" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(36, 26, 26);" id="type2">Upcomming</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf2"><b>Australia</b>
                                <strong>vs</strong> <b>new zealand</b>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams2"><b>Today, 08:00 PM</b>
                            </h5>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="module" src="./main.js"></script>

    <div id="footer"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <!-- Bootstrap core JavaScript-->
     <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>
    @yield('run_custom_js_file')
    @yield('run_custom_jquery')
    
</body>

</html>