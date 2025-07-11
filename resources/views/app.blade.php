<!-- resources/views/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
    <link rel="stylesheet" href="https://glassmorp.tailwinddashboard.com/src/css/style.css">

    <link rel="icon" type="image/png" sizes="32x32" href="https://glassmorp.tailwinddashboard.com/src/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- local icons -->
    <link rel="stylesheet" id="icons"
        href="https://glassmorp.tailwinddashboard.com/vendors/bootstrap-icons/font/bootstrap-icons.min.css">
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body x-data="{ sidebar: false }" :class="{ 'layout-compact': sidebar, '': !(sidebar) }"
    class="font-sans text-sm text-neutral-700 dark:text-neutral-100 bg-purple-300 dark:bg-neutral-700 bg-cover bg-fixed bg-center bg-[url('https://glassmorp.tailwinddashboard.com/img/bg.jpg')] dark:bg-[url('https://glassmorp.tailwinddashboard.com/img/bg-dark.jpg')]">

    @inertia
</body>
<!-- Alpine Plugins -->
<script defer src="https://glassmorp.tailwinddashboard.com/vendors/@alpinejs/collapse/dist/cdn.min.js"></script>

<!-- Alpine Core -->
{{-- <script defer src="https://glassmorp.tailwinddashboard.com/vendors/alpinejs/dist/cdn.min.js"></script> --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://glassmorp.tailwinddashboard.com/src/js/switch-dark.js"></script>

<!--start::Vendor javascript (only on this page)-->
<script src="https://glassmorp.tailwinddashboard.com/vendors/chart.js/dist/chart.umd.js"></script><!-- charts -->
<script src="https://glassmorp.tailwinddashboard.com/src/js/charts/chart-config.js"></script><!-- chart config -->

</html>
