<div id="content" class="content">

    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Product</a></li>
        <li class="breadcrumb-item active">Edit Product</li>
    </ol>


    <h1 class="page-header">Edit Product <small></small></h1>


    <div class="row">

        <div class="col-xl-12">

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                        <span class="d-sm-none">Product Details</span>
                        <span class="d-sm-block d-none">Product Details</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                        <span class="d-sm-none">Attribute</span>
                        <span class="d-sm-block d-none">Attribute</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#default-tab-3" data-toggle="tab" class="nav-link">
                        <span class="d-sm-none">Gallery</span>
                        <span class="d-sm-block d-none">Gallery</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#default-tab-4" data-toggle="tab" class="nav-link">
                        <span class="d-sm-none">Product Relation</span>
                        <span class="d-sm-block d-none">Product Relation</span>
                    </a>
                </li>

            </ul>
            <div class="tab-content">

                <div class="tab-pane fade active show" id="default-tab-1">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Product Name</label>
                                <input type="text" class="form-control" name="item_name" value="{{optional($item)->item_name}}">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">SKU</label>
                                <input type="text" readonly class="form-control" id="formGroupExampleInput2" placeholder="SKU">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Brand</label>
                                <select class="form-control" id="brand" name="brand_id" data-parsley-required="true" placeholder="Brand">
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{($brand->id==$item->brand_id)? 'selected':''}}>{{ucwords($brand->name)}}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Country</label>
                                <select class="form-control" id="ori_country" name="ori_country" data-parsley-required="true" placeholder="Brand">
                                    @foreach(getCountry() as $brand)
                                    <option value="{{$brand->id}}" {{($brand->id==$item->brand_id)? 'selected':''}}>{{ucwords($brand->name)}}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Product Discription</label>
                                <textarea class="ckeditor" id="editor1" name="editor1" rows="20"></textarea>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Product Tags</label>
                                <select id="tags" multiple="multiple">
                                    <option value="Kerry" selected="selected">Kerry</option>
                                    <option value="Cork" selected="selected">Cork</option>
                                </select>

                            </div>

                        </div>
                    </div>
                    <hr>
                    <!-- Stock and Selling -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Inventry UNIT</label>
                                <input type="text" class="form-control" name="item_name">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">QTY</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="SKU">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Sales UNIT</label>
                                <select class="form-control" id="brand" name="brand_id" data-parsley-required="true" placeholder="Brand">
                                    <option value="Box"></option>
                                    <option value="PCS"></option>

                                </select>

                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Regular Price</label>

                                <input type="text" readonly class="form-control" id="formGroupExampleInput2" placeholder="">

                            </div>

                        </div>
                    </div>
                    <!-- Stock and Selling -->
                    <!-- volume settings  -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Length</label>
                                <input type="text" class="form-control" name="item_name">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Width</label>
                                <input type="text" class="form-control" name="item_name">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Height</label>

                                <input type="text" class="form-control" name="item_name">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Volume</label>

                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">

                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Weight</label>

                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">

                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Min Order QTY</label>

                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">

                            </div>

                        </div>
                    </div>

                    <!-- volume settings  -->

                </div>


                <div class="tab-pane fade" id="default-tab-2">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <p>
                        Nullam ac sapien justo. Nam augue mauris, malesuada non magna sed, feugiat blandit ligula.
                        In tristique tincidunt purus id iaculis. Pellentesque volutpat tortor a mauris convallis,
                        sit amet scelerisque lectus adipiscing.
                    </p>
                </div>


                <div class="tab-pane fade" id="default-tab-3">
                    <!-- gallary  -->
                    <div class="image gallery-group-4">
                        <div class="image-inner">
                            <a href="https://seantheme.com/color-admin/admin/assets/img/gallery/gallery-8.jpg" data-lightbox="gallery-group-4">
                                <div class="img" style="background-image: url(https://seantheme.com/color-admin/admin/assets/img/gallery/gallery-8.jpg)"></div>
                            </a>
                            <p class="image-caption">
                                #5721 Scottwills Snow
                            </p>
                        </div>
                        <div class="image-info">
                            <h5 class="title">Nunc eget hendrerit nisi sodales</h5>
                            <div class="pull-right">
                                <small>by</small> <a href="javascript:;">Andy Wong</a>
                            </div>
                            <div class="rating">
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star active"></span>
                            </div>
                            <div class="desc">
                                Ut et augue nisi sodales luctus libero dignissim sodales. Fusce feugiat nisi sodales sapien consequat lacinia fringilla.
                            </div>
                        </div>
                    </div>


                    <div class="image gallery-group-4">
                        <div class="image-inner">
                            <a href="../assets/img/gallery/gallery-9.jpg" data-lightbox="gallery-group-4">
                                <div class="img" style="background-image: url(../assets/img/gallery/gallery-9.jpg)"></div>
                            </a>
                            <p class="image-caption">
                                #9921 Scottwills Riverbank
                            </p>
                        </div>
                        <div class="image-info">
                            <h5 class="title">Nunc eget hendrerit nisi dignissim</h5>
                            <div class="pull-right">
                                <small>by</small> <a href="javascript:;">William Tan</a>
                            </div>
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                            <div class="desc">
                                Ut et augue luctus libero dignissim sodales. Fusce feugiat sapien consequat libero dignissim lacinia fringilla.
                            </div>
                        </div>
                    </div>


                    <div class="image gallery-group-4">
                        <div class="image-inner">
                            <a href="../assets/img/gallery/gallery-10.jpg" data-lightbox="gallery-group-4">
                                <div class="img" style="background-image: url(../assets/img/gallery/gallery-10.jpg" alt="" />
                            </a>
                            <p class="image-caption">
                                #6436 Scottwills Buss
                            </p>
                        </div>
                        <div class="image-info">
                            <h5 class="title">Sed mollis nisi sed auctor</h5>
                            <div class="pull-right">
                                <small>by</small> <a href="javascript:;">David King</a>
                            </div>
                            <div class="rating">
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                            <div class="desc">
                                Vestibulum dictum pharetra leo sed euismod. Lorem ipsum dolor sit amet, consectetur adipiscing feugiat sapien elit.
                            </div>
                        </div>
                    </div>
                </div>

               

            <!-- gallary  -->
        </div>
        <div class="tab-pane fade" id="default-tab-4">


            <!-- produt relation  -->
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Product Upsells</label>
                        <input type="text" class="form-control" name="item_name" value="{{optional($item)->item_name}}">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Product Cross sells</label>
                        <input type="text" class="form-control" name="item_name" value="{{optional($item)->item_name}}">
                    </div>

                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Points Earned Per Unit sales </label>

                        <input type="text" class="form-control" name="item_name" value="{{optional($item)->item_name}}">
                    </div>

                </div>

            </div>

            <!-- produt relation  -->

            <!-- produt relation  -->
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Product Stock status</label>
                        <input type="text" class="form-control" name="item_name" value="{{optional($item)->item_name}}">
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Allow for Backorder</label>
                        <select class="form-control" id="brand" name="brand_id" data-parsley-required="true" placeholder="Brand">

                            <option value="1">YES</option>
                            <option value="2">NO</option>

                        </select>

                    </div>

                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Product is visible</label>

                        <select class="form-control" id="brand" name="brand_id" data-parsley-required="true" placeholder="Brand">

                            <option value="1">YES</option>
                            <option value="2">NO</option>

                        </select>

                    </div>

                </div>

            </div>

            <!-- produt relation  -->

        </div>

    </div>










</div>




</div>

</div>