
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>
<body class="fix-header card-no-border fix-sidebar">

    <div id="main-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.aside')
        <div class="page-wrapper">
            @include('admin.pages.'.$page_folder.'.'.$page_name)
            <footer class="footer"> © 2021 Adminwrap by <a href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
        </div>
    </div>
    @include('admin.layouts.footer-script')
</body>
</html>