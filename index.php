<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Todo</title>
    <script src="https://kit.fontawesome.com/ffda370744.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
      .opacity{
        opacity: 0.5;
        text-decoration: line-through;
      }

    </style>
</head>
<body>



<br>
<script>
    const SwalHandler = {
        handleSwal1: () => {
            Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
            )
        },

        
        handleSwal2: () => {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    ToastHandler.success("Deleted")
                }
            })
        }
    };



    const ToastHandler = {
        error: (msg) => {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["error"](msg);
        },
        success: (msg) => {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["success"](msg);
        },
        show:(msg) => {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["success"](msg);
        } 
    }

    </script>








<?php include 'addform.php'; ?>
<?php include 'Raf.php'; ?>


    <br>

<div class="row">
    <div class="col-md-2">

    
    </div>
    <div class="col-md-8">



        <button type="button" class="btn btn-success btn-add">ADD <i class="fa-sharp fa-solid fa-plus"></i></button><br><br>
        <?php include 'counter.php'; ?>
        <br>






  





        
        <table class="table" id="tbl-todo">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="todo-row" data-id="1">
             
                <td>Reservation</td>
                <td>List of Scheduled Appointment1</td>
                <td>PENDING</td>
                <td><button type="button" class="btn btn-success btn-edit" style="margin: 2px;"  ><i class="fa-solid fa-pen-to-square "></i></button><button type="button" class="btn btn-danger btn-remove" style="margin: 2px;"><i class="fa-solid fa-trash"></i></button><button type="button" class="btn btn-success btn-done"  style="margin: 2px;" ><i class="fa-solid fa-check"></i></button></td>
              </tr>
              <tr  class="todo-row" data-id="2">
                  <td>Reservation</td>
                  <td>List of Scheduled Appointment2</td>
                  <td>PENDING</td>
                  <td><button type="button" class="btn btn-success btn-edit" style="margin: 2px;" ><i class="fa-solid fa-pen-to-square "></i></button><button type="button" class="btn btn-danger btn-remove" style="margin: 2px;"><i class="fa-solid fa-trash"></i></button><button type="button" class="btn btn-success btn-done "  style="margin: 2px;"><i class="fa-solid fa-check"></i></button></td>
              </tr>
              <tr class="todo-row" data-id="3">
             
                  <td  class ="opacity">Reservation</td>
                  <td  class ="opacity">List of Scheduled Appointment3</td>
                  <td>DONE</td>
                  <td><button type="button" class="btn btn-success btn-edit"  style="margin: 2px;" ><i class="fa-solid fa-pen-to-square "></i></button><button type="button" class="btn btn-danger btn-remove" style="margin: 2px;" ><i class="fa-solid fa-trash"></i></button><button type="button" class="btn btn-success btn-done done"  style="margin: 2px;"><i class="fa-solid fa-check"></i></button></td>
                
                </tr>
            </tbody>
          </table>
          
    
    </div>
    <div class="col-md-2">

    
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>


const TableHandler = {




        add:(e)=>{
          e.preventDefault();

           const title = $('#titletxt').val();
           const description = $('#comment').val();
          const id = $("#tbl-todo tbody>tr").length;
           const tr = `<tr class="todo-row" data-id="${ id+1 }">
                  <td>${ title }</td>
                  <td>${ description }</td>
                  <td>PENDING</td>
                  <td>
                      <button type="button" class="btn btn-success btn-edit" >
                        <i class="fa-solid fa-pen-to-square"></i>
                      </button>
                      <button type="button" class="btn btn-danger btn-remove" >
                        <i class="fa-solid fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-success btn-done"  ><i class="fa-solid fa-check"></i></button></td>
                </tr>`;

           $('#tbl-todo tbody').append(tr);

           let pendingtotal = parseInt($('.counter-pending').attr("data-counter"));
           pendingtotal += 1;

          $('.counter-pending').html(pendingtotal);
          $('.counter-pending').attr("data-counter", pendingtotal);





          ToastHandler.success("Success!");

       
  
           $("#add-to-do-form")[0].reset();

          

        },

        done:(e)=>{

          if($(e.currentTarget).hasClass("done")){
            return false;
          }

       


            $(e.currentTarget).closest('tr').find('td:nth-child(1)').addClass('opacity');
            $(e.currentTarget).closest('tr').find('td:nth-child(2)').addClass('opacity');

            
            let donetotal = parseInt($('.counter-done').attr("data-counter"));
               donetotal += 1;

          $('.counter-done').html(donetotal);
        
          $('.counter-done').attr("data-counter", donetotal);




          let pendingtotal = parseInt($('.counter-pending').attr("data-counter"));
           pendingtotal -= 1;

          $('.counter-pending').html(pendingtotal);
          $('.counter-pending').attr("data-counter", pendingtotal);



          $(e.currentTarget).closest('tr').find('td:nth-child(3)').html("DONE");



          $(e.currentTarget).addClass("done");
          ToastHandler.success("Done!");

        },

        delete:(e)=>{

          $(e.currentTarget).closest('tr').remove();


         const status = $(e.currentTarget).closest('tr').find('td:nth-child(3)').html()


         if(status=="PENDING"){
          let pendingtotal = parseInt($('.counter-pending').attr("data-counter"));
           pendingtotal -= 1;

          $('.counter-pending').html(pendingtotal);
          $('.counter-pending').attr("data-counter", pendingtotal);


         }
         else{

          
          let donetotal = parseInt($('.counter-done').attr("data-counter"));
               donetotal -= 1;

          $('.counter-done').html(donetotal);
        
          $('.counter-done').attr("data-counter", donetotal);

         }

        },


        edit:(e)=>{
          
          const todo = $(e.currentTarget).closest('tr').find('td:nth-child(1)').html();
          const description =  $(e.currentTarget).closest('tr').find('td:nth-child(2)').html();
          

          $("#editTitle").val(todo);
          $("#editDescription").val(description);

          const id =  $(e.currentTarget).closest('tr').attr("data-id");
         
        $('#exampleModal').attr('data-id', id);
          ModalHandler.show();
          


        },



        Submitedit:(e)=>{
          
    
        var Title1 = $("#editTitle").val();
        var Description1 = $("#editDescription").val();
        
   
      const id =  $('#exampleModal').attr('data-id');
        $(`.todo-row[data-id="${id}"]`).find('td:nth-child(1)').html(Title1);
        $(`.todo-row[data-id="${id}"]`).find('td:nth-child(2)').html(Description1);

       
        ModalHandler.hide();
          


        }





      }


const ModalHandler = {

  show:()=>{

    $('#exampleModal').modal('show');
    
  },


  hide:()=>{

$('#exampleModal').modal('hide');

}



}





$(document).ready(()=>{


    $(document).on('click', '.btn-done', (e) => TableHandler.done(e) );

    $(document).on('click', '.btn-remove',(e )=> TableHandler.delete(e) );

    $(document).on('submit', '#add-to-do-form',(e)=>TableHandler.add(e));

    $(document).on('click', '.btn-edit',(e)=>TableHandler.edit(e));


    $(document).on('click', '.btn-SubmitEdit',(e)=>TableHandler.Submitedit(e));

    

})







  </script>




    
</body>
</html>