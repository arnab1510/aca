<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sidebar</title>
    <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="assets/js/solid.js"></script>
    <script defer src="assets/js/fontawesome.js"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>CMS</h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="homeT.php"><span><i class="fas fa-user" style="margin-right: 15px;"></i></span>Home</a>
                </li>
                <!--<li>
                    <a href="attendanceT.php">Attendance</a>
                </li>-->
                <li>
                    <a href="noticesT.php"><span><i class="fas fa-bullhorn" style="margin-right: 15px;"></i></span>Notices</a>
                </li>
                <li>
                    <a href="grievanceT.php"><span><i class="fas fa-exclamation-triangle" style="margin-right: 15px;"></i></span>Grievances</a>
                </li>
                <li>
                    <a href="notesT.php"><span><i class="fas fa-book-open" style="margin-right: 15px;"></i></span>Notes</a>
                </li>
                <li>
                    <a href="tutorialsT.php"><span><i class="fas fa-copy" style="margin-right: 15px;"></i></span>Tutorials</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="index.php?logout='1'" class="download"><span><i class="fas fa-sign-out-alt" style="margin-right: 15px;"></i></span>Logout</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content" style="z-index: 999">
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-nav">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
            </button>
            <div class="ml-auto" style="color: #808080; font-size: 1.1em;">Hey <?php echo $_SESSION['username'];?>!</div>
            </nav>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="assets/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content, #content1').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>