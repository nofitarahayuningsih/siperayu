{{-- \resources\views\suratkeluar\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Tambah Surat Keluar')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>
  
  <div class="col-md-6">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Vertical Form</div>
                              
                                <div class="panel-options">
                                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Text field</label>
                                            <input class="form-control" placeholder="Text field" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Password field</label>
                                            <input class="form-control" placeholder="Password" type="password" value="mypassword">
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Readonly</label>
                                            <span class="form-control">Read only text</span>
                                        </div>
                                    </fieldset>
                                        <fieldset>
                                        <legend>File inputs</legend>
                                    
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">File input</label>
                                            <div class="col-md-10">
                                                <input type="file" class="btn btn-default" id="exampleInputFile1">
                                                <p class="help-block">
                                                    some help text here.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                    <div>
                                        <div class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Submit
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>





<div class="row">
                    <div class="col-md-6">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Horizontal Form</div>
                              
                                <div class="panel-options">
                                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Text Field</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Password Field</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Textarea</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Readonly</label>
                                    <div class="col-sm-10">
                                      <span class="form-control">Read only text</span>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> Checkbox
                                        </label>
                                      </div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> Checkbox
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Vertical Form</div>
                              
                                <div class="panel-options">
                                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Text field</label>
                                            <input class="form-control" placeholder="Text field" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Password field</label>
                                            <input class="form-control" placeholder="Password" type="password" value="mypassword">
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Readonly</label>
                                            <span class="form-control">Read only text</span>
                                        </div>
                                    </fieldset>
                                     <fieldset>
                                        <legend>File inputs</legend>
                                    
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">File input</label>
                                            <div class="col-md-10">
                                                <input type="file" class="btn btn-default" id="exampleInputFile1">
                                                <p class="help-block">
                                                    some help text here.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </fieldset>

                                    <div>
                                        <div class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Submit
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
  </div>



@endsection