<!doctype html>
<html lang="en">
    <head>
        <title>TareaPHP</title>
        <meta charset="utf-8">
        <div>
            <meta name="description" content="The small framework with powerful features">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <script src="https://kit.fontawesome.com/5b5467fb30.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
            
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">        
        </div>
        
			
        <!-- ------------------------------------STYLES Css---------------->

        <style>


            .tituloNav{
                text-shadow: 0.1em 0.1em #000;
            }
            .titulo{
                font-family: Tahoma ;
                text-align: center;
            }

            .color1{
                color: #26A69A;
            }
            .BarraPrTabla{
                color: #26A69A;
                text-align: center;
            }
            .centrarITem{
                align-items: center;
                justify-content:center
            }
            .color2{
                color: rgba(200, 200, 200, 1);
            }
            html, body {
                color: rgba(200, 200, 200, 1);
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
                font-size: 16px;
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-rendering: optimizeLegibility;
                background-Color: #222;
            }
            .btn2 {
                
                border: 2px solid #26A69A;
                background-color:  #4caf4f00;
                border-color: #26A69A;
                color: #26A69A;
                padding: 4px 12px;
                font-size: 16px;
                cursor: pointer;
            }
            .btn2:hover {
                background-color: #26A69A;
                color: black;
            }
            .copyrights {
                bottom:0;
                clear: both;
                position: relative;
                width: 100%;
                height:70px;
                margin-top:300px;
                text-align: center;
                color: #26A69A;
            }
            .container{
                margin-top: 70px;
                position:relative;
                height: 100%;
                max-height: auto;
            }
            div.center {
                text-align: center;
            }
            table>tbody>tr>td{
                background-color:#222 !important;
            }
            label {
                color: rgba(200, 200, 200, 1);
            }
            .dataTables_info{
                color: rgba(200, 200, 200, 1)!important;
            }
            select{
                border-color: #26A69A !important ;
                border: 2px solid #26A69A;
                color: #26A69A ;
            }
            input{
                border: 2px ;
                border-color: #26A69A !important ;
                color: #26A69A ;
            }
            .paginate_button   {
                border-color: #26A69A !important;
                border: 2px solid #26A69A;
                color:#26A69A !important;
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                color: #26A69A !important;
            }
        </style>
    </head>


    <body>


        <!-----------------------------------------NAVBAR --------------------------------------->
        <header>
            <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
                <div class="navbar-nav">
                    <h3 class="color1 tituloNav " href="http://localhost/TareaPHP/public/">Gonzalo Sepúlveda Y.</h3>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon color1"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                    <ul class="mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item active  ">
                            <a class="nav-link" href="http://localhost/TareaPHP/public/">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                            
                        <li class="nav-item active ">
                            <a class="nav-link" href="http://localhost/TareaPHP/public/InfoUF">Info UF</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!-----------------------------------------TITULO --------------------------------------->
        <div class="container ">
                <h2 class="color1 titulo">Datos Historicos UF</h2>
        </div>



        <!-----------------------------------------TABLA --------------------------------------->
        
        <div class="container mt-5">

            <button class="btn2 success btn-sm mb-2" data-toggle="modal"data-target="#crearModal">
                <i class="fas fa-plus">Agregar</i>                              
            </button>                    

            <table id="table_id" class="table table-bordered tablaCss">

                <thead >
                    <tr class="bg-dark BarraPrTabla">
                        <th scope="col" >Fecha</th>
                        <th scope="col" >Valor</th>
                        <th scope="col" ></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($datos as $resultado):?>
                        <tr class=" color2">
                            
                            <td scope="col"><?php  echo  $resultado['fecha'] ?></td>
                            <td scope="col"><?php  echo  $resultado['valor'] ?></td>
                            <td scope="col">
                                <div class="row ">
                                    <div class="col center">

                                        <button 
                                            class="btn2 success btn-sm "  
                                            data-toggle="modal"
                                            data-target="#editarModal"
                                            onclick="editar(
                                                <?php echo $resultado['id']  ?>, 
                                                <?php echo $resultado['fecha']  ?>,
                                                <?php echo $resultado['valor']  ?>                                                     
                                            )">
                                            <i class="fas fa-pencil-alt">Editar</i>      
                                        </button>

                                        <button 
                                                class="btn2 success btn-sm "  
                                                onclick="eliminar(
                                                    <?php echo $resultado['id']  ?>, 
                                                )">
                                            <i class="fas fa-trash">Eliminar</i>       
                                        </button>

                                    </div>
                                </div>                           
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
        <!-----------------------------------------MODAL EDITAR DATOS UF --------------------------------------->                                            
       

        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <form>
                    
                        <input type="hidden" id="mdlId">

                        <div class="modal-header">
                            <h5 class="modal-title color1">Editar</h5>
                            <button  type="button" class="close color1" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <label>Año</label>
                            <select type="text" name="mdlfecha" class="form-control" id="mdlfecha" placeholder="Año">
                                <script>
                                    var d = new Date();
                                    var n = d.getFullYear();
                                    for(var i = n; i >=1967; i--){document.write('<option>'+i+'</option>')};
                                </script>
                            </select>
                        </div>
                  
                        <div class="modal-body">
                            <label>Valor</label>
                            <input type="number" name="mdlValor" class="form-control" id="mdlValor" placeholder="Valor">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn2 success btn-sm" onclick="actualizar()">Actualizar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>



        <!-----------------------------------------MODAL CREAR DATOS UF --------------------------------------->    

        <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <form >
                        <div class="modal-header">
                            <h5 class="modal-title color1">CREAR</h5>
                            <button  type="button" class="close color1" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Año</label>
                            <select type="text" name="mdlFechaAgregar" class="form-control" id="mdlFechaAgregar" placeholder="Año">
                         
                                <script>
                                    var d = new Date();
                                    var n = d.getFullYear();
                                    for(var i = n; i >=1967; i--){document.write('<option>'+i+'</option>')};
                                </script>
                            </select>
                        </div>
                  
                        <div class="modal-body">
                            <label>Valor</label>
                            <input type="number" name="mdlValorAgregar" value="0" class="form-control" id="mdlValorAgregar" placeholder="Valor">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn2 success btn-lg" onclick="agregar()">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-----------------------------------------FOOTER --------------------------------------->    

        <footer>
            <div class="copyrights bg-dark">
                <h4 class="tituloNav">&copy; <?= date('Y') ?> Copyright.</h4>
            </div>
        </footer>


        <!--------SCRIPT --------> 
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>   

        <script>

            
            //   <!-----------------------------------------FUNCION  AGREGAR DATOS AL MODAL DE EDITAR--------------------------------------->   

            function editar(id, fecha, valor){
                $('#mdlId').val(id);
                $('#mdlfecha').val(fecha);
                $('#mdlValor').val(valor);
            };
         
         
            //   <!-----------------------------------------FUNCION  ACTUALIZAR --------------------------------------->   

            function actualizar(){
                var idUF =$('#mdlId').val();
                var fechaUF =$('#mdlfecha').val();
                var valorUF =$('#mdlValor').val();
                parametros= {
                    'id' : idUF,
                    'fecha' : fechaUF,
                    'valor' : valorUF
                };

                if(valorUF <= "0" ){
                    return alert("Valor mayor a 0 !!");
			    };
               
                $.ajax({
                    url : "http://localhost/TareaPHP/public/InfoUF/editar",
                    type : "POST",
                    data: parametros,
                    success : function(data) {
                        window.location.href=`http://localhost/TareaPHP/public/InfoUF`;
                    },
                    error : function(data) {
                        alert("Ocurrió un ERROR !!");
                    }
                });
            };



            //   <!-----------------------------------------FUNCION  AGREGAR--------------------------------------->    
            function agregar(){
                
                var fechaUF =$('#mdlFechaAgregar').val();
                var valorUF =$('#mdlValorAgregar').val();
                parametros= {
                    'fecha' : fechaUF,
                    'valor' : valorUF
                };

                if(valorUF <= "0" ){
                    return alert("Valor mayor a 0 !!");
			    };
               
                $.ajax({
                    url : "http://localhost/TareaPHP/public/InfoUF/editar",
                    type : "POST",
                    data: parametros,
                    success : function(data) {
                        window.location.href=`http://localhost/TareaPHP/public/InfoUF`;
                    },
                    error : function(data) {
                        alert("Ocurrió un ERROR !!");
                    }
                });
            };



            //   <!-----------------------------------------FUNCION  ELIMINAR--------------------------------------->    

            function eliminar(id){

                parametros= {'id' : id,};

                $.ajax({
                    url : "http://localhost/TareaPHP/public/InfoUF/borrar",
                    type : "POST",
                    data: parametros,
                    success : function(data) {
                        window.location.href=`http://localhost/TareaPHP/public/InfoUF`;
                    },
                    error : function(data) {
                        alert("Ocurrió un ERROR !!");
                    }
                });
            };


            //   <!-----------------------------------------FUNCION  CAMBIAR NOMBRE EN TABLA--------------------------------------->  

            $(document).ready( function () {
                $('#table_id').DataTable({
                    "language":{
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando  0 al 0, total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sSearch": "Buscar:",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de masnera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                        }
                    },
                });
            });
        </script>
    </body>
</html>