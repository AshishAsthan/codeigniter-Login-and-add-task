<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Task</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        .mt40{
            margin-top: 40px;
        }
    </style>
</head>
<body>
    
<div class="container">
  
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Add Task</h2>
        </div>
    </div>
</div>
     
     
<form action="<?php echo base_url('index.php/note/store') ?>" method="POST" name="edit_note">
   <input type="hidden" name="id">
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Task Name</strong>
                <input type="text" name="title" class="form-control" placeholder="Task Name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
               <select name="description" class="form-control">
                 <option>Select Status</option>
                 <option value="pending">Pending</option>
                 <option value="InProgress">InProgress</option>
                 <option value="complete">complete</option>
                 </select>
            </div>
        </div>
        <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
 
</div>
     
</body>
</html>