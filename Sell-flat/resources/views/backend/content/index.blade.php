            <div class="card-header card-header-border-bottom " >
                <h2 class="text-center mt-2">Create Content</h2>
            </div>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <form action="{{ route('content-form') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">Image</label>
                        <input type="file" name="image[]" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Contact phone">
                    </div>
                    <button id="removeRow"  type="button" class="btn btn-danger">Remove Program</button>
                    <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-warning mb-5">Add Program</button>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <button   type="submit" class="btn btn-primary btn-default">Submit</button>
                        </div>
                    </div>
                </form>


     <script type="text/javascript">
            $("#addRow").click(function () {
                var html = '';
                html  = '<div class="form-group col-md-6">';
                html  = '<label for="exampleFormControlTextarea1">Image</label>';
                html  = '<input type="file" name="image[]" class="form-control" id="exampleFormControlInput1">';
                html  = '</div>';
                html  = '<button id="removeRow" type="button" class="btn btn-danger">Remove Program</button>';
                $('#newRow').append(html);
            });
            $(document).on('click', '#removeRow', function () {
                $(this).closest('#inputFormRow').remove();
            });
        </script>