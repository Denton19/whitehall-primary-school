<?php
    $title = 'Index';
    require_once 'includes/header.php' ;
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();

    

 ?>
</br></br></br></br></br>
    <h1 class="text-center"> Student's Admission</h1>


        <!--
            -first anme
            -last name
            -dob
            specialization (Database Admin, Software Devloper, Web Adninstration)
            - contact number
    
    -->
    
    <form method="post" action="success.php">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>

    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input required type="text" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
        <label for="specialty">Gender</label>
             <select class="form-control" id="specialty" name="specialty">
            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value=" <?php  
                    echo $r['specialty_id'] ?>" ><?php  
                    echo $r['name']; ?> </option>

           <?php  }  ?>
        </select>
    </div>  
    <div class="form-group">
        <label for="email">Email address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
        <small id="phone" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
    </div>
    <div>
                    <legend>Parents'</legend>
                    <div class="form-group">
                        <label for="parentFirstName">First Name</label>
                        <input type="text" class="form-control" id="parentFirstName" name="parentFirstName" />
                    </div>
                    <div class="form-group">
                        <label for="parentLastName">Last Name</label>
                        <input type="text" class="form-control" id="parentLastName" name="parentLastName" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" />
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="parentPhone">Contact Number</label>
                        <input type="text" class="form-control" id="parentPhone" name="parentPhone" aria-describedby="parentPhoneHelp" />
                        <small id="parentPhoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                    </div>
    
  <button type="submit"name="submit" class="btn btn-warning btn-block "><h3> Submit</h3></button>
</form>
        
<br>
<br>
<br>
<br>


    <?php require_once 'includes/footer.php' ;?>