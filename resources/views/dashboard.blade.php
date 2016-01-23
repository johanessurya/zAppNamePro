@extends('layouts.default-admin')

@section('popup-modal')
<div class="example-modal">
  <div id="user-edit" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Modal Default</h4>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div id="user-new" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add New User</h4>
        </div>
        <div class="modal-body">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div><!-- /.box -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /.example-modal -->
@endsection

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3> <button class="btn btn-success btn-xs" onclick="showModal('#user-new')">Add New User</button>
  </div><!-- /.box-header -->
  <div class="box-body">
    <table id="user-table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 4.0</td>
          <td>
            <button class="btn btn-block btn-primary">Edit</button>
          </td>
          <td>
            <button class="btn btn-block btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
        </tr>
      </tfoot>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
