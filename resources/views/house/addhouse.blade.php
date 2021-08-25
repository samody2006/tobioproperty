
<!DOCTYPE html>
<head>
<title>Tobio Properties | Admin </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ofada, mowe, Houseing, Amen, Ajah, Lagos, ibeju-lekki, buy-sale, Rent, property, real-estate, Land" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('back/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('back/css/style-responsive.css') }}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('back/css/font.css') }}" type="text/css"/>
<link href="{{ asset('back/css/font-awesome.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="{{ asset('back/css/morris.css') }}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{ asset('back/css/monthly.css') }}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{ asset('back/js/jquery2.0.3.min.js') }}"></script>
<script src="{{ asset('back/js/raphael-min.js') }}"></script>
<script src="{{ asset('back/js/morris.js') }}"></script>
</head>
<body>
@include('layouts.navbar.sidebar')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                      <strong>  Add Your House </strong>
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="Post" action="{{ route('addhouse') }}" enctype="multipart/form-data">
                               
                                <div class="form-group "> {{ csrf_field() }}  
                                        <label for="cname" class="control-label col-lg-3">Property Name </label>
                                        <div class="col-lg-6">
                                        <input class="form-control {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                        name="name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span>
                                        <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                                        </span> @endif
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Property Type</label>
                                    <div class="col-lg-6">
                                        <div class="select is-primary is-full {{ $errors->has('type') ? ' is-danger' : '' }}">
                                            <select name="type">
                                            <option value="House">House</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cemail" class="col-sm-3 control-label col-lg-3">Property Price </label>
                                        <div class="col-lg-4">
                                        <div class="input-group input-group-lg m-bot15">
                                        <span class="input-group-addon btn-success"><strong>&#8358;</strong></span>
                                            <input class="form-control {{ $errors->has('amount') ? ' is-danger' : '' }}" placeholder=".col-lg-4" id="cemail" type="text" name="amount"  value="{{ old('amount') }}">
                                            <span class="input-group-addon btn-success"><strong>.00</strong></span>
                                            @if ($errors->has('amount'))
                                         <span>
                                         <strong class="has-text-danger">{{ $errors->first('amount') }}</strong>
                                         </span> @endif
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="col-sm-3 control-label col-lg-3">City</label>
                                        <div class="col-lg-4">
                                        <div class="input-group input-group-lg m-bot15">
                                          <input class="form-control is-primary is-full {{ $errors->has('city') ? ' is-danger' : '' }}"  name="city" value="{{ old('city') }}">
                                            @if ($errors->has('city'))
                                         <span>
                                         <strong class="has-text-danger">{{ $errors->first('city') }}</strong>
                                         </span> @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">Property Description</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control is-primary {{ $errors->has('description') ? ' is-danger' : '' }}" value="{{ old('description') }}" id="ccomment" name="description" ></textarea>
                                            @if ($errors->has('description'))
                                            <span>
                                                <strong class="has-text-danger">{{ $errors->first('description') }}</strong>
                                            </span> @endif
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="name" class="control-label col-lg-3">Contact No</label>
                                        <div class="col-lg-4">
                                            <input class="form-control is-primary {{ $errors->has('contactno') ? ' is-danger' : '' }}" type="tel" name="contactno" value="{{ old('contactno') }}">
                                            @if ($errors->has('contactno'))
                                            <span>
                                                <strong class="has-text-danger">{{ $errors->first('contactno') }}</strong>
                                            </span> @endif
                                        </div>
                                    </div>

                                                        {{-- Image Upload Section --}}
                                        <div class="form-group">
                                        <div class="control">
                                            <p class="help-block">Images
                                            <strong class="is-small">(Tip: Upload more the one photograph [Max Image Size: 4MB])</strong>
                                            </p>
                                        <div class="col-lg-4">
                                        <div class="input-group hdtuto control-group lst increment" >
                                        <input type="file" name="filename[]" class="myfrm form-control">
                                        <div class="input-group-btn"> 
                                            <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                        </div>
                                        </div>
                                        

                                        <div class="clone hide">
                                        <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                            <input type="file" name="filename[]" class="myfrm form-control">
                                        <div class="input-group-btn"> 
                                            <button class="btn btn-danger" type="button">
                                            <i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                        </div>
                                        </div>
                                        </div>
                                                @if ($errors->has('filename'))
                                                    <span>
                                                        <strong class="has-text-danger">{{ $errors->first('filename') }}</strong>
                                                    </span> @endif
                                        </div></div>
                                        </div>

<br>
<br>                            
                        <div class="form-inline">
                        <div class="control">
                            <div class="form-group col-lg-4">
                                <label for="name" >No of Rooms:</label>
                                <input class="form-control is-primary {{ $errors->has('rooms') ? ' is-danger' : '' }}" type="number" name="rooms" value="{{ old('rooms') }}" placeholder=".col-lg-4">
                                @if ($errors->has('rooms'))
                                <span>
                                <strong class="has-text-danger">{{ $errors->first('rooms') }}</strong>
                                </span> @endif
                            </div>
                                        
                            <div class="form-group col-lg-4">                                    
                                <label for="name" >No of Toilets</label>
                                <input class="form-control is-primary {{ $errors->has('toilet') ? ' is-danger' : '' }}" type="number" name="toilet" value="{{ old('toilet') }}" placeholder=".col-lg-4">
                                @if ($errors->has('toilet'))
                                <span>
                                <strong class="has-text-danger">{{ $errors->first('toilet') }}</strong>
                                </span> @endif
                            </div>

                            <div class="form-group col-lg-4">                                    
                                <label for="name" >Nearest School</label>
                                <input class="form-control is-primary {{ $errors->has('nschool') ? ' is-danger' : '' }}" type="text" name="nschool" value="{{ old('nschool') }}" placeholder=".col-lg-4">
                                @if ($errors->has('nschool'))
                                <span>
                                <strong class="has-text-danger">{{ $errors->first('nschool') }}</strong>
                                </span> @endif
                            </div>
                        </div> <br>

                        <div class="form-inline">
                        <div class="control">
                            <div class="form-group col-lg-4">
                                <label for="name" >Nearest Mall</label>
                                <input class="form-control is-primary {{ $errors->has('nmall') ? ' is-danger' : '' }}" type="text" name="nmall" value="{{ old('nmall') }}" placeholder=".col-lg-4">
                                @if ($errors->has('nmall'))
                                <span>
                                <strong class="has-text-danger">{{ $errors->first('rooms') }}</strong>
                                </span> @endif
                            </div>
                                        
                            <div class="form-group col-lg-4">                                    
                                <label for="name" >Nearest BusStop</label>
                                <input class="form-control is-primary {{ $errors->has('nbus') ? ' is-danger' : '' }}" type="text" name="nbus" value="{{ old('nbus') }}" placeholder=".col-lg-4">
                                @if ($errors->has('nbus'))
                                <span>
                                <strong class="has-text-danger">{{ $errors->first('nbus') }}</strong>
                                </span> @endif
                            </div>

                       </div></div>                           
                       
                      </div></div> 

             <br>



                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Add House</button>
                                            <button type="reset" class="button is-warning"> Clear</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>

            <!-- page end-->
        </div>
</section>
    <br>
    </div>
    {{-- Footer --}}
    @include('layouts.footer.back.footer') {{-- JavaScript Files --}}
<script src="{{ asset('back/js/bootstrap.js') }}"></script>
<script src="{{ asset('back/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('back/js/scripts.js') }}"></script>
<script src="{{ asset('back/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('back/js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('back/js/jquery.scrollTo.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;
                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
</body>

</html>