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
                <button onclick="location.href='{{ url('/') }}'">Cricket365</button>
                <button onclick="location.href='{{ url('/') }}'">Home</button>
                <button onclick="location.href='{{ url('schedule') }}'">Schedule</button>
                <button onclick="location.href='{{ url('team') }}'">Team</button>
                <button onclick="location.href='{{ url('player') }}'">Player</button>
                <button onclick="location.href='{{ url('news') }}'">News</button>
                <button onclick="location.href='{{ url('admin') }}'">Admin</button>
        
            </div>
            <div id="headermaininner">
                @if ($latestMatches->isNotEmpty())
                    @foreach ($latestMatches->reverse() as $match)
                        @php
                            $result = json_decode($match->result, true);
                            $team1Data = $result['team_1'] ?? ['name' => '', 'total_score' => 0, 'wickets' => 0, 'overs' => 0];
                            $team2Data = $result['team_2'] ?? ['name' => '', 'total_score' => 0, 'wickets' => 0, 'overs' => 0];
                        @endphp
                        <div id="card1" class="card">
                            <div id="cardInner">
                                <div class="container">
                                    <h4>Live Score</h4>
                                    <ul>
                                        <li>
                                            <p>
                                                {{ $team1Data['name'] }} ({{ $team1Data['total_score'] }}/{{ $team1Data['wickets'] }}) ({{ $team1Data['overs'] }} overs)<br>
                                                {{ $team2Data['name'] }} ({{ $team2Data['total_score'] }}/{{ $team2Data['wickets'] }}) ({{ $team2Data['overs'] }} overs)
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div id="card1" class="card">
                        <div id="cardInner">
                            <div class="container">
                                <h2>Live Score</h2>
                                <p>No live matches available.</p>
                            </div>
                        </div>
                    </div>
                @endif
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