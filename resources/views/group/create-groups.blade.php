<!-- include header -->
@include('layouts.header')
<!-- include header -->

<!-- Body -->
<!-- sidebar include -->
@include('layouts.sidebar_msg')
<!-- end sidebar -->

<!-- Right Content -->
<div class="content">
    <div class="heading clearfix">
        <div class="pull-left mainico hide"><i class="fa fa-reply-all"></i></div>
        <h2 class="pull-left"><span>&nbsp;</span>Group Management<br>
            <small>Create group name for messaging.</small>
        </h2>
        <ul class="breadcrumb breadcrumb-page pull-right">

            <li><a href="{{ route('group.view-group') }}"><i class="fa fa-home"></i>&nbsp;Group Management</a></li>
            <li class="active">Create Group</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <section class="box ">
                <header class="panel_header marginBottom">
                    <h2 class="title pull-left">Create Group</h2>
                    <div class="actions panel_actions pull-right">
                        <a href="{{ route('group.view-group') }}" class="btn btn-md btn-primary"><i
                                    class="fa fa-plus-circle"></i>&nbsp;View Group</a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row success-create-group">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <strong>Success!</strong> {!! Session::get('success') !!}
                            </div>

                        @endif
                    </div>
                    <div class="row">
                        <div class="col-sm-12 ccol-lg-12">

                            <form method="post" action="{{route('group.post-group')}}" enctype="multipart/form-data"
                                  class="form-horizontal inlineform marginbottom10">
                                <div class="text-center">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="templatename" class="col-md-4">Group Name :</label>
                                        <div class="col-md-8">
                                            <input type="text" name="GROUP_NAME" id="GROUP_NAME"
                                                   value="{{ old('GROUP_NAME') }}"/>
                                            <a id="check_availability" href="#" class="btn btn-primary-outline btn-xs">Check
                                                Availability </a>

                                            <br><span id="success" class="label hide"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-11">
                                                @if ($errors->has('GROUP_NAME'))
                                                    <div class="error">{{ $errors->first('GROUP_NAME') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="smsblock">
                                        <div class="form-group row rsms1">
                                            <label for="templatename" class="col-md-4">Recipient Type: </label>
                                            <div class="col-md-8">
                                                <label class="cradio">Domestic
                                                    <input type="radio" checked="checked" name="GROUP_RECIPIENT_TYPE"
                                                           value="domestic"
                                                           @if(old('GROUP_RECIPIENT_TYPE') == "domestic") checked @endif>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="cradio">International
                                                    <input type="radio" name="GROUP_RECIPIENT_TYPE" value="int"
                                                           @if(old('GROUP_RECIPIENT_TYPE') == "int") checked @endif>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="cradio">All
                                                    <input type="radio" name="GROUP_RECIPIENT_TYPE" value="all"
                                                           @if(old('GROUP_RECIPIENT_TYPE') == "all") checked @endif>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-11">
                                                @if ($errors->has('GROUP_RECIPIENT_TYPE'))
                                                    <div class="error">{{ $errors->first('GROUP_RECIPIENT_TYPE') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <input type="hidden" name="action" value="create">
                                        <div class="form-group row">
                                            <label for="templatename" class="col-md-4">Add Recipients:</label>
                                            <div class="col-md-8">
                                                <label class="cradio">Manual
                                                    <input type="radio" checked="checked" name="gmethod" value="manual"
                                                           @if(old('gmethod') == "manual")) checked @endif>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="cradio">File Upload
                                                    <input type="radio" name="gmethod" value="upload"
                                                           @if(old('gmethod') == "upload")) checked @endif" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-11">
                                                @if ($errors->has('gmethod'))
                                                    <div class="error">{{ $errors->first('gmethod') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row rsms" id="manualDiv">
                                            <label for="templatename" class="col-md-4">Recipient Number:</label>
                                            <div class="col-md-8">
                                                <textarea name="MOBILENO">{{ old('MOBILENO') }}</textarea><i
                                                        class="domestic fa fa-question-circle info"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Numbers may or may not have 91 prefix. 11 digit mobile numbers prefixed with with 0 are also allowed."></i>

                                                <i class="int displaynone fa fa-question-circle info"
                                                   data-toggle="tooltip" data-placement="top"
                                                   title="Numbers should have respective country code prefixed. Even domestic numbers should be prefixed with country code"></i>
                                                <br>

                                                @if ($errors->has('MOBILENO'))
                                                    <div class="error">{{ $errors->first('MOBILENO') }}</div>
                                                @endif

                                                @if (Session::has('error'))
                                                    <div class="error">{!! Session::get('error') !!} <br></div>
                                                    @if($errors->any())
                                                        @foreach ($errors->all() as $error)
                                                            <div class="error">{{ $error }}</div>
                                                        @endforeach
                                                    @endif
                                                @endif


                                                <a href="javascript:void(0);"
                                                   class="btn btn-xs btn-ctr btn-primary-outline"
                                                   onclick="window.open('/country-codes', 'windowname1', 'width=400, height=360, top=150, left=300'); return false;">View
                                                    All Country Codes</a><br>
                                                <p>* Enter numbers either seprated by commas or 1 number per line.
                                                    Maximum 1000 allowed</p>
                                                <p>* All duplicate numbers will be automatically removed by system.</p>
                                            </div>
                                        </div>

                                        <div class="form-group row usms" id="uploadDiv">
                                            <label for="templatename" class="col-md-4">Upload File:</label>
                                            <div class="col-md-8">
                                                <div class="fileupload">
                                                    <input type="file" name="input_file" id="upload-file-pc"
                                                           class="uploadfile" value="old{{ 'input_file' }}">
                                                    <div class="dropin-btn-status uploadvisible"><h4><i
                                                                    class="fa fa-cloud-upload fa-2x"></i><br>Choose from
                                                            Computer or drag a file here.</h4>
                                                        csv, txt, xls, zip, xlsx file format allowed.<br>
                                                        <p class="mrg-b15">File size of upto 10 MBs is supported.</p>
                                                        <p class="mrg-b15">Maximum records 1Million.</p>
                                                    </div>
                                                </div>
                                                <div id="filenameshow" class="uploadfilename">No file uploaded.</div>
                                                <div class="crossfile" id="removefile"><i
                                                            class="fa fa-times-circle fa-1x" data-toggle="tooltip"
                                                            data-placement="right"
                                                            data-original-title="Remove and upload other file."></i>&nbsp;
                                                </div>

                                                @if ($errors->has('input_file'))
                                                    <div class="error">{{ $errors->first('input_file') }}</div>
                                                @endif
                                                <br>
                                                @if (Session::has('error'))
                                                    <div class="error">{!! Session::get('error') !!} <br></div>
                                                    @if($errors->any())
                                                        @foreach ($errors->all() as $error)
                                                            <div class="error">{{ $error }}</div>
                                                        @endforeach
                                                    @endif
                                                @endif
                                                <a href="javascript:void(0);"
                                                   class="btn btn-xs btn-ctr btn-primary-outline"
                                                   onclick="window.open('/country-codes', 'windowname1', 'width=400, height=360, top=150, left=300'); return false;">View
                                                    All Country Codes</a><br>
                                                <p>* Enter numbers either seprated by commas or 1 number per line.
                                                    Maximum 1 Million allowed</p>
                                                <p>* All invalid & duplicate numbers will be automatically removed by
                                                    system.</p>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <footer>
                                    <div class=" row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;Submit
                                            </button>
                                            <button type="button" id="reset" class="btn btn-cancel"><i
                                                        class="fa fa-times-circle"></i>&nbsp; Reset
                                            </button>
                                        </div>
                                    </div>
                                </footer>

                            </form>
                        </div>
                    </div>
                </div>

            </section>
            <!-- //Right Content -->
        </div>


    </div>
    <!-- //Body -->
    <!-- Footer -->

    <script type="text/javascript">

        $(document).ready(function () {

            GROUP_NAME = $("#GROUP_NAME").val();
            recipientType = $('input[name=gmethod]:checked').val();

            if (recipientType == 'upload') {
                setTimeout(function () {
                    $(".rsms").hide("");
                    $(".usms").show("");
                }, 100);

            }
            if (GROUP_NAME.length < 1) {
                $("#check_availability").css('opacity', '0.2');
            }

            $("#GROUP_NAME").keyup(function () {

                $(".success-create-group").hide();
                $(".error").empty();
                $("#success").empty();
                GROUP_NAME = $("#GROUP_NAME").val();
                if (GROUP_NAME.length < 1) {
                    $("#check_availability").css('opacity', '0.2');
                } else {
                    $("#check_availability").css('opacity', '1');
                }

            });

            $('#check_availability').click(function (e) {
                $(".success-create-group").hide();
                $(".error").empty();
                // if (GROUP_NAME.length > 1) {

                let URLNAME = "{{ route('check-group-availability') }}";
                let token = '{{csrf_token()}}';
                checkExists(GROUP_NAME, URLNAME, 'success', token);
                //}
            });

            $('#reset').click(function (e) {
                $(".error").empty();
                $("#success").empty();
                $(this).closest('form').find("input[type=text], textarea").val("");
            });

        });

    </script>

@include('layouts.footer')
<!-- //Footer -->

