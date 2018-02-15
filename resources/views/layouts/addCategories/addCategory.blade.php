@extends('layouts.master')

@section('title')
Categories
@endsection

@section('cssfiles')
<link href="../bower_components/footable/css/footable.core.css" rel="stylesheet">
<link href="../bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="../bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
@endsection



@section('content')
@include('layouts.header');
@include('layouts.sidebar');
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Contact listing</h3>
                    <div class="scrollable">
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Age</th>
                                        <th>Joining date</th>
                                        <th>Salery</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/genu.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                        </td>
                                        <td>genelia@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span> </td>
                                        <td>23</td>
                                        <td>12-10-2014</td>
                                        <td>$1200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/arijit.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                        </td>
                                        <td>arijit@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span> </td>
                                        <td>26</td>
                                        <td>10-09-2014</td>
                                        <td>$1800</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>28</td>
                                        <td>1-10-2013</td>
                                        <td>$2200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/hritik.jpg" alt="user" class="img-circle" /> Hritik Roshan</a>
                                        </td>
                                        <td>hritik@gmail.com</td>
                                        <td>+456 456 789</td>
                                        <td><span class="label label-inverse">HR</span></td>
                                        <td>25</td>
                                        <td>2-10-2016</td>
                                        <td>$200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/john.jpg" alt="user" class="img-circle" /> John Abraham</a>
                                        </td>
                                        <td>john@gmail.com</td>
                                        <td>+567 456 789</td>
                                        <td><span class="label label-danger">Manager</span></td>
                                        <td>23</td>
                                        <td>10-9-2015</td>
                                        <td>$1200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/pawandeep.jpg" alt="user" class="img-circle" /> Pawandeep kumar</a>
                                        </td>
                                        <td>pawandeep@gmail.com</td>
                                        <td>+678 456 789</td>
                                        <td><span class="label label-warning">Chairman</span></td>
                                        <td>29</td>
                                        <td>10-5-2013</td>
                                        <td>$1500</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/ritesh.jpg" alt="user" class="img-circle" /> Ritesh Deshmukh</a>
                                        </td>
                                        <td>ritesh@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span></td>
                                        <td>35</td>
                                        <td>05-10-2012</td>
                                        <td>$3200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/salman.jpg" alt="user" class="img-circle" /> Salman Khan</a>
                                        </td>
                                        <td>salman@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span></td>
                                        <td>27</td>
                                        <td>11-10-2014</td>
                                        <td>$1800</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>18</td>
                                        <td>12-5-2016</td>
                                        <td>$100</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/sonu.jpg" alt="user" class="img-circle" /> Sonu Nigam</a>
                                        </td>
                                        <td>sonu@gmail.com</td>
                                        <td>+456 456 789</td>
                                        <td><span class="label label-inverse">HR</span></td>
                                        <td>36</td>
                                        <td>18-5-2009</td>
                                        <td>$4200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/varun.jpg" alt="user" class="img-circle" /> Varun Dhawan</a>
                                        </td>
                                        <td>varun@gmail.com</td>
                                        <td>+567 456 789</td>
                                        <td><span class="label label-danger">Manager</span></td>
                                        <td>43</td>
                                        <td>12-10-2010</td>
                                        <td>$5200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/genu.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                        </td>
                                        <td>genelia@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span> </td>
                                        <td>23</td>
                                        <td>12-10-2014</td>
                                        <td>$1200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/arijit.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                        </td>
                                        <td>arijit@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span> </td>
                                        <td>26</td>
                                        <td>10-09-2014</td>
                                        <td>$1800</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>
                                            <a href="contact-detail.html"><img src="../images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>28</td>
                                        <td>1-10-2013</td>
                                        <td>$2200</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @if (count($errors) > 0)
										<ul>
										        @foreach ($errors->all() as $error)
										            <li>{{ $error }}</li>
										        @endforeach
										</ul>
										@endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Category</button>
                                        </td>
                                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Add New Category</h4> </div>
                                                    <form method="POST" action="/categories">
                                                    {{ csrf_field() }}
	                                                    <div class="modal-body">
	                                                        <from class="form-horizontal form-material">
	                                                            <div class="form-group">
	                                                                <div class="col-md-12 m-b-20">
	                                                                    <input type="text" class="form-control" placeholder="Type Category Name" name="category_name"> </div>
	                                                                <div class="col-md-12 m-b-20">
	                                                                    <select class="form-control" id="sel1" name="parent_category">
	                                                                    <option value="">No Parent Category</option>
	                                                                    @foreach($categories as $category)
	                                                                    	<option value="{{$category->id}}">{{$category->category_name}}</option>
	                                                                    @endforeach
	                                                                  </select>
	                                                                </div>
	                                                                <div class="col-md-12 m-b-20">
	                                                                    <input type="text" class="form-control" placeholder="Slug" name="slug"> </div>
	                                                            </div>
	                                                        </from>
	                                                    </div>
	                                                    <div class="modal-footer">
	                                                        <button type="submit" class="btn btn-info waves-effect">Add</button>
	                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
	                                                    </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <td colspan="7">
                                            <div class="text-right">
                                                <ul class="pagination"> </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer');
@endsection

@section('jsfiles')
<script src="../bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="js/ampleadmin/jquery.slimscroll.js"></script>
<script src="js/ampleadmin/waves.js"></script>
<script src="js/ampleadmin/custom.min.js"></script>
<script src="../bower_components/footable/js/footable.all.min.js"></script>
<script src="../bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="js/ampleadmin/footable-init.js"></script>
<script src="../bower_components/styleswitcher/jQuery.style.switcher.js"></script>
@endsection
