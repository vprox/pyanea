<?php $message='δεν έχει επιλεχθεί' ?>
        <div class="content">
                <div class="container">              
                            <h1>Δηλωθείσες Προτιμήσεις Υποψήφιου Αναπληρωτή {{$Applicant->klados}}</h1>
                            <h2>{{$Applicant->surname}} &nbsp; {{$Applicant->name}}  </h2>
                            
                            <h3>Όνομα Πατρός: {{$Applicant->fathername}}  </h3>
                            
                            <h3>ΑΦΜ: {{$Applicant->afm}} &nbsp; ΑΔΤ|ΑΔ: <span>{{$Applicant->at}}</span></h3>
                    
                            <div> 
                            @if($Applicant->klados <>'ΕΒΠ')

                            κατηγορία πίνακα: {{$Applicant->katigoria_pinaka}}
                            @endif
                            
                            </div>

<form method='post' action='{{ route('Updatechoices') }}'>
                    {{ csrf_field()}}
                    <div class='form-group form-group-sm'>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Διευθύνσεις</th>
                                <th><b>Σειρά προτίμησης</b></th>      
                            </tr>
                        </thead>
                        
                        <tbody>

                            <tr class='info'>
                                <td>Α' Αθήνας</td>
                                <td align='center'><b>
                                    <select class='form-control' value='{{$Applicant->aathinas}}' name='aathinas'>
                                        <option>{{$Applicant->aathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr> 
                            <tr class='warning'>
                                <td>Β' Αθήνας</td>
                                <td align='center'><b>
                                    <select class='form-control'  value='{{$Applicant->bathinas}}' name='bathinas'>
                                        <option>{{$Applicant->bathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr>       
                            <tr class="success">
                                <td>Γ' Αθήνας</td>
                                <td align='center'><b>
                                    <select class='form-control'  value='{{$Applicant->cathinas}}' name='cathinas'>
                                        <option>{{$Applicant->cathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr>
                            <tr class='info'>
                                <td>Δ' Αθήνας</td>
                                 <td align='center'><b>
                                    <select class='form-control'  value='{{$Applicant->dathinas}}' name='dathinas'>
                                        <option>{{$Applicant->dathinas}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr> 
                            <tr class='warning'>
                                <td>Ανατολικής Αττικής</td>
                                <td align='center'><b>
                                    <select class='form-control'  value='{{$Applicant->anatolikiattiki}}' name='anatolikiattiki'>
                                        <option>{{$Applicant->anatolikiattiki}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>
                            </tr>       
                            <tr class="success">
                                <td>Δυτικής Αττικής</td>
                                <td align='center'><b>
                                    <select class='form-control'  value='{{$Applicant->ditikiattiki}}' name='ditikiattiki'>
                                        <option>{{$Applicant->ditikiattiki}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                </td>   
                            </tr>
                            <tr class='info'>
                                <td>Πειραιάς</td>
                                <td align='center'><b>
                                    <select class='form-control'  value='{{$Applicant->peiraias}}' name='peiraias'>
                                        <option>{{$Applicant->peiraias}}</option>
                                        <option disabled>---------</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select></b>
                                </td>    
                            </tr> 
                        </tbody>
                            
                     </table>
                     <span>
                     <button type='submit' class='btn btn-default'> 
                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> Αποθήκευση</span>
                     </button>
                     </span>
                    <input type='hidden' value='{{$Applicant->id}}' name='Applicant_id'>
                    <input type='hidden' value='0' name='keddyaathinas'>
                    <input type='hidden' value='0' name='keddybathinas'>
                    <input type='hidden' value='0' name='keddycathinas'>
                    <input type='hidden' value='0' name='keddydathinas'>
                    <input type='hidden' value='0' name='keddyanatolikiattiki'>
                    <input type='hidden' value='0' name='keddyditikiattiki'>
                    <input type='hidden' value='0' name='keddypeiraias'>
                    </div>
                </form>

            </div>
        </div>