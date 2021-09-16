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
        <div class="pull-left mainico hide"><i class="fa fa-folder-open"></i></div>
        <h2 class="pull-left"><span>&nbsp;</span>Group Management<br>
            <small>Manage group Add edit create group.</small>
        </h2>
        <ul class="breadcrumb breadcrumb-page pull-right">

            <li><a href="{{ route('group.view-group') }}"><i class="fa fa-home"></i>&nbsp;Group Management</a></li>
            <li class="active">Group Details</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Group Details</h2>
                    <div class="actions panel_actions pull-right">

                        <a href="{{ route('group.view-group') }}" class="btn btn-md btn-primary"><i
                                    class="fa fa-angle-double-left"></i>&nbsp;Back to Group Management</a>


                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <form class="form-horizontal inlineform marginbottom10">

                                <div class="text-center">

                                    <div class="form-group row">
                                        <label for="templatename" class="col-md-4">Group Name :</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5">{{ $groupData->GROUP_NAME}} </p>
                                        </div>
                                    </div>

                                    <div class="form-group row rsms">
                                        <label for="templatename" class="col-md-4">Creation Date:</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5">{{ formatDate($groupData->GROUP_CREATION_DATE)}} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row rsms">
                                        <label for="templatename" class="col-md-4">Last Modified Date:</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5">{{ formatDate($groupData->LAST_MODIFY_DATE)}} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row rsms">
                                        <label for="templatename" class="col-md-4">Last Action Performed Date:</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5">{{ formatDate($groupData->LAST_MODIFY_DATE) }} </p>
                                        </div>
                                    </div>

                                    <div class="form-group row rsms">
                                        <label for="templatename" class="col-md-4">Recipient Type :</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5">{{ ucfirst($groupData->GROUP_RECIPIENT_TYPE)}} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row rsms">
                                        <label for="templatename" class="col-md-4">Country :</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5">India</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="templatename" class="col-md-4">Number of Recipient:</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5">{{ $groupData->GROUP_SIZE }}  </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="templatename" class="col-md-4">Download Group File :</label>
                                        <div class="col-md-8">
                                            <p class="marginTop5"><a href="{{ route('group.export-data', $groupData->GROUPID) }}" target="_blank">{{ $groupData->GROUP_NAME}}.csv</a></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
            </section>
        </div>

    </div>
</div>
</div>
</div>
<!-- //Right Content -->
</div>
<!-- //Body -->
<!-- Footer -->

@include('layouts.footer')
<!-- //Footer -->

