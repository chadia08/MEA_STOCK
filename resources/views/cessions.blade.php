<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ocp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link href="style/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/min2.css') }}" rel="stylesheet">
    <style>
         .modal-content{
            background-color: #2e3235;
        }
        .fa-trash{
            color: rgb(251, 47, 47);
        }
        .mybutton{
            float: right;
            margin-bottom:5px; 
        }
        .thead{
            background-color: #2e3235;
            color: rgb(214, 206, 206);
        }
    </style>

</head>

<body id="page-top" >
   
    <!-- Page Wrapper -->
    <div id="wrapper" >
        <!-- Sidebar -->
        @include('sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" >
               @include('topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid" >

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cessions de Sortie</h1>
                    </div>
                
                    <div class="corp" style="overflow-x:scroll;">
                                 
                        <table class="table">
                            <thead>
                                <tr class="thead">
                                    <th>N°_cession</th>
                                    <th>type_cession</th>
                                    <th>description</th>
                                    <th>qte_sortie</th>
                                    <th>source</th>
                                    <th>destination</th>
                                    <th>demandeur</th>
                                    <th>service</th>
                                    <th>code_article</th>
                                    <th>code_famille</th>
                                    <th>pmp</th>
                                    <th>PT_qte_sortie</th>
                                    <th>date_sortie</th>
                                </tr>
                            
                                @foreach($ots as $ot)
                                <tr>
                                    <td>{{$ot->num_ot}}</td>
                                    <td>{{$ot->type}}</td>
                                    <td>{{$ot->description}}</td>
                                    <td>{{$ot->qte_sortie}}</td>
                                    <td>{{$ot->source}}</td>
                                    <td>{{$ot->destination}}</td>
                                    <td>{{$ot->personne}}</td>
                                    <td>{{$ot->service}}</td>
                                    <td>{{$ot->code_article}}</td>
                                    <td>{{$ot->code_famille}}</td>
                                    <td>{{$ot->pmp}}</td>
                                    <td>{{$ot->pmp*$ot->qte_sortie}}</td>
                                    <td>{{$ot->date_sortie}}</td>
                                </tr>
                            @endforeach
</table>                        
                        
                    </div>
                </div>
            </div>  

            @include('footer')
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
	    if (urlParams.has('msg')) {
				 Swal.fire({
	  		icon: 'success',
	  		title: 'User has been deleted successfully',
	  		text: urlParams.get('msg')
	});
}
    if (urlParams.has('error')) {
				 Swal.fire({
	  		icon: 'error',
	  		title: 'User has not been deleted ! try again',
	  		text: urlParams.get('error')
	});
}
    </script>
    
  <script>
    const navAccueil = document.querySelector('.nav-link[href="blank.php"]');
    // Ajouter la classe "active" si la page actuelle correspond à la page "Accueil"
    if (window.location.href.includes('blank')) {
    navAccueil.classList.add('active');
}
  </script>
</body>

</html>