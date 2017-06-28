<?php $message='δεν έχει επιλεχθεί' ?>
        <div class="content ">
                <div class="container">              
                            <h3>Δηλωθείσες Προτιμήσεις Υποψήφιου Αναπληρωτή {{$Applicant->klados}}</h3>
                            <h1>{{$Applicant->surname}} &nbsp; {{$Applicant->name}}  </h1>
                            
                            <h3>Όνομα Πατρός: {{$Applicant->fathername}}  </h3>
                            
                            <h3>ΑΦΜ: {{$Applicant->afm}} &nbsp; ΑΔΤ|ΑΔ: <span>{{$Applicant->at}}</span></h3>
                    
                            <div> 
                            @if($Applicant->klados <>'ΕΒΠ')

                            κατηγορία πίνακα: {{$Applicant->katigoria_pinaka}}
                            @endif
                            
                            </div>

<form method='post' action='{{ route('Updatechoices') }}'>
                    {{ csrf_field()}}
                    <div class='form-group form-group-sm '>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Διευθύνσεις</th>
                                <th><b>καμια επιλογή</b></th>      
                                <th><b>1η Επιλογή</b></th>
                                <th><b>2η Επιλογή</b></th>
                                <th><b>3η Επιλογή</b></th>
                                <th><b>4η Επιλογή</b></th>
                                <th><b>5η Επιλογή</b></th>
                                <th><b>6η Επιλογή</b></th>
                                <th><b>7η Επιλογή</b></th>      
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr class='info'>
                                <div class='form-group form-group-lg'>
                                <td>Α' Αθήνας</td>
                                @if($Applicant->aathinas==0)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="0" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="0"> </label></td>
                                @endif
                                @if($Applicant->aathinas==1)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="1" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="1"> </label></td>
                                @endif
                                @if($Applicant->aathinas==2)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="2" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="2"> </label></td>
                                @endif
                                @if($Applicant->aathinas==3)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="3" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="3"> </label></td>
                                @endif
                                @if($Applicant->aathinas==4)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="4" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="4"> </label></td>
                                @endif
                                @if($Applicant->aathinas==5)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="5" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="5"> </label></td>
                                @endif
                                @if($Applicant->aathinas==6)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="6" checked> </label></td>  
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="6"> </label></td>
                                @endif
                                @if($Applicant->aathinas==7)
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="7" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="aathinas" value="7"> </label></td>
                                @endif
                                </div>
                            </tr>
                            
                            
                            <tr class='warning'>
                            <div class='form-group form-group-sm '> 
                                <td>Β' Αθήνας</td>
                                @if($Applicant->bathinas==0)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="0" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="0"> </label></td>
                                @endif
                                @if($Applicant->bathinas==1)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="1" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="1"> </label></td>
                                @endif
                                @if($Applicant->bathinas==2)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="2" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="2"> </label></td>
                                @endif
                                @if($Applicant->bathinas==3)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="3" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="3"> </label></td>
                                @endif
                                @if($Applicant->bathinas==4)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="4" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="4"> </label></td>
                                @endif
                                @if($Applicant->bathinas==5)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="5" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="5"> </label></td>
                                @endif
                                @if($Applicant->bathinas==6)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="6" checked> </label></td>  
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="6"> </label></td>
                                @endif
                                @if($Applicant->bathinas==7)
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="7" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="bathinas" value="7"> </label></td>
                                @endif
                            </div>
                            </tr> 
                            
                            <tr class='success'>
                                <td>Γ' Αθήνας</td>
                                @if($Applicant->cathinas==0)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="0" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="0"> </label></td>
                                @endif
                                @if($Applicant->cathinas==1)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="1" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="1"> </label></td>
                                @endif
                                @if($Applicant->cathinas==2)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="2" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="2"> </label></td>
                                @endif
                                @if($Applicant->cathinas==3)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="3" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="3"> </label></td>
                                @endif
                                @if($Applicant->cathinas==4)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="4" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="4"> </label></td>
                                @endif
                                @if($Applicant->cathinas==5)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="5" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="5"> </label></td>
                                @endif
                                @if($Applicant->cathinas==6)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="6" checked> </label></td>  
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="6"> </label></td>
                                @endif
                                @if($Applicant->cathinas==7)
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="7" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="cathinas" value="7"> </label></td>
                                @endif
                            </tr> 
                            <tr class='warning'>
                                <td>Δ' Αθήνας</td>
                                @if($Applicant->dathinas==0)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="0" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="0"> </label></td>
                                @endif
                                @if($Applicant->dathinas==1)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="1" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="1"> </label></td>
                                @endif
                                @if($Applicant->dathinas==2)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="2" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="2"> </label></td>
                                @endif
                                @if($Applicant->dathinas==3)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="3" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="3"> </label></td>
                                @endif
                                @if($Applicant->dathinas==4)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="4" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="4"> </label></td>
                                @endif
                                @if($Applicant->dathinas==5)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="5" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="5"> </label></td>
                                @endif
                                @if($Applicant->dathinas==6)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="6" checked> </label></td>  
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="6"> </label></td>
                                @endif
                                @if($Applicant->dathinas==7)
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="7" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="dathinas" value="7"> </label></td>
                                @endif
                            </tr> 
                            <tr class='info'>
                                <td>Ανατολική Αττική</td>
                                @if($Applicant->anatolikiattiki==0)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="0" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="0"> </label></td>
                                @endif
                                @if($Applicant->anatolikiattiki==1)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="1" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="1"> </label></td>
                                @endif
                                @if($Applicant->anatolikiattiki==2)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="2" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="2"> </label></td>
                                @endif
                                @if($Applicant->anatolikiattiki==3)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="3" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="3"> </label></td>
                                @endif
                                @if($Applicant->anatolikiattiki==4)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="4" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="4"> </label></td>
                                @endif
                                @if($Applicant->anatolikiattiki==5)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="5" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="5"> </label></td>
                                @endif
                                @if($Applicant->anatolikiattiki==6)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="6" checked> </label></td>  
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="6"> </label></td>
                                @endif
                                @if($Applicant->anatolikiattiki==7)
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="7" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="anatolikiattiki" value="7"> </label></td>
                                @endif
                            </tr> 
                             <tr class='success'>
                                <td>Δυτική Αττική</td>
                                @if($Applicant->ditikiattiki==0)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="0" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="0"> </label></td>
                                @endif
                                @if($Applicant->ditikiattiki==1)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="1" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="1"> </label></td>
                                @endif
                                @if($Applicant->ditikiattiki==2)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="2" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="2"> </label></td>
                                @endif
                                @if($Applicant->ditikiattiki==3)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="3" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="3"> </label></td>
                                @endif
                                @if($Applicant->ditikiattiki==4)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="4" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="4"> </label></td>
                                @endif
                                @if($Applicant->ditikiattiki==5)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="5" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="5"> </label></td>
                                @endif
                                @if($Applicant->ditikiattiki==6)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="6" checked> </label></td>  
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="6"> </label></td>
                                @endif
                                @if($Applicant->ditikiattiki==7)
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="7" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="ditikiattiki" value="7"> </label></td>
                                @endif
                            </tr> 
                             <tr class='success'>
                                <td>Πειραιάς</td>
                                @if($Applicant->peiraias==0)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="0" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="0"> </label></td>
                                @endif
                                @if($Applicant->peiraias==1)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="1" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="1"> </label></td>
                                @endif
                                @if($Applicant->peiraias==2)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="2" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="2"> </label></td>
                                @endif
                                @if($Applicant->peiraias==3)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="3" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="3"> </label></td>
                                @endif
                                @if($Applicant->peiraias==4)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="4" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="4"> </label></td>
                                @endif
                                @if($Applicant->peiraias==5)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="5" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="5"> </label></td>
                                @endif
                                @if($Applicant->peiraias==6)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="6" checked> </label></td>  
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="6"> </label></td>
                                @endif
                                @if($Applicant->peiraias==7)
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="7" checked> </label></td>
                                @else
                                    <td><label class="radio-inline"><input type="radio" name="peiraias" value="7"> </label></td>
                                @endif
                            </tr>
                        </tbody>
                            
                     </table>
                     </div>
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
                    
</form>
           
                </div>
        </div>
