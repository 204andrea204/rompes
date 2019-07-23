@extends('layouts.layouts-admin')
@section('content')

  <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="adminpro-order-form" class="adminpro-form" method="POST" action="{{url('pelatihan2/save')}}" enctype="multipart/form-data">
                                @csrf
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Pelatihan<span class="table-project-n"></span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="No">No</th>
                                                    <th data-field="judul">Judul</th>
                                                    <th data-field="keterangan">Keterangan</th>
                                                    <th data-field="gambar">Gambar</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $pelatihan2 = \App\Pelatihan2::all();  
                                                ?>
                                                @foreach ($pelatihan2 as $n)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$n->judul}}</td>
                                                    <td>{{$n->keterangan}}</td>
                                                    <td><img src="{{ url('images/'.$n->gambar) }}" style="width: 70px; height: 70px"></td>
                                                    <td class="datatable-ct"><a href="{{url('pelatihan2/delete/'.$n->id)}}"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Judul</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="judul"></textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                    </div>
                    </div>
                                <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Keterangan</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="keterangan"></textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                    </div>
                        <div class="col-lg-8">
                            <div class="login-input-area">
                                <label>Gambar</label>
                                <input name="gambar" type="file" class="ts-forms" style="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                        <div class="col-lg-8">
                            <div class="login-button-pro">
                                <button type="submit" class="login-button login-button-lg"><i class="fa fa-save">SAVE</i></button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
@endsection