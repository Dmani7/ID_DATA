
<div id="emp-search-results-window-wrap">

    <ul id="emp-results-wrapper">

        <!-- repeating section -->
        <?php

            while($rowFetchSelectiveServices = mysqli_fetch_array($hsp_grp_Services_result)){

                //$genServiceid = $rowFetchSelectiveServices['ServicesID'];


        ?>

            <div class="hsp-category-list">

                <li>

                    <div class="hsp-search-results-window">

                        <div class="hsp-search-term-list">

                            <a href="#" class="emp-options" onClick="add_serviceID(event, <?= $rowFetchSelectiveServices['ServicesID'];?>);"><?php echo $rowFetchSelectiveServices['ServiceName'];?></a>

                        </div>

                    </div>  

                </li>

            </div>

        <?php       }

        ?>

        <!-- repeating section --> 

    </ul>                                                                      



</div>

//this is the field that i want the ID of the selected item from the list to be displayed

<input type="text" name="" id="selected_service_id">





//this is my js i have done so far
        function add_serviceID( event, ID ) {

            var newtext = ID;


            if(document.hsp_employee_bio_form.selected_service_id.value === "") {

                document.hsp_employee_bio_form.selected_service_id.value = newtext;                


            } else {

                document.hsp_employee_bio_form.selected_service_id.value = "";

            }

        }
