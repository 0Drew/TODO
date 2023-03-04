<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Todo</title>
    <script src="https://kit.fontawesome.com/ffda370744.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


    <style>
      .opacity{
        opacity: 0.5;
        text-decoration: line-through;
      }

    </style>
</head>
<body>

    <br>
<div class="row">
    <div class="col-md-2">

    
    </div>
    <div class="col-md-8">



        <button type="button" class="btn btn-success btn-add">ADD <i class="fa-sharp fa-solid fa-plus"></i></button><br><br>
        
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
              <tr>
             
                <td>Reservation</td>
                <td>List of Scheduled Appointment</td>
                <td>PENDING</td>
                <td><button type="button" class="btn btn-success" style="margin: 2px;"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="btn btn-danger btn-remove" style="margin: 2px;"><i class="fa-solid fa-trash"></i></button><button type="button" class="btn btn-success btn-done"  style="margin: 2px;" ><i class="fa-solid fa-check"></i></button></td>
              </tr>
              <tr>
                  <td>Reservation</td>
                  <td>List of Scheduled Appointment</td>
                  <td>PENDING</td>
                  <td><button type="button" class="btn btn-success" style="margin: 2px;"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="btn btn-danger btn-remove" style="margin: 2px;"><i class="fa-solid fa-trash"></i></button><button type="button" class="btn btn-success btn-done"  style="margin: 2px;"><i class="fa-solid fa-check"></i></button></td>
              </tr>
              <tr>
             
                  <td  class ="opacity"><del>Reservation</del></td>
                  <td  class ="opacity"><del>List of Scheduled Appointment</del></td>
                  <td>DONE</td>
                  <td><button type="button" class="btn btn-success"  style="margin: 2px;"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="btn btn-danger btn-remove" style="margin: 2px;" ><i class="fa-solid fa-trash"></i></button><button type="button" class="btn btn-success btn-done"  style="margin: 2px;"><i class="fa-solid fa-check"></i></button></td>
                
                </tr>
            </tbody>
          </table>
          
    
    </div>
    <div class="col-md-2">

    
    </div>

</div>




<script>

const TableHandler = {




        add:()=>{

        const tr = `<tr>
                  <td>Reservation</td>
                  <td>List of Scheduled Appointment</td>
                  <td>PENDING</td>
                  <td><button type="button" class="btn btn-success" style="margin: 2px;"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="btn btn-danger btn-remove" style="margin: 2px;"><i class="fa-solid fa-trash"></i></button><button type="button" class="btn btn-success btn-done"  style="margin: 2px;"><i class="fa-solid fa-check"></i></button></td>
                </tr>`;

        $('#tbl-todo tbody').append(tr)

        },

        done:(e)=>{

            $(e.currentTarget).closest('tr').find('td:nth-child(1)').addClass('opacity');
            $(e.currentTarget).closest('tr').find('td:nth-child(2)').addClass('opacity');

        },

        delete:(e)=>{

          $(e.currentTarget).closest('tr').remove();


        }




}
$(document).ready(()=>{


    $(document).on('click', '.btn-done',(e)=>TableHandler.done(e));

    $(document).on('click', '.btn-remove',(e)=>TableHandler.delete(e));

    $(document).on('click', '.btn-add',(e)=>TableHandler.add(e));


})







  </script>




    
</body>
</html>