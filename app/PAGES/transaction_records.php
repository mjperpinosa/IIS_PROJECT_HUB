<!DOCTYPE HTML>
<html>
    <head>
        <title>Transaction Records</title>
        <link rel = "stylesheet" href = "../CSS/includes_all_css_files.css" />
    </head>
    <body>
        <div id = "transaction_record_wrapper_div">
            <h2 id='transaction_record_title_h2'>Transaction Records</h2>
            <div id='pager_info_div'>
                <div class='input-prepend' >

                    <!-- start experiment-->
                    <div class='btn-group'>
                        <input type='hidden' id='searchBy_input' value='t.transaction_date'/>
                        <button type='button' id='searchBy_btn' class='btn dropdown-toggle' data-toggle='dropdown'>
                            Date &nbsp;<span class='caret'></span>
                        </button>
                        <ul class='dropdown-menu' id='searchBy_ul'>
                            <li><a href='#' tabindex="-1"> Date <input type='hidden' value='t.transaction_date' /></a></li>
                            <li><a href='#' tabindex="-1"> Product Name <input type='hidden' value='p.product_name' /></a></li>
                            <li><a href='#' tabindex="-1"> First Name <input type='hidden' value='e.firstname' /></a></li>
                            <li><a href='#' tabindex="-1"> Last Name <input type='hidden' value='e.lastname' /></a></li>
                        </ul>
                    </div>
                    <!-- end experiment-->
                    <input type='text' id='search_record' class='input-xlarge' placeholder='Search record' />
                </div>
                <form id='pageLimit_form'>               
                    PageLimit :
                    <input type='text' id='pageLimit' class='input-small' value='2' />
                </form>                          
                <span class='label label-info'>Page <span class='page_number'>1</span> out of <span class='max_page'></span></span>
                <img id = 'loading_img' src='../CSS/img_tbls/loading.gif' alt='loading'/>             
            </div><!--page_info_div-->
               
            <table class='transaction_record_tbl table table-hover'>
                <thead>                          
                     <tr>
                        <th>Transaction Date</th>
                        <th>Time</th>                  
                        <th>Employee</th>
                        <th>Product</th>                      
                        <th>Number of items</th>
                        <th>Income</th>
                    </tr>
                </thead>
                <tbody id='transaction_record_tbody'></tbody>
                           
            </table>
            <div id='pagination_content'>
                <div class='pagination'></div><!-- ========= pagination ============= -->            
                <input type='hidden' id='currentPage' value='0' />
                <div id='graph-toggle-div' title='click to toggle bargraph'>&#8369;</div>
            </div><!--pagination_content-->
            </table> 
            <div id='graph-sales-container-div'>
                <p id='bargraph_title_p'></p>
                <div id='graph-sales-div'></div>
            </div> <!--graph-sales-container-div-->     
        </div> <!-- ======= transaction_wrapper_div ======= -->

        <!-- ========= IMPORTS =======-->
        <script src = "../JS/jquery-1.9.1.min.js"></script>
        <script src = "../JS/jquery-ui-1.10.2.min.js"></script>
        <script src = "../JS/bootstrap.min.js"></script>
        <script src = "../JS/jqBarGraph.js"></script>
        <script src = "../JS/transaction_record_functionality.js"></script>

    </body>
</html>