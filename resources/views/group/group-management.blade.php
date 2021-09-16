<!-- include header -->
@include('layouts.header')
<!-- include header -->

  <!-- Body -->
  <!-- sidebar include -->
@include('layouts.sidebar_msg')
  <!-- end sidebar -->
  
    <!-- Right Content -->
    <div class="content">
     <?php ($groupData)?>
       <div class="heading clearfix">
        <div class="pull-left mainico hide"><i class="fa fa-folder-open"></i></div>
		<h2 class="pull-left"><span>&nbsp;</span>Group Management<br>
				<small>Manage group Add edit create group.</small>
		</h2>
		 <ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('group.view-group') }}"><i class="fa fa-home"></i>&nbsp;Group Management</a></li>
        <li class="active">View Group</li>
      </ul>
      </div>

    <div class="row">
        <div class="col-sm-12">
            <form method="get" action="{{route('group.view-group')}}"
                class="form-horizontal inlineform marginbottom10">
                @csrf
                <div class="panel">
                    <div class="main_head">Filter your search: <span class="main_head_label"></span>
                        <div class="actions panel_actions pull-right">
                            <button type="submit" class="btn btn-xs btn-primary" name="Submit" value="Submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
                            <button type="reset" class="btn btn-xs btn-primary" name="reset" value="Reset"><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Reset</button>
                        </div>
                    </div>
                    <div class="panel-body search_bar">
                        <ul class="padbot">
                            <li>
                                <input type="text" name="search" placeholder="search group.." value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}"/>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle dateDropDown" onclick="" > 
                                        {{ !empty($_GET['date_filter']) ? ucwords($_GET['date_filter']) : 'Select ' }} Date<span class="caret"></span></button>
                                    <ul class="dropdown-menu dateDropDown-List">
                                        <input type="hidden" name="date_filter" value="{{ !empty($_GET['date_filter']) ? ($_GET['date_filter']) : '' }}"
                                            id="date_filter"/>
                                        <li><a href="#" class="customDate" onclick="ChangeDateField('{{ Config::get('constants.dateFilter.create') }}', 'date_filter')">
                                            Creation Date</a></li>
                                        <li><a href="#" class="customDate" onclick="ChangeDateField('{{ Config::get('constants.dateFilter.update') }}', 'date_filter')" >
                                            Modified Date</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="customDateRange"> <input name="fromdate" id="fromdate" type="text" value="{{ isset($_GET['fromdate']) ? $_GET['fromdate'] : '' }}" class="lowwid" placeholder="From Date"></li>                
                            <li class="customDateRange"> <input name="todate" id="todate" type="text" value="{{ isset($_GET['todate']) ? $_GET['todate'] : '' }}" class="lowwid" placeholder="To Date"></li>  
                            
                        </ul>
                    </div>
                    <footer class="panel-footer">Groups are showing data for <span class="rdate">{{ !empty($_GET['fromdate']) ? formatDate($_GET['fromdate'], 'd-m-Y', true) : '10-08-2018' }}
                    </span> to <span class="rdate">{{ !empty($_GET['todate']) ? formatDate($_GET['todate'], 'd-m-Y', true) : '11-09-2018' }}</span></footer>
                </div>
            </form>
        </div>
    </div>
	  
    <div class="row">
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">View Group</h2>
                    <div class="actions panel_actions pull-right">
                        <a href="{{ route('group.create-group') }}" class="btn btn-md btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Create Group</a>
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
                    @if (Session::has('error'))
                    <div class="row error-create-group">
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {!! Session::get('error') !!}
                            </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-12">

                            <div id="example-1_wrapper" class="dataTables_wrapper form-inline">
                                <table id="example1" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Group Name</th>
                                            <th style="width:100px">No. of recipients</th>
                                            <th>Creation Date</th><th>Last Modified</th>
                                            <th>Last Action Performed</th>
                                        
                                            <th width="150px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($groupData as $group)
                                            <tr>
                                                <td><a href="{{ route('group.group-details',$group->GROUPID) }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Group Details">{{ $group->GROUP_NAME }}</a></td>
                                                <td>{{ $group->GROUP_SIZE}}</td>
                                                <td>
                                                    @if(!empty($group->GROUP_CREATION_DATE))
                                                        {{ formatDate($group->GROUP_CREATION_DATE)}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!empty($group->LAST_MODIFY_DATE))
                                                        {{ formatDate($group->LAST_MODIFY_DATE)}}
                                                    @endif
                                                </td>
                                                <td>{{ $actionTaken[$group->LAST_ACTION]}}</td>

                                                <td>
                                                    <div class="btn-group">
                                                        <a href=" {{ route('group.edit-group', $group->GROUPID) }}" data-toggle="tooltip" data-placement="top" data-original-title="Edit this Group" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ route('group.copy-group', $group->GROUPID) }}" data-toggle="tooltip" data-placement="top" data-original-title="Make a copy of this group" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
                                                        <a href="{{ route('group.export-data', $group->GROUPID) }}" class="btn btn-xs btn-clone" data-toggle="tooltip" data-placement="top" data-original-title="Download this Group"><i class="fa fa-cloud-download"></i></a>
                                                        <a href="#." data-url="{{ route('delete-group', $group->GROUPID) }}" data-toggle="tooltip" 
                                                        data-token="{{ csrf_token() }}"  data-placement="top" data-original-title="Delete this Group" class="btn btn-xs btn-delete"><i class="fa fa-trash-o"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
<script type="text/javascript">
$(document).ready(function() {
	<?php if(!empty($_GET['date_filter'])):?>
        $('.customDateRange').show();
    <?php endif;?>
});
</script>

