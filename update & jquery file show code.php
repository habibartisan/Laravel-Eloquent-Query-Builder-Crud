<?php
    <form class="form-horizontal" role="form" action="{{route('update.customer',$edit->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Show New photo</label>
                                    <div class="col-sm-9">
                                        <img id="image" src="#"  style="margin-left:10px"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">New Photo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="photo" class="form-control" accept="image/*"  onchange="readURL(this);">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Old Photo</label>
                                    <div class="col-sm-9">
                                        <img src="{{ url($edit->photo) }}" name="oldphoto" style="height: 80px; width: 80px;">
                                        <input type="hidden" name="old_photo" value="{{ $edit->photo }}">
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                                    </div>
                                </div>
                            </form>



    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>



?>