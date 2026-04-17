 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>{{ env('APP_NAME') }}</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <script src="https://cdn.tailwindcss.com"></script>
     <link href="{{ asset('images/logo-1.png') }}" rel="icon" type="image/png">
     <script>
         tailwind.config = {
             theme: {
                 extend: {
                     colors: {
                         background: '#FFFFFF',
                         foreground: '#22262A',
                         card: '#FFFFFF',
                         'card-foreground': '#22262A',
                         popover: '#FFFFFF',
                         'popover-foreground': '#22262A',
                         primary: '#640BB1',
                         'primary-foreground': '#FFFFFF',
                         secondary: '#C31884',
                         'secondary-foreground': '#FFFFFF',
                         muted: '#EAEDF0',
                         'muted-foreground': '#6D767E',
                         accent: '#DFE3E7',
                         'accent-foreground': '#22262A',
                         destructive: '#EF4444',
                         'destructive-foreground': '#FAFAFA',
                         border: '#DFE3E7',
                         input: '#DFE3E7',
                         ring: '#640BB1',
                         'chart-1': '#640BB1',
                         'chart-2': '#C31884',
                         'chart-3': '#274754',
                         'chart-4': '#E8C468',
                         'chart-5': '#F4A462',
                         'sidebar-background': '#FAFAFA',
                         'sidebar-foreground': '#3F3F46',
                         'sidebar-primary': '#640BB1',
                         'sidebar-primary-foreground': '#FAFAFA',
                         'sidebar-accent': '#F4F4F5',
                         'sidebar-accent-foreground': '#18181B',
                         'sidebar-border': '#E5E7EB',
                         'sidebar-ring': '#640BB1',
                     }
                 }
             }
         }
     </script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=SN+Pro:ital,wght@0,200..900;1,200..900&family=Sniglet:wght@400;800&display=swap"
         rel="stylesheet">
     <style>
         .sn-pro-400 {
             font-family: "SN Pro", sans-serif;
             font-optical-sizing: auto;
             font-weight: 400;
             font-style: normal;
         }

         .sn-pro-500 {
             font-family: "SN Pro", sans-serif;
             font-optical-sizing: auto;
             font-weight: 500;
             font-style: normal;
         }

         .sn-pro-700 {
             font-family: "SN Pro", sans-serif;
             font-optical-sizing: auto;
             font-weight: 700;
             font-style: normal;
         }

         .sniglet-regular {
             font-family: "Sniglet", system-ui;
             font-weight: 400;
             font-style: normal;
         }

         .sniglet-extrabold {
             font-family: "Sniglet", system-ui;
             font-weight: 800;
             font-style: normal;
         }
     </style>

 </head>

 <body>


     @if (!Route::is('exam-questions'))
         <x-nav-bar />
     @endif
     <main class="min-h-screen" style="background: rgb(248, 249, 250);">
         {{ $slot }}
     </main>
     <x-footer />
 </body>

 </html>
