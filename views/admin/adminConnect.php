<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Alguaïa">
    <meta name="copyright" content="Mouloud Bessa - Alguaïa - https://www.ilandev.fr/">
    <meta name="language" content="fr">
    <link rel="icon" type="image/png" href="/views/assets/img/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/admin/assets/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="/views/admin/assets/js/adminConnect.js"></script>
    <script src="/views/admin/assets/js/config.js"></script>
    <link rel="stylesheet" href="/views/admin/assets/css/adminConnect.css">

    <title>Alguaïa | Admin - Bienvenue <?php echo $_SESSION["login"][0]->firstname;?></title>
</head>
<body>

        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header d-flex align-item-center justify-content-center text-center">
                    <img src="/views/assets/img/logo.png" alt="Notre logo" >
                    <h3>Alguaïa Admin</h3>
                </div>

                <ul id="sidebarMenu">
                    <li id="dashboard" class="active">
                        <a href="/admin">
                            <i class="far fa-chart-bar"></i>
                            Analytique
                        </a>
                    </li>
                    <li id="questionnaire">
                        <a href="/admin/questionnaire">
                            <i class="fas fa-question"></i>
                            Questionnaire
                        </a>
                    </li>
                    <li id="contact">
                        <a href="/admin/contact">
                            <i class="fas fa-address-book"></i>                           
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>

            <div id="content" class="w-100">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-ala navbar-btn">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><?php echo $_SESSION["login"][0]->firstname." ".$_SESSION["login"][0]->lastname;?></a></li>
                                <li><button type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default dropdown-toggle"><img src="<?php echo $_SESSION["login"][0]->url;?>" alt="" width="50px"></button></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <?php require_once $_SERVER['DOCUMENT_ROOT']."/controllers/admin/dashboardController.php";?>
                
            </div>
        </div>
</body>
</html>


