
 <div class="container">
        <div class="row bg-dark pt-4">
            <div class="col-md-8 col-sm-12 pb-3">

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="width: 126%;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Select Your Booking Time</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                            </div>
                            <label  style="width: 80%;margin-left: 10%;margin-top: 10%;">Select Date</label>
                             <input type="date" id="appintment_date" name="appintment_date" class="form-control" style="width: 80%;margin-left: 10%;" required="true" onchange="document.getElementById('select_datetime').style.display='block';document.getElementById('show_date').innerHTML=document.getElementById('appintment_date').value" >

                            <div class="modal-body">
                                
                                <div class="card" id="select_datetime" style="display: none;">
                                     
                                    <div class="card-body">
                                         <div class="agenda">
                                            <div class="table-responsive">
                                                <table class="table table-condensed table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Morning</th>
                                                            <th>Evening</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Single event in a single day -->
                                                        <tr>
                                                            <td class="agenda-date" class="active" rowspan="3">
                                                               <p id="show_date">  </p>
                                                            </td>
                                                            <td class="agenda-time">
                                                                <input type="text" class="btn btn-outline-success" data-toggle="modal" data-target="#boking" value="8:00-9:00 AM" name="time">
                                                            </td>
                                                            <td class="agenda-events">
                                                                <div class="agenda-event">
                                                                    <input type="text" class="btn btn-outline-success" data-toggle="modal" data-target="#boking" value="2:00-3:00 PM" name="time">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="agenda-time">
                                                                <input type="text" class="btn btn-outline-success" data-toggle="modal" data-target="#boking" value="9:15-10:00 PM" name="time">
                                                            </td>
                                                            <td class="agenda-events">
                                                                <div class="agenda-event">
                                                                    <input type="text" class="btn btn-outline-success" data-toggle="modal" data-target="#boking" value="3:00-4:00 PM" name="time">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="agenda-time">
                                                                <input type="text" class="btn btn-outline-success" data-toggle="modal" data-target="#boking" value="10:00-11:00 AM" name="time">
                                                            </td>
                                                            <td class="agenda-events">
                                                                <div class="agenda-event">
                                                                    <input type="text" class="btn btn-outline-success" data-toggle="modal" data-target="#boking" value="4:00-5:00 PM" name="time">
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="modal fade" id="boking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Doctors Booking</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Enter your name" name="appoinmenter_name" required="true">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Email:</label>
                                                            <input type="email" class="form-control form-control-sm" id="email" placeholder="Enter your email" name="appoinmenter_email" required="true"> 
                                                            
                                                            </div>
                                                            
                                                        <div class="form-group">
                                                            <label for="name">Phone No :</label>
                                                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Work Phone Number" name="appoinmenter_phone" required="true">

                                                        </div>
                                                        

                                                        <h5>Please ensure your Payment Our Bkash Number 01936197990</h5>
                                                        <h6>You will be notified within 1 hour..</h6>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="submit_appointment">Submit</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                           