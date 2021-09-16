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

        </h2>
        <ul class="breadcrumb breadcrumb-page pull-right">

            <li><a href="{{ route('group.view-group') }}"><i class="fa fa-home"></i>&nbsp;Group Management</a></li>
            <li class="active">Edit Group</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <section class="box ">
                <header class="panel_header marginBottom">
                    <h2 class="title pull-left">Edit Group</h2>
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

                    <div class="row info-create-group">
                        @if (Session::has('info'))
                            <div class="alert alert-info">
                                <strong>Info:</strong> {!! Session::get('info') !!}
                            </div>

                        @endif
                    </div>


                    <div class="row">
                        <div class="col-sm-12 ccol-lg-12">
                            <form method="post" action="{{route('group.update-group')}}" enctype="multipart/form-data"
                                  class="form-horizontal inlineform marginbottom10">

                                <div class="text-center">

                                    <div class="form-group row">
                                        <label for="templatename" class="col-md-4">Group Name :</label>
                                        <div class="col-md-8">
                                            <input type="text" id="groupname" value="{{ $groupData->GROUP_NAME}}"
                                                   disabled/>
                                            @csrf
                                        </div>
                                    </div>

                                    <div class="smsblock">
                                        <div class="form-group row rsms1">
                                            <label for="templatename" class="col-md-4">Recipient Type: </label>
                                            <div class="col-md-8">
                                                <label class="cradio">Domestic
                                                    <input type="radio"
                                                           @if( $groupData->GROUP_RECIPIENT_TYPE == "domestic")) checked
                                                           @endif name="rtype" value="domestic" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="cradio">International
                                                    <input type="radio"
                                                           @if( $groupData->GROUP_RECIPIENT_TYPE == "international"))
                                                           checked @endif value="int" name="rtype" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="cradio">All
                                                    <input type="radio" @if( $groupData->GROUP_RECIPIENT_TYPE == "all"))
                                                           checked @endif value="all" name="rtype" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="groupid" value="{{ $groupData->GROUPID  }}">
                                        <div class="form-group row">
                                            <label for="templatename" class="col-md-4">Add Recipients:</label>
                                            <div class="col-md-8">
                                                <label class="cradio">Manual
                                                    <input type="radio"
                                                           @if( $groupData->GROUP_ADD_RECIPIENT_TYPE == "manual"))
                                                           checked @endif name="gmethod" value="manual">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="cradio">File Upload
                                                    <input type="radio"
                                                           @if( $groupData->GROUP_ADD_RECIPIENT_TYPE == "upload"))
                                                           checked @endif value="upload" name="gmethod">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="templatename" class="col-md-4">Update Type:</label>
                                            <div class="col-md-8">
                                                <label class="cradio">Append
                                                    <input type="radio" checked="checked"
                                                           @if(old('updatetype') == "append")) checked @endif"
                                                    name="updatetype" value="append" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="cradio">Remove
                                                    <input type="radio" @if(old('updatetype') == "remove"))
                                                           checked @endif" name="updatetype" value="remove">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row rsms">
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
                                        <div class="form-group row usms">
                                            <label for="templatename" class="col-md-4">Upload File:</label>
                                            <div class="col-md-8">
                                                <div class="fileupload">
                                                    <input type="file" id="upload-file-pc" class="uploadfile"
                                                           name="input_file">
                                                    <div class="dropin-btn-status uploadvisible"><h4><i
                                                                    class="fa fa-cloud-upload fa-2x"></i><br>Choose from
                                                            Computer or drag a file here.</h4>
                                                        csv, txt, xls, zip, xlsx file format allowed.<br>
                                                        <p class="mrg-b15">File size of upto 10 MBs is supported.</p>
                                                        <p class="mrg-b15">Maximum records 1Million.</p>
                                                    </div>
                                                </div>

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


                                                <div id="filenameshow" class="uploadfilename">No file uploaded.</div>
                                                <div class="crossfile" id="removefile"><i
                                                            class="fa fa-times-circle fa-1x" data-toggle="tooltip"
                                                            data-placement="right"
                                                            data-original-title="Remove and upload other file."></i>&nbsp;
                                                </div>
                                                <br>
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
                                        <div class="form-group row">
                                            <label for="templatename" class="col-md-4">Download Existing Recipients
                                                File:</label>
                                            <div class="col-md-8">
                                                <p class="marginTop5"><a href="{{ route('group.export-data', $groupData->GROUPID) }}" 
                                                    class="viewlink">{{ $groupData->GROUP_NAME}}.csv</a>
                                                </p>
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

</div>
<script>
    recipientType = $('input[name=gmethod]:checked').val();
    if (recipientType == 'upload') {
        setTimeout(function () {
            $(".rsms").hide("");
            $(".usms").show("");
        }, 500);
    }

</script>
@include('layouts.footer')
<!-- //Footer -->

