<?php 
      $currentPage = 'create_websites.php';
      include("header.php");

    ?> 




      <!-- content goes here -->


<div class="container-fluid fill-100">
    
    <h2 id="myD">Create website</h2>
    
    
    <hr>

    <div class="row divider-m justify-content-center">

    <div class="col-sm-10 bg-mgray text-left divider-x"> 
    <form>
      <div class="form-group form-inline ml-4">
        <label for="exampleInputEmail1">Create a new website</label>
       </div>
       <div class="container">
        <div class="row">
          <div class="col-sm-4 ml-2 text-gray">
            You can create a new website here<span class="icon ml-2"> <i class="fas fa-globe "></i></span>
          </div>
          <div class="col-sm">
            <div class="form-group col-sm-10">
                <label for="dbname">Domain name</label>
                <input type="text" class="form-control text-light" id="dbname" placeholder="Enter domain name">
            </div>

            <div class="form-group col-sm-10">
                <label for="dbuser">User</label>
                <input type="text" class="form-control text-light" id="dbuser" placeholder="Enter database username">
            </div>
            <div class="form-group col-sm-10">
                <label for="dbpassword">Password</label>
                <input type="text" class="form-control text-light" id="dbpassword" placeholder="Enter password">
            </div>
          </div>
        </div>
       </div>
        <div class="justify-content-right text-right mr-5 ml-20">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    </div>
    </div>