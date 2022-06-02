     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <title>app</title>
     <link rel="stylesheet" href="../../assets/css/style.css" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta name="description" content="finddev" />
     <meta name="keywords" content="finddev" />
     <link rel="stylesheet" href="../../assets/font/font-style.css" />
     <link rel="stylesheet" href="../../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
     <link rel="apple-touch-icon" sizes="180x180" href="../../img/ans_logo_new.jpeg" />
     <link rel="shortcut icon" href="../../img/ans_logo_new.jpeg" />
     <link rel="stylesheet" href="../../assets/fonts/style.css">
     <link rel="stylesheet" href="../../assets/icons/icon.css">
     <script src="../../assets/data-table/jquery.dataTables.min.js"></script>
     <script src="../../assets/data-table/dataTables.bootstrap4.min.js"></script>
     <link rel="stylesheet" href="../../assets/data-table/dataTables.bootstrap4.min.css" />
     <!-- <link rel="stylesheet" href="../../assets/floating/app.css"> -->
     <style>
          .active .col h5 {
               color: #c92a2a;
          }

          .strong {
               font-size: 18px !important;
          }
     </style>


     <div class="modal fade dialogbox" id="process-success" data-backdrop="static" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-icon text-success">
                         <i class="icon-check-circle"></i>
                    </div>
                    <div class="modal-header">
                         <h5 class="modal-title text-success">ສຳເລັດ</h5>
                    </div>
                    <div class="modal-body">
                         ການດຳເນີນການສຳເລັດຮຽບຮ້ອຍແລ້ວ
                    </div>
                    <div class="modal-footer">
                         <div class="btn-inline">
                              <a href="#" class="btn text-danger" data-dismiss="modal">ປິດ</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="modal fade dialogbox" id="process-error" data-backdrop="static" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-icon text-danger">
                         <i class="icon-x-circle"></i>
                    </div>
                    <div class="modal-header">
                         <h5 class="modal-title text-danger">ຜິດພາດ</h5>
                    </div>
                    <div class="modal-body">
                         ການດຳເນີນການບໍ່ສຳເລັດ
                    </div>
                    <div class="modal-footer">
                         <div class="btn-inline">
                              <a href="#" class="btn text-danger" data-dismiss="modal">ປິດ</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>