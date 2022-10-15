@extends('../../layout')

@section('content')
    <div class="container col-md-10 col-sm-12">
        <div class="row ml-3 mb-3">
            <h2 class="font-weight-bold text-monospace">プロフィール</h2>
        </div>

        <div class="row col-md-8 col-sm-12 m-auto">
            <div class="ml-2 card w-100">

                <div class="card-body">
                    <div class="d-flex flex-column align-items-start mb-4">
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="https://assets.reedpopcdn.com/Genshin-Impact-anime.jpg/BROK/thumbnail/1600x900/quality/100/Genshin-Impact-anime.jpg"
                                    id="imgProfile" style="width: 300px; height: 150px" class="img-thumbnail" />
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{ $user->name }}</h2>
                                <h6 class="d-block"><strong>年齢: </strong>26</h6>
                                <h6 class="d-block"><strong>所属先: </strong> 開発部</h6>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="button" class="btn btn-secondary" id="btnChangePicture" value="変更" />
                            <input type="file" style="display: none;" id="profilePicture" name="file" />
                        </div>
                    </div>

                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab"
                                aria-controls="basicInfo" aria-selected="true">基本情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices"
                                role="tab" aria-controls="connectedServices" aria-selected="false">他に</a>
                        </li>
                    </ul>
                    <div class="tab-content ml-1" id="myTabContent">
                        <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                            aria-labelledby="basicInfo-tab">


                            <div class="row col-md-12 col-sm-12">
                                <div class="col-sm-6 col-md-6">
                                    <label style="font-weight:bold;">名前</label>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <hr />

                            <div class="row col-md-12 col-sm-12">
                                <div class="col-sm-6 col-md-6">
                                    <label style="font-weight:bold;">誕生日</label>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    2020/01/01
                                </div>
                            </div>
                            <hr />


                            <div class="row col-md-12 col-sm-12">
                                <div class="col-sm-3 col-md-6">
                                    <label style="font-weight:bold;">メールアドレス</label>
                                </div>
                                <div class="col-md-6">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <hr />
                            <div class="row col-md-12 col-sm-12">
                                <div class="col-sm-6 col-md-6 col-5">
                                    <label style="font-weight:bold;">住所</label>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    東京
                                </div>
                            </div>
                            <hr />

                        </div>
                        <div class="tab-pane fade" id="connectedServices" role="tabpanel"
                            aria-labelledby="ConnectedServices-tab">
                            何もない
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
