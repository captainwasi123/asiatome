@extends('restaurant.includes.master')
@section('title', 'Rider')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
      	<div class="order-section-chart">
          	<div class="row">
                <div class="col-lg-6 col-md-8 col-7 sec-45">
                    <div class="serach_field-area">
                        <div class="search_inner">
                            <form action="#">
                                <input type="text" placeholder="Search here...">
                                <button type="submit"> <i class="fas fa-search"></i> </button>
                            </form>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-5 sec-45">
                    <div class="white_box_tittle list_header no-margin" style="display: block;">
                        <div class="add_button sec-6 m-b-20 pad-top-10">
                            <a a href="#" class="btn bg-green" data-toggle="modal" data-target="#addMenuModal"> <i class="fa fa-file-pdf"></i>  &nbsp;Download PDF </a>
                            <a a href="#" class="btn bg-yellow" data-toggle="modal" data-target="#addMenuModal"> <i class="fa fa-plus"></i>  &nbsp;Add New</a>
                        </div>
                    </div>
                </div>
            </div>
<style type="text/css">
   .driver thead th { 
    text-align:center !important; 
    background:#BC1C23 !important; 
    color:white !important;
    padding:20px !important;
}
/*tbody th { text-align:right; background: lightgrey !important; color:red}*/
.driver thead th:first-child {
        border-radius: 15px 0px 0px 0px !important;
}
.driver thead th:last-child {
        border-radius: 0px 15px 0px 0px !important;
}
.driver tbody { 
    text-align: center;
    border-bottom: 1px solid grey;
}
.QA_section .QA_table tbody th a:hover, .QA_section .QA_table tbody td a:hover {
    color: #BC1C23;
}
.QA_section .QA_table tbody th, .QA_section .QA_table tbody td {
    color: grey !important;
    font-size: 15px;
    font-weight: 400;
}
.QA_section .QA_table .table thead th {
    font-size: 16px; 
    font-weight: 600;
}
.switch {
    margin: 0px;
    margin-top: 10px !important;
}
.QA_section  {
    box-shadow: 0px 2px 13px -8px black;
}
</style>
            <div class="row">                
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                   <div class="QA_section">
                            <!-- <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Active Restaurants</h3>
                                <div class="add_button sec-6 m-b-20 pad-top-10">
                                    <a a href="#" class="btn bg-green" data-toggle="modal" data-target="#addMenuModal"> <i class="fa fa-file-pdf"></i>  &nbsp;Download PDF </a>
                                    <a a href="#" class="btn bg-yellow" data-toggle="modal" data-target="#addMenuModal"> <i class="fa fa-plus"></i>  &nbsp;Add New Driver</a>
                                </div>
                            </div> -->
                           <!--  <hr> -->
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active driver">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Change Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                               
                                            <tr>
                                                <td width="10%">1</td>
                                                <td width="20%">Anas</td>
                                                <td width="20%">syed </td>
                                                <td width="20%">0303030303</td>
                                                
                                                <td>
                                                	<label class="switch">
    							                     <input type="checkbox" class="restaurantStatus" value="1" data-val="">
    							                     <span class="slider round"></span>
    								                </label>
    								            </td>
                                                <td>
                                                	<a href="javascript:void(0)" class="status-icons editRestaurant"><i class="fa fa-edit"></i></a>
                                                	<a href="javascript:void(0)" class="status-icons deleteRestaurant"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <td colspan="8">No Restaurant Found.</td>
                                            </tr>  -->     
                                    </tbody>
                                </table>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
        </div>
    </div>
</div>

<!-- menu popup -->
    <div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;" role="document">
            <div class="modal-content">
                <form data-validation="true" action="{{route('restaurant.menu.add')}}" method="post" enctype="multipart/form-data">
                    <div class="modal-header sec-46">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Rider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="sec-51">

                        <div class="item-wrapper one">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-content">

                                        <div class="file-upload image-upload">

                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" name="image_name" type='file' onchange="readURL(this);" accept="image/*"/>
                                                <div class="drag-text">
                                                    <h3>
                                                        <i class="fas fa-cloud-download-alt"></i>
                                                        <br> Upload Image
                                                    </h3>
                                                 </div>
                                            </div>
                                            <div class="file-upload-content sec-53" style="display: none;">
                                                <button type="button" onclick="removeUpload()" class="remove-image">
                                                    <span> x Remove</span>
                                                </button>
                                                <img class="file-upload-image" src="#" alt="your image" width="100%" />
                                                  
                                            </div> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <div class="sec-50">
                        <div class="row pop-up-form">
                            <div class="col-md-12">
                                    
                                    <div class="form-row">
                                        <div class="form-group col-lg-4 col-md-12 col-12 no-margin">
                                            <div class="form-group pad-bot-30 no-margin">
                                                <label for="inputAddress">Full Name</label>
                                                <input type="text" class="form-control" id="inputAddress" name="full-name" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                                           <label for="inputState">Email</label>
                                            <input type="email" class="form-control" id="inputZip" name="email" required>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                                            <label for="inputZip">Phone No</label>
                                            <input type="number" class="form-control" id="inputZip" name="phone">
                                        </div>
                                    </div>  
                                    <div class="form-row">
                                        <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                                            <label for="inputCity">City</label>
                                            <select class="form-control" name="category" required>
                                                <option value="">Select</option>                                            
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                                            <label for="inputCity">States</label>
                                            <select class="form-control" name="category" required>
                                                <option value="">Select</option>                                            
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                                            <label for="inputCity">Country</label>
                                            <select class="form-control" name="category" required>
                                                <option value="">Select</option>                                            
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="inputAddress">Description</label>
                                        <textarea class="form-control" rows="5" name="description" required></textarea>
                                    </div>

                                <div class="form-row pad-top-20">

                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDCF" style="width:100%; height: 120px;">                                            
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="card_front" class="profilePic profilePicDCF" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDCF browseProfilePhoto btn btn-primary">Upload Card Front </button>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDCB" style="width:100%; height: 120px;">                                            
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="card_back" class="profilePic profilePicDCB" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDCB browseProfilePhoto btn btn-primary">Upload Card Back </button>
                                                        </div>
                                                    </div> 
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDLF" style="width:100%; height: 120px;">                                            
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="license_front" class="profilePic profilePicDLF" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDLF browseProfilePhoto btn btn-primary">Upload  License Front</button>
                                                        </div>
                                                    </div> 
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>

                                    <style type="text/css">
                                        .browseProfilePhoto {
                                            font-weight: 500;
                                            color: #2E2E2E;
                                            border-radius: 12px !important;
                                            padding: 10px 14px 10px 14px;
                                            font-size: 14px !important;

                                        }
                                    </style>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDLB" style="width:100%; height: 120px;">
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="license_back" class="profilePic profilePicDLB" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDLB browseProfilePhoto  btn btn-primary">Upload License Back</button>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>                       
                        </div>                       
                    </div>
                    
                    
                    <div class="modal-footer pad-top-30">
                        <button type="button" class="btn sec-49" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn sec-48">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  <div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;" role="document">
      <div class="modal-content">
        
      </div>
    </div>
  </div>



@endsection
@section('addScript')
    <script type="text/javascript">
        $(document).ready(function(){
            'use strict'

        });
    </script>
@endsection