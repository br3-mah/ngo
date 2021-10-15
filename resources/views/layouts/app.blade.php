<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CSSCM Database</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
        <link rel="stylesheet" href="bulma/css/bulma.css">
        <link rel="stylesheet" href="bulma/css/bulma.min.css">

        <link rel="stylesheet" href="/css/bulma/bulma-carousel.min.css">

        <link rel="stylesheet" href="/fontawesome/css/all.css">

        <!--Icons-->
        <link rel="apple-touch-icon" sizes="57x57" src="fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" src="fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" src="fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" src="fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" src="fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" src="fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" src="fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" src="fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" src="fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  src="fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" src="fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" src="fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" src="fav/favicon-16x16.png">
        <link rel="manifest" src="fav/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> -->
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script defer src="fontawesome/js/all.js"></script>
    </head>
    <body class="has-background-white">
        <x-jet-banner />

        <div class="min-h-screen has-background-white">
            @livewire('navigation-menu')

 <div class="container mx-auto">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a class="is-active">Dashboard</a></li>
                        <li><a href="/organizations">Organizations</a></li>
                        <li><a href="/diseases">Diseases</a></li>
                        <li><a href="/modules">Modules</a></li>
                        <li><a href="/intervensions">Intervensions</a></li>
                        <li><a href="/reports">Reports</a></li>
                        <li><a href="/contacts">Contacts</a></li>
                    </ul>
<!--                     <p class="menu-label">
                        Administration
                    </p>
                    <ul class="menu-list">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a>Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                                <li><a>Remove a member</a></li>
                            </ul>
                        </li>
                        <li><a wire:click.defer="toggleModal">Upload Media</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                        <li><a>Payments</a></li>
                    </ul>
                    <p class="menu-label">
                        Transactions
                    </p>
                    <ul class="menu-list">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                        <li><a>Reports</a></li>
                    </ul> -->
                </aside>
            </div>
            <!-- Page Content -->
            <main>
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="mt-2 has-background-gray">
                        <div class="px-2 py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                {{ $slot }}
            </main>
        </div>
    </div>

        </div>

        @stack('modals')

        @livewireScripts

        <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
        <script src="//vjs.zencdn.net/4.12/video.js"></script>

        <script>
            videojs(document.getElementById('example_video_1'), {}, function() {
                // This is functionally the same as the previous example.
            });
        </script>
		<script>
		bulmaCarousel.attach('#carousel-demo', {
			slidesToScroll: 1,
			slidesToShow: 4
		});
		</script>
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $('.wrapper').addClass('loaded');
                    
                }, 3000);
            });

            jQuery(function(){
                $(window).load(function(){
                    $('.wrapper').removeClass('preload');
                });
            });
        </script>

    </body>
</html>
