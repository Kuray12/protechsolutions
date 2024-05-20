<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protech Solution</title>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

</head>

<body>

    @include('Landing.layout.includes.navbar')
    <!-- ======= Hero Section ======= -->
    @include('Landing.layout.includes.hero')


    <main id="main">
        @yield('main')
        @include('Landing.layout.includes.footer')
    </main>

</body>

</html>